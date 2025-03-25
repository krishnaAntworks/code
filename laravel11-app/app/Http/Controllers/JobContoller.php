<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test=Job::with('employer')->latest()->paginate(3 );
        return view('jobs.jobs',[
            "jobs" => $test
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            "Jobs"=>["required","string","max:255"],
            "Salary"=>["required","string","max:255"],
        ]);
        Job::create([
            "title"=>request('Jobs'),
            "salary"=>request('Salary'),
            "employer_id"=>1
        ]);
        return redirect('/');
    }

    public function edit(string $id)
    {
        $job=Job::find($id);
        return view('jobs.edit',[
            "job" => $job
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job=Job::find($id);
        return view('jobs.show',[
            "job" => $job
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job=Job::find($id);
        if($job){
            $job->update([
                "title"=>request('Jobs'),
                "salary"=>request('Salary'),
                "employer_id"=>1
            ]);
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
