<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IconProjectController;
use App\Http\Controllers\ImageProjectController;

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/nuevoProject', [ProjectController::class, 'store']);
    
});

Route::apiResource('/icon', IconController::class);
Route::apiResource('/imagen', ImageController::class);
Route::apiResource('/project', ProjectController::class);
Route::apiResource('/icon-project', IconProjectController::class);
Route::apiResource('/image-project', ImageProjectController::class);


// Autenticacion
Route::post('/login', [AuthController::class, 'login']);
