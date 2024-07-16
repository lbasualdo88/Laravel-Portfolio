<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconProject extends Model
{
    use HasFactory;

    protected $table = 'icon_projects';
    protected $fillable = ['project_id', 'icon_id'];
}
