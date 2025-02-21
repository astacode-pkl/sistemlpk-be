<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function uploadImage($destination,$image){
        $destinationPath = $destination;
        //sh1 file name
        
        $sha1FileName = sha1($image->getClientOriginalName());
        $imageMimeType = $image->getMimeType();

        if (strpos($imageMimeType, 'image/') === 0) {
            $imageName = date('YmdHis') . '' . str_replace(' ', '', $sha1FileName);
            $image->move($destinationPath, $imageName);

            $sourceImagePath = public_path($destinationPath . $imageName);
            $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

            $sourceImage = null;
            switch ($imageMimeType) {
                case 'image/jpeg':
                    $sourceImage = @imagecreatefromjpeg($sourceImagePath);
                    break;
                case 'image/png':
                    $sourceImage = @imagecreatefrompng($sourceImagePath);
                    break;
                case 'image/jpg':
                    $sourceImage = @imagecreatefromjpg($sourceImagePath);
                    break;
                default:
                    $sourceImage = false;
                    break;
            }

            if ($sourceImage !== false) {
                imagewebp($sourceImage, $webpImagePath);
                imagedestroy($sourceImage);
                @unlink($sourceImagePath);

                return pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
            }
        }
        return '';

    }
    
    public function destroyImage($destination,$data){
        $destinationPath = $destination;
        if ($data && file_exists(
            public_path($destinationPath . $data)
        )) {

            unlink(public_path($destinationPath . $data));
        }
    }

    
    public function updateImage($destination,$data,$image){
         $destinationPath = $destination;
            if ($image && file_exists(
                public_path($destinationPath . $data)
            )) {

                @unlink(public_path($destinationPath . $data));
            }else if (!$image && file_exists(
                public_path($destinationPath . $data)
            )){

                return $data;
            }
            
            //sh1 file name
            $sha1FileName = sha1($image->getClientOriginalName());

            $imageMimeType = $image->getMimeType();

            if (strpos($imageMimeType, 'image/') === 0) {
                $imageName = date('YmdHis') . '' . str_replace(' ', '', $sha1FileName);
                $image->move($destinationPath, $imageName);

                $sourceImagePath = public_path($destinationPath . $imageName);
                $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                $sourceImage = null;
                switch ($imageMimeType) {
                    case 'image/jpeg':
                        $sourceImage = @imagecreatefromjpeg($sourceImagePath);
                        break;
                    case 'image/png':
                        $sourceImage = @imagecreatefrompng($sourceImagePath);
                        break;
                    case 'image/jpg':                    
                        $sourceImage = @imagecreatefromjpg($sourceImagePath);

                        break;
                    default:
                        $sourceImage = false;
                        break;
                }

                if ($sourceImage !== false) {
                    imagewebp($sourceImage, $webpImagePath);
                    imagedestroy($sourceImage);
                    @unlink($sourceImagePath);

                    return  pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                }
            }
    }
}
