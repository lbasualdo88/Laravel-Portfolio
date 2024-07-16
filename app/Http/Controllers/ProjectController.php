<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Project;
use App\Models\IconProject;
use App\Models\ImageProject;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use App\Models\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProjectResource::collection(Project::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

       
        //Crear Proyecto en tabla
        $nuevoProject = Project::create([
        'title'  => $data['title'],
        'description' => $data['description'],
        'tipo'  => $data['tipo'],
        'categoria' => $data['categoria'],
        'repository_url' => $data['repository_url'],
        'repository2_url' => $data['repository2_url'] ?  $data['repository2_url'] : null,
        'deployed_url' => $data['deployed_url'],
        ]);

        // Obtener iconos verdaderos (checkboxes marcados)
        $iconos = $data['icons'];

        // Obtener los IDs de los iconos desde la tabla Icon
        $iconosIds = Icon::whereIn('name', $iconos)->pluck('id')->toArray();
        
        // Guardar los registros en la tabla pivot IconProject
        foreach ($iconosIds as $iconoId) {
            IconProject::create([
                'project_id' => $nuevoProject->id,
                'icon_id' => $iconoId,
            ]);
        }
         //Obtener las imagenes
         $imagenes = $data['images'];
          $img = "img/proyectos/"; 
         
         // Guardar las imágenes en la tabla 'images' y obtener sus IDs
        $imagenesIds = [];
            foreach ($imagenes as $imagen) {
                $imagenGuardada = Image::create([
                    'name'  => $data['title'],
                    'image_path' => $img . $imagen,
                ]);
                $imagenesIds[] = $imagenGuardada->id;
            }
         
        // $imagenesIds = Image::whereIn('name', $imagenes)->pluck('id')->toArray();
         error_log(print_r($imagenesIds, true));

         //Guardar los registros en la tabla pivot ImageProject
         foreach ($imagenesIds as $imagenId) {
            ImageProject::create([
                'project_id' => $nuevoProject->id,
                'image_id' => $imagenId,
            ]);
        }
        

        // Construir la respuesta manualmente
        $response = [
            'title'  => $data['title'],
            'description' => $data['description'],
            'tipo'  => $data['tipo'],
            'categoria' => $data['categoria'],
            'repository_url' => $data['repository_url'],
            'repository2_url' => $data['repository2_url'] ?  $data['repository2_url'] : null,
            'deployed_url' => $data['deployed_url'],
            'icons' => $data['icons'],
            'images' => $data['images'],
        ];

        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
