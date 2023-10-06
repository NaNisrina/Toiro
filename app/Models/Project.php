<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "project";
    protected $primaryKey = "id_project";
    protected $guarded = [];

    public function DetailProject()
    {
        return $this->hasMany(DetailProject::class, 'id_project', 'id_project');
    }
}
