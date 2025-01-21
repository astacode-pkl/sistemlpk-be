<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegulationController;


// Templating
Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/galleries',galleryController::class)->except('show');

    Route::resource('/regulations',RegulationController::class)->except('show');
    
    Route::resource('/benefits',BenefitController::class)->except('show');

    Route::resource('/contacts',ContactController::class)->except('show');
    
    Route::resource('/profile',ProfileController::class)->except('show');
    
    Route::resource('/categories',CategoryController::class)->except('show');
    
    Route::resource('/programs',ProgramController::class)->except('show');
