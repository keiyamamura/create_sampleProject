<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\CheckForm;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Applicant;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::where('owner_id', Auth::id())->where('consent_flg', 0)
            ->join('users', 'users.id', '=', 'applicants.user_id')
            ->join('jobs', 'jobs.id', '=', 'applicants.job_id')
            ->get();

        $current_jobs = [];
        foreach($applicants as $applicant) {
            $current_jobs[] = CheckForm::current_job($applicant->user->current_job);
        }

        return view('owner.applicant.index', compact('applicants', 'current_jobs'));
    }

    public function show($user, $job)
    {
        $user = User::findOrFail($user);
        $job  = Job::where('owner_id', Auth::id())->findOrFail($job);

        $prefecture = CheckForm::prefecture($job->prefectures_id);
        $status     = CheckForm::status($job->status);
        $experience = CheckForm::experience($job->experience);
        $license    = CheckForm::license($job->license);
        $age_limit  = CheckForm::age_limit($job->age);
        $user_age  = CheckForm::age($user->age);
        $user_gender = CheckForm::gender($user->gender);
        $user_prefecture  = CheckForm::prefecture($user->prefectures_id);
        $user_current_job  = CheckForm::current_job($user->current_job);

        return view('owner.applicant.show', compact('user', 'job','prefecture', 'status', 'experience', 'license', 'age_limit', 'user_age', 'user_gender', 'user_prefecture', 'user_current_job'));
    }

    public function consent($user, $job)
    {
        $applicant = Applicant::where('user_id', $user)->where('job_id', $job)->first();
        $consent = Applicant::findOrFail($applicant->id);

        $consent->consent_flg = 1;
        $consent->save();

        return redirect()
            ->route('owner.applicant.index')
            ->with([
                'message' => '承諾しました',
                'status' => 'info'
            ]);
    }

    public function destroy($user, $job)
    {
        $applicant = Applicant::where('user_id', $user)->where('job_id', $job)->first();
        $applicant = Applicant::findOrFail($applicant->id);

        $applicant->delete();

        return redirect()
            ->route('owner.applicant.index')
            ->with([
                'message' => '承諾しませんでした',
                'status' => 'alert'
            ]);
    }
}
