<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\RegulationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::resource();/
Route::resource('/home',HomeController::class);

Route::resource('/regulations',RegulationController::class);

Route::resource('/contacts',ContactController::class);

Route::resource('/galleries',GalleryController::class);



