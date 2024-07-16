<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description', 
        'tipo', 
        'categoria', 
        'repository_url', 
        'repository2_url', 
        'deployed_url'
    ];

    public function icons()
    {
        return $this->belongsToMany(Icon::class, 'icon_project');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'image_project');
    }
}
