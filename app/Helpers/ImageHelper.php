<?php

namespace App\Helpers;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    protected $manager;
    public function __construct()
    {
        $this->manager = new ImageManager(new Driver());
    }

    public static function processImage($imageFile, $path)
    {
        // Baca & ubah gambar ke WebP
        $manager = new ImageManager(new Driver());
        $image = $manager->read($imageFile->getPathname());
        $webpImage = $image->encode(new WebpEncoder(quality: 90));
        // Buat nama file unik
        $imageName = date('YmdHis') . '_' . md5(uniqid()) . '.webp';
        $fullPath = $path . $imageName;

        // Simpan gambar ke storage/public
        Storage::disk('public')->put($fullPath, (string) $webpImage);

        return $fullPath;
    }
    public static function deleteImage($imagePath)
    {
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }
}
