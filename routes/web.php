<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\RegulationController;


// Templating
Route::get('/', [DashboardController::class, 'index']);
Route::get('/galleries', [GalleriesController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
// Route::get('/program', [ProgramController::class, 'index']);
Route::get('/regulation', [RegulationController::class, 'index']);

// Post
Route::post('/program', [ProgramController::class, 'store']);
// HEAD
// Route::get('/contact', function () {
//     $profile = Profile::all();
//     return view('welcome');
// });
// Route::get('/about', function () {
//     $profile = Profile::select('history')->get();
//     return response()->json($profile);
// });
Route::get('/inbox', [ContactController::class, 'index']);


//9d9f328f65264e464bf7ee5e0eb6f18dd2b7f5b2

    Route::resource('/galleries',GalleriesController::class)->except('show');

    Route::resource('/regulations',RegulationController::class)->except('show');
    
    Route::resource('/benefits',BenefitController::class)->except('show');

    Route::resource('/contacts',ContactController::class)->except('show');
    
    Route::resource('/profile',ProfileController::class)->except('show');
    
    Route::resource('/categories',CategoryController::class)->except('show');
    
    Route::resource('/program',ProgramController::class)->except('show');
