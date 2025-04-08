<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function job_view()
    {
        $jobs = Job::all();
        return view('job.job_view', compact('jobs'));
    }

    public function create_job()
    {
        $categories = Category::all();
        return view('job.create_job', compact('categories'));
    }

    public function saveJob($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to log in to save jobs.');
        }

        $job = Job::find($id);

        Auth::user()->savedJobs()->attach($job);

        return redirect()->back()->with('success', 'Job saved successfully.');
    }

    public function removeFromFavorites($id)
    {
        $user = Auth::user();

        if ($user->savedJobs->contains($id)) {
            $user->savedJobs()->detach($id);
            return redirect()->back()->with('success', 'Job removed from favorites successfully!');
        }

        return redirect()->back()->with('error', 'Job not found in favorites!');
    }

    public function show_job(string $id)
    {
        $job = Job::findOrFail($id);
        return view('job.show_job', compact('job'));
    }

    public function update_job($id)
    {
        $job = Job::find($id);
        return view('job.update_job', compact('job'));
    }

    public function edit_job(Request $request, $id)
    {
        $job = Job::find($id);
        $job->job_title = $request->job_title;
        $job->job_region = $request->job_region;
        $job->company_name = $request->company_name;
        $job->salary = $request->salary;
        $job->experience = $request->experience;
//        $job->Gender = $request->Gender;
        $job->application_deadline = $request->application_deadline;
        $job->responsibilities = $request->responsibilities;
        $job->otherbenefits = $request->otherbenefits;
        $job->education_experience = $request->education_experience;
        $job->job_description = $request->job_description;
        $job->vacancy = $request->vacancy;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientoriginalExtension();
            $request->file->move('jobimage', $imagename);
            $job->image = $imagename;
        }
        $job->save();
        return redirect()->back();
    }


    public function store_jobs(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'job_region' => 'required',
            'job_type' => 'required',
            'experience' => 'required',
            'vacancy' => 'required',
            'Gender' => 'required',
            'salary' => 'required',
            'company_name' => 'required',
            'job_description' => 'required',
            'responsibilities' => 'required',
            'application_deadline' => 'required',
            'education_experience' => 'required',
            'otherbenefits' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('jobimage', $imageName);

        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->job_region = $request->input('job_region');
        $job->job_type = $request->input('job_type');
        $job->experience = $request->input('experience');
        $job->vacancy = $request->input('vacancy');
        $job->company_name = $request->input('company_name');
        $job->Gender = $request->input('Gender');
        $job->salary = $request->input('salary');
        $job->application_deadline = $request->input('application_deadline');
        $job->job_description = $request->input('job_description');
        $job->responsibilities = $request->input('responsibilities');
        $job->education_experience = $request->input('education_experience');
        $job->otherbenefits = $request->input('otherbenefits');
        $job->image = $imageName;

        $job->category_id = $request->input('category_id');

        $job->save();

        return redirect()->route('job_view');
    }

    public function delete(string $id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->back();
    }

    public function getCountries(): JsonResponse
    {
        $countries = Job::query()->pluck('job_region')->unique();

        return response()->json($countries);
    }

    public function job_search(Request $request)
    {
        $jobName = $request->input('job_name');
        $jobCountry = $request->input('job_country');

        $query = Job::query();

        if (!empty($jobName)) {
            $query->where('job_title', 'like', '%' . $jobName . '%');
        }
        if (!empty($jobCountry)) {
            $query->where('job_region', $jobCountry);
        }

        $jobs = $query->get();
        $totalusers = User::count();
        $totaljobs = Job::count();
        $acceptedApplications = Application::where('status', 'approved')->count();
        $companies = Job::query()->whereNotNull('image')->pluck('image');

        return view('user.home', compact('jobs', 'totalusers', 'totaljobs', 'acceptedApplications', 'companies'));
    }
}
