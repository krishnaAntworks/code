<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    return view('welcome',[
        "greetings" => "greetings "
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return response()->json(['name' => 'John Doe', 'email' => 'k']);
});
Route::get('/jobs/', function () {
    $test=Job::with('employer')->paginate(3 );
    return view('jobs/jobs',[
        "jobs" => $test
    ]);
});
Route::get('/jobs/create', function () {
    dd("hello world");
});
Route::get('/jobs/{id}', function ($id) {
    $job=Job::find($id);
    return view('jobs/job',[
        "job" => $job
    ]);
});