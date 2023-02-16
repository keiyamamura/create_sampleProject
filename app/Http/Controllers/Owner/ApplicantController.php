<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\CheckForm;
use Illuminate\Http\Request;
use App\Models\Applicant;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::where('owner_id', Auth::id())
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
        dd($user, $job);
    }
}
