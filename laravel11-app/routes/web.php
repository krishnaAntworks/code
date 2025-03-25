<?php

use App\Http\Controllers\JobContoller;
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
Route::get('/jobs/', [JobContoller::class, 'index']);
Route::get('/jobs/create', [JobContoller::class, 'create']);
Route::post('/jobs', [JobContoller::class, 'store']);
Route::get('/jobs/{id}/edit', [JobContoller::class, 'edit']);
Route::post('/jobs/{id}/edit', [JobContoller::class, 'update']);
Route::get('/jobs/{id}', [JobContoller::class, 'show']);