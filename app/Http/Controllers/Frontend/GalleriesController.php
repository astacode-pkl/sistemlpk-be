<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Http\Controllers\Controller;

class GalleriesController extends Controller
{
    public function index(){
        $galleries = Gallery::all();

        foreach ($galleries as $gallery) {
            if ($gallery->categories->title === 'Kelulusan') {
                $graduations[] = $gallery;
            } else {
                $otherPhotos[] = $gallery;
            }
        }

        return view('frontend.galleries', [
            'graduations' => $graduations,
            'otherphotos' => $otherPhotos
        ]);
    }
}
