<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Program;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::first();
        Cache::put('companyprofile', $companyProfile);



        $galleries = Gallery::all();
        $heroes = Hero::orderBy('position')->get();
        foreach ($galleries as $gallery) {
            if ($gallery->categories->title === 'Kelulusan') {
                $graduations[] = $gallery;
            } else {
                $otherPhotos[] = $gallery;
            }
        }

        $otherPhotos = collect($otherPhotos);
        $otherPhotos = $otherPhotos->random(4);


        $programs = Program::all();
        return view('frontend.home', [
            'programs' => $programs,
            'graduations' => $graduations,
            'otherphotos' => $otherPhotos,
            'heroes' => $heroes
        ]);
    }
}
