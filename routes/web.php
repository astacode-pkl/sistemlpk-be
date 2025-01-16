<?php

use App\Models\User;
use App\Models\Profile;
use App\Models\Program;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    $profile = Profile::all();
    return response()->json($profile);
});
Route::get('/about', function () {
    $profile = Profile::select('history')->get();
    return response()->json($profile);
});
