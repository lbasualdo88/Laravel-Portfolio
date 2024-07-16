<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProject extends Model
{
    use HasFactory;

    protected $table = 'image_projects';
    protected $fillable = ['project_id', 'image_id'];
}
