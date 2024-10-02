<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitrobotica extends Model
{
    use HasFactory;

    protected $table = 'kit_robotica';
    
    public function clases()
    {
    return $this->hasMany(Clase::class, 'kitID', 'kitID');
    }

}
