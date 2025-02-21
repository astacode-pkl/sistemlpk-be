<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Program;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;
use App\Models\Hero;
use Exception;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::first();
        $heroes = Hero::orderBy('position')->get();
        $galleries = Gallery::all();
        $programs = Program::all();


        Cache::add('companyprofile', $companyProfile);

        //variabel default
        $otherPhotos = [];
        $graduations = [];

        foreach ($galleries as $gallery) {
            switch ($gallery->categories->title) {
                case 'Kelulusan':
                    $graduations[] = $gallery;
                    break;
                
                default:             
                $otherPhotos[] = $gallery;
                    break;
            }
        }
        if (count($otherPhotos) >= 4) {
            $otherPhotos = collect($otherPhotos);
            $otherPhotos = $otherPhotos->random(4);
        }

        return view('frontend.home', [
            'programs' => $programs,
            'graduations' => $graduations,
            'otherphotos' => $otherPhotos,
            'heroes' => $heroes
        ]);
    }
}
