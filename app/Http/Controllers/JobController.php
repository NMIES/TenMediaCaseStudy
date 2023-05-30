<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index() {
        return view('jobs.index', [
            'job' => Job::all()
        ]);
    }

    // Show single view
    public function show(Job $job) {
        return view('jobs.show', [
            'job' => $job
        ]);
    }
}
