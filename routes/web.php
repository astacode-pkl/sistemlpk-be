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
use App\Http\Controllers\CompanyProfileController;


// Templating
Route::get('/', [DashboardController::class, 'index']);
Route::get('/galleries', [GalleriesController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
// Route::get('/program', [ProgramController::class, 'index']);
// Route::get('/regulation', [RegulationController::class, 'index']);

// Post
// Route::post('/program', [ProgramController::class, 'store']);
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
Route::get('/inbox/{id}', [ContactController::class, 'show']);
Route::get('/inbox/delete/{id}', [ContactController::class, 'destroy']);


Route::resource('/galleries',GalleriesController::class)->except('show');
    
    Route::resource('/benefits',BenefitController::class)->except('show');

    Route::resource('/contacts',ContactController::class)->except('show');
    
    Route::resource('/companyprofile',CompanyProfileController::class)->except('show');
    
    Route::resource('/categories',CategoryController::class)->except('show');
    
    Route::resource('/program',ProgramController::class)->except('show');


    // laravel breeze
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';