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



        $galleries = Gallery::all();

        foreach ($galleries as $gallery) {
            if ($gallery->categories->title === 'Kelulusan') {
                $graduations[] = $gallery;
            } else {
                $activities[] = $gallery;
            }
        }

        $activities = collect($activities);
        $activities = $activities->slice(0, 4);


        $programs = Program::all();
        // var_dump($graduations);
        return view('frontend.home', [
            'programs' => $programs,
            'graduations' => $graduations,
            'activities' => $activities
        ]);
    }
}
