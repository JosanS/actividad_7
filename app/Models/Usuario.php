<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    
    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'rol_usuario',
    ];

    public function grupo()
    {
    return $this->hasOne(Grupo::class, 'grupoID', 'usuarioID');
    }

}
