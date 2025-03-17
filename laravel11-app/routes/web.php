<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

$jobs=[
    [
        "title" => "PHP Developer",
        "description" => "This is an awesome job!!!",
            "contact" => "If you are interested send us your resume to"
        ]
];

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
    $test=Job::all();
    $res=[];
    foreach($test as $job){
        $res[]=[
            "title" => $job->title,
            "salary" => $job->salary,
        ];
    }
    dd($res);
});
