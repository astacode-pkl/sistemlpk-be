<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\CompanyProfileController;


// Templating
Route::get('/', [DashboardController::class, 'index']);
Route::get('/galleries', [GalleriesController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/inbox', [ContactController::class, 'index']);


Route::get('/inbox/{id}', [ContactController::class, 'show']);
Route::get('/inbox/delete/{id}', [ContactController::class, 'destroy']);

// Auth
Route::post('/login', [UserController::class, 'login']);
Route::get('/login',  function () {
    return view('login');
});
Route::post('/register', [UserController::class, 'register']);
Route::get('/register',  function(){
    return view('register');
});
Route::post('/logout', [UserController::class, 'logout']);

// resource
Route::resource('/galleries', GalleriesController::class)->except('show');

Route::resource('/benefits', BenefitController::class)->except('show');

Route::resource('/contacts', ContactController::class)->except('show');

Route::resource('/companyprofile', CompanyProfileController::class)->except('show');

Route::resource('/categories', CategoryController::class)->except('show');

Route::resource('/program', ProgramController::class)->except('show');
