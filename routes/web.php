<?php

use App\Http\Controllers\GalleryController;
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
// Route::post('/gallery/save', [GalleryController::class, 'insert']);
Route::get('/contact/delete/{id}', function ($id) {});
