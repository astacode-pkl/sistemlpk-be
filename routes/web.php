<?php


use App\Http\Controllers\BenefitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LogHistoryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/persyaratan', [App\Http\Controllers\Frontend\RegulationController::class, 'index']);
Route::get('/tentang', [App\Http\Controllers\Frontend\AboutController::class, 'index']);
Route::get('/galeri', [App\Http\Controllers\Frontend\GalleriesController::class, 'index']);
Route::resource('/kontak', App\Http\Controllers\Frontend\ContactController::class)->except('show');



Route::prefix('admin')->group(function () {


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


        Route::controller(ContactController::class)->group(function () {
            Route::get('/inbox', 'index');
            Route::get('/inbox/{id}',  'show');
            Route::get('/inbox/delete/{id}', 'destroy');
            Route::post('/inbox/search', 'search');
        });

        // resource
        Route::resource('/galleries', GalleriesController::class)->except('show');

        Route::resource('/benefits', BenefitController::class)->except('show');

        Route::resource('/companyprofile', CompanyProfileController::class)->except('show');

        Route::resource('/categories', CategoryController::class)->except('show');

        Route::resource('/programs', ProgramController::class)->except('show');
        Route::resource('/loghistories', LogHistoryController::class)->except('show');
        Route::resource('/regulations', RegulationController::class)->except('show');
        // Route::resource('/heroes', HeroController::class)->except('show')->name('store','store.heroes');
        Route::controller(HeroController::class)->group(function () {
            Route::post('/heroes/update-position', 'updatePosition')->name('update.heroes');
            Route::get('/heroes', 'index');
            Route::get('/heroes/edit/{id}', 'edit');
            Route::get('/heroes/create', 'create');
            Route::post('/heroes', 'store')->name('store.heroes');
            Route::get('/heroes/delete/{id}', 'destroy')->name('destroyHero');
            Route::put('/heroes/update/{id}', 'update')->name('update.heroes');
        });
    });
});
