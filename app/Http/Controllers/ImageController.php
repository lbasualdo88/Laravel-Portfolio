<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Resources\ImageResource;
use App\Http\Resources\ImageColletion;

class ImageController extends Controller
{
    public function index() {

        
        //return new ImageColletion(Image::all());
        return ImageResource::collection(Image::all());
       }
}
