<?php

namespace App\Http\Controllers;

use App\Models\IconProject;
use Illuminate\Http\Request;
use App\Http\Resources\IconProjectResource;

class IconProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return IconProjectResource::collection(IconProject::all());
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
    public function show(IconProject $iconProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IconProject $iconProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IconProject $iconProject)
    {
        //
    }
}
