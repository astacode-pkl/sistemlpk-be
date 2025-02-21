<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Models\Category;

class GalleriesController extends Controller
{
    public function index(){
        $categories = Category::with('galleries')->get();
        return view('frontend.galleries', [
            'categories' => $categories
        ]);
    }
}
