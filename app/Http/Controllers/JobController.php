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

    // Show Edit job Form
    public function edit(Job $job) {
        return view('jobs.edit', [
            'job' => $job,  
        ]);
    }

    // Update Job data
    public function update(Request $request, Job $job) {
        $request->validate([
            'company_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'startDate' => 'required'
        ]);

        $job->update($$request->all());
        return redirect()->route('/jobs/{job}')->with('succes', 'Job updated successfully!');
    }
}
