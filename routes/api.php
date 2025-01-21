<?php

use App\Http\Controllers\Api\ProgramController;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::resource();/

Route::get('/contact', function () {
    $profile = Profile::all();
    return response()->json($profile);
});
Route::get('/home', function () {
    $profile = Profile::all();
    $gallery = Gallery::all();
    $program = Program::all();
    return response()->json(['profile' => $profile, 'gallery' => $gallery, 'program' => $program]);
});
Route::get('/about', function () {
    $profile = Profile::all();
    return response()->json($profile);
});

// Route::resource('/home', ProgramController::class);
// Route::resource('/home', ProgramController::class);