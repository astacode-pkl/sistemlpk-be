<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Exception;

class GalleriesController extends Controller
{
    public function index()
    {
        $otherPhotos = [];
        $graduations = [];

        $galleries = Gallery::all();
        foreach ($galleries as $gallery) {
            if ($gallery->categories->title === 'Kelulusan') {
                $graduations[] = $gallery;
            } else {
                $otherPhotos[] = $gallery;
            }
        }
        if (count($otherPhotos) >= 4) {
            $otherPhotos = collect($otherPhotos);
            $otherPhotos = $otherPhotos->random(4);
        }

        return view('frontend.galleries', [
            'graduations' => $graduations,
            'otherphotos' => $otherPhotos
        ]);
    }
}
