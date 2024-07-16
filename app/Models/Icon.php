<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon_path'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'icon_project');
    }
}
