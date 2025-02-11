<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\LogHistoryController;

Route::middleware(['guest'])->group(function () {
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/login',  function () {
        return view('login');
    })->name('login');
    
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/galleries', [GalleriesController::class, 'index']);


    Route::controller(ContactController::class)->group(function() {
        Route::get('/inbox', 'index');
        Route::get('/inbox/{id}',  'show');
        Route::get('/inbox/delete/{id}','destroy');
        Route::post('/inbox/search', 'search');
    });
    // resource
    Route::resource('/galleries', GalleriesController::class)->except('show');

    Route::resource('/benefits', BenefitController::class)->except('show');

    Route::resource('/contacts', ContactController::class)->except('show');

    Route::resource('/companyprofile', CompanyProfileController::class)->except('show');

    Route::resource('/categories', CategoryController::class)->except('show');

    Route::resource('/programs', ProgramController::class)->except('show');
    Route::resource('/loghistories', LogHistoryController::class)->except('show');
    Route::resource('/regulations', RegulationController::class)->except('show');
});
