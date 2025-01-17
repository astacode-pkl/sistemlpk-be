<?php

use App\Http\Controllers\galleryController;
use App\Http\Controllers\regulationController;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Program;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    $profile = Profile::all();
    return response()->json($profile);
});
// Route::get('/contact', function () {
//     $profile = Profile::all();
//     return view('welcome');
// });
Route::get('/about', function () {
    $profile = Profile::select('history')->get();
    return response()->json($profile);
});
Route::get('/', function () {
    return view('/html/main/index');
});

Route::get('/contact/delete/{id}', function ($id) {});

Route::resource('/gallery',galleryController::class);
Route::resource('/regulation',regulationController::class);