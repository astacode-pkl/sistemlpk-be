<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Http\Controllers\Controller;

class GalleriesController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
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
      

        return view('frontend.galleries', [
            'graduations' => $graduations,
            'otherphotos' => $otherPhotos
        ]);
    }
}
