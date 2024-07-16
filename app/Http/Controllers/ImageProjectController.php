<?php

namespace App\Http\Controllers;

use App\Http\Resources\ImageProjectResource;
use App\Models\ImageProject;
use Illuminate\Http\Request;


class ImageProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ImageProjectResource::collection(ImageProject::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageProject $imageProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImageProject $imageProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImageProject $imageProject)
    {
        //
    }
}
