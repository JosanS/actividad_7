<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    public function clases()
    {
    return $this->belongsToMany(Clase::class, 'grupo_clase', 'grupoID', 'claseID');
    }

}
