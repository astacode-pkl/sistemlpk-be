<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\regulationController;

// Templating
Route::get('/', [DashboardController::class, 'index']);


// Route::get('/contact', function () {
//     $profile = Profile::all();
//     return view('welcome');
// });
Route::get('/about', function () {
    $profile = Profile::select('history')->get();
    return response()->json($profile);
});


Route::get('/contact/delete/{id}', function ($id) {});

Route::resource('/gallery', galleryController::class);
Route::resource('/regulation', regulationController::class);
