<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PhotouploadController extends Controller
{
    public static function imageUpload(string $name, int $height, int $width, string $path, $file):string{
        // Image::make($file)
        // ->fit($width, $height)
        // ->save(public_path('image/post/') . $image_name, ['quality' => 50, 'format' => 'webp']);
        // return $image_name;
        $image_name = "image.jpg";

    Image::make($file)
        ->fit($width, $height)
        ->quality(50)
        ->encode('webp')
        ->save(public_path($path).$image_name);

    return $image_name;
        // Image::make($file)
        // ->fit($width, $height)
        // ->save(public_path($path) . $image_name, 50);
        //  return $image_name;
    }
    public function imagUnlink($path, $name):void{
        $image_path = public_path($path).$name;
        if(file_exists($image_path)){
            unlink($image_path);
        }
    }

}
