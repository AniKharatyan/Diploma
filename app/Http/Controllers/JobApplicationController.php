<?php

namespace App\Http\Controllers;
use App\Jobs\SendApplicationStatusMailJob;
use App\Models\Application;
use App\Models\Category;
use App\Models\Job;
use App\Models\CVuser;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function apply(Request $request, Job $job)
    {
        $request->validate([
            'cover_letter' => 'required|string',
        ]);

        $coverLetter = $request->input('cover_letter');

        $user = auth()->user();

        $cvUser = CVuser::where('user_id', $user->id)->first();

        if (!$cvUser) {
            return redirect()->back()->with('error', 'You must upload your CV before applying.');
        }

        DB::beginTransaction();
        try {
            $jobApplication = new Application();
            $jobApplication->user_id = $user->id;
            $jobApplication->job_id = $job->id;
            $jobApplication->status = 'in progress';
            $jobApplication->cover_letter = $coverLetter;
            $jobApplication->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while processing your application.');
        }

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function applications(){
        $applications=Application::all();
        $categories = Category::all();
        $companies = Job::distinct()->pluck('company_name');

        return view('applications.applications',compact('applications', 'categories', 'companies'));
    }

    public function approved($id)
    {
        $application = Application::find($id);
        $application->status = 'approved';
        $application->save();

        SendApplicationStatusMailJob::dispatch($application);

        return redirect()->back();
    }

    public function canceled($id)
    {
        $application = Application::find($id);
        $application->status = 'refused';
        $application->save();

        SendApplicationStatusMailJob::dispatch($application);

        return redirect()->back();
    }

    public function viewCV($userId)
    {
        $cvUser = CVUser::where('user_id', $userId)->first();

        if (!$cvUser || !Storage::exists($cvUser->cv_path)) {
            abort(404);
        }

        return Storage::download($cvUser->cv_path);
    }

    public function index(Request $request)
    {
        $query = Application::with(['User']);

        if ($request->filled('category')) {
            $query->whereHas('job', function ($q) use ($request) {
                $q->where('category_id', $request->category);
            });
        }

        if ($request->filled('company')) {
            $query->whereHas('job', function ($q) use ($request) {
                $q->where('company_name', $request->company);
            });
        }

        $applications = $query->get();

        $categories = Category::all();
        $companies = Job::distinct()->pluck('company_name');

        return view('applications.applications', compact('applications', 'categories', 'companies'));
    }
}
