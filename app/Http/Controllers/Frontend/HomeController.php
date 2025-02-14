<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Program;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::first();
        Cache::add('companyprofile', $companyProfile);


        $graduations = Gallery::with('categories');

        $programs = Program::all();
        return view('frontend.app', [
            'programs' => $programs,
            'graduations' => $graduations
        ]);


    }
}
