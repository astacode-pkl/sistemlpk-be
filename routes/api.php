<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\ProgramController;
use App\Http\Controllers\Api\RegulationController;
use App\Http\Controllers\Api\BenefitController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CompanyProfileController;

Route::resource('/regulations',RegulationController::class);

Route::resource('/contacts',ContactController::class);

Route::resource('/galleries',GalleryController::class);

Route::resource('/programs',ProgramController::class);

Route::resource('/benefits',BenefitController::class);

Route::resource('/categories',CategoryController::class);

Route::resource('/companyprofile', CompanyProfileController::class);



