<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Job;
use App\Models\JobApplication;
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
        return view('applications.applications',compact('applications'));
    }

    public function approved($id)
    {
        $application = Application::find($id);
        $application->status = 'approved';
        $application->save();

        return redirect()->back();
    }


    public function canceled($id)
    {
        $application = Application::find($id);
        $application->status = 'refused';
        $application->save();

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
}
