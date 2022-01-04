<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudiante::create([
            'estudiante_nombre' => "Nombre 1",
            'estudiante_apellido' => "Apellido 1",
            'estudiante_carrera' => "1",
        ]);

        Estudiante::create([
            'estudiante_nombre' => "Nombre 2",
            'estudiante_apellido' => "Apellido 2",
            'estudiante_carrera' => "2",
        ]);

        Estudiante::create([
            'estudiante_nombre' => "Nombre 3",
            'estudiante_apellido' => "Apellido 3",
            'estudiante_carrera' => "3",
        ]);
        
        Estudiante::create([
            'estudiante_nombre' => "Nombre 4",
            'estudiante_apellido' => "Apellido 4",
            'estudiante_carrera' => "4",
        ]);
        
        Estudiante::create([
            'estudiante_nombre' => "Nombre 5",
            'estudiante_apellido' => "Apellido 5",
            'estudiante_carrera' => "5",
        ]);
        
        Estudiante::create([
            'estudiante_nombre' => "Nombre 6",
            'estudiante_apellido' => "Apellido 6",
            'estudiante_carrera' => "1",
        ]);
    }
}
