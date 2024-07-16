<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;
use App\Http\Resources\IconResource;
use App\Http\Resources\IconColletion;

class IconController extends Controller
{
   public function index() {

    //return response()->json(['icon'=> Icon::all()]);
    //return new IconColletion(Icon::all());
    return IconResource::collection(Icon::all());
   }
}
