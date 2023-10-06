<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProject extends Model
{
    use HasFactory;

    protected $table = "detail_project";
    protected $primaryKey = "id_detail_project";
    protected $guarded = [];

    public function Project()
    {
        return $this->belongsTo(Project::class, 'id_project');
    }
}
