<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Program;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use Exception;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // $companyProfile = CompanyProfile::first();
        // $advertisement = CompanyProfile::first()->value('advertisement')->get();
        // Cache::put('companyprofile', $companyProfile);
        // $galleries = Gallery::all();
        $heroes = Hero::orderBy('position')->get();
        $categories = Category::with('galleries')->paginate(6);
        
        //variabel default
        // $otherPhotos = [];
        // $graduations = [];

        // foreach ($galleries as $gallery) {
        //     switch ($gallery->categories->title) {
        //         case 'Kelulusan':
        //             $graduations[] = $gallery;
        //             break;
                
        //         default:             
        //         $otherPhotos[] = $gallery;
        //             break;
        //     }
        // }
        // $otherPhotos = collect($otherPhotos);
        // if(count($otherPhotos) >= 4 ){
        //     $otherPhotos = $otherPhotos->random(4);
        // }   

        return view('frontend.home', [
            'programs' => $programs,
            // 'graduations' => $graduations,
            // 'otherphotos' => $otherPhotos,
            'heroes' => $heroes,
            'categories' => $categories
        ]);
    }
}
