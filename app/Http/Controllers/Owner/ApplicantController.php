<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\User;
use App\Models\Owner;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::where('owner_id', Auth::id())
            ->join('users', 'users.id', '=', 'applicants.user_id')
            ->join('jobs', 'jobs.id', '=', 'applicants.job_id')
            ->get();

        return view('owner.applicant.index', compact('applicants'));
    }
}
