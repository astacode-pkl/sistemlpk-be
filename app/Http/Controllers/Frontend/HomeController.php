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
        
        $heroes = Hero::orderBy('position')->get();
        $categories = Category::with([
            'galleries'=>function($query){
                $query->limit(4);
            }
        ])->get();

        $programs = Program::all();
        return view('frontend.home', [
            'programs' => $programs,
            'heroes' => $heroes,
            'categories' => $categories
        ]);
    }
}
