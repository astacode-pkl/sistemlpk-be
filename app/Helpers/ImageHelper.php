<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class ImageHelper {


    public static function processImage($imageFile, $path)
    {
       // Simpan gambar ke storage/public
        $fullPath = $imageFile->store($path);
        return $fullPath;
    }
    public static function deleteImage($imagePath)
    {
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }
}
