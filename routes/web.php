<?php

use App\Models\User;
use App\Models\Program;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = User::all();
    return response()->json($user);
});
