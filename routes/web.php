<?php

use App\Http\Controllers\BenefitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegulationController;
use Illuminate\Support\Facades\Route;

// Route::get('/contact', function () {
//     $profile = Profile::all();
//     return response()->json($profile);
// });
// Route::get('/contact', function () {
//     $profile = Profile::all();
//     return view('welcome');
// });
// Route::get('/about', function () {
//     $profile = Profile::select('history')->get();
//     return response()->json($profile);
// // });
Route::get('/', function () {
    return view('/html/main/index');
});

// Route::get('/contact/delete/{id}', function ($id) {});   


    Route::resource('/galleries',galleryController::class)->except('show');

    Route::resource('/regulations',RegulationController::class)->except('show');
    
    Route::resource('/benefits',BenefitController::class)->except('show');

    Route::resource('/contacts',ContactController::class)->except('show');
    
    Route::resource('/profile',ProfileController::class)->except('show');
    
    Route::resource('/categories',CategoryController::class)->except('show');
    
    Route::resource('/programs',ProgramController::class)->except('show');


