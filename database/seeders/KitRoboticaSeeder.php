<?php

namespace Database\Seeders;

use App\Models\Kitrobotica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KitRoboticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kitrobotica::create([
            'nombre' => 'Introduccion a Robotica',
            'descripcion' => 'Kit de Introduccion',
        ]);

        Kitrobotica::create([
            'nombre' => 'Introduccion a Automatizacion',
            'descripcion' => 'Kit de Introduccion',
        ]);

        Kitrobotica::create([
            'nombre' => 'Programacion para Robotica',
            'descripcion' => 'Kit de Robotica Educacional',
        ]);

        Kitrobotica::create([
            'nombre' => 'Caracteristicas de un Robot',
            'descripcion' => 'Kit5',
        ]);
    }
}
