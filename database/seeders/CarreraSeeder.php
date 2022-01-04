<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([
            'carrera_nombre' => "Licenciatura en Biotecnología"
        ]);

        Carrera::create([
            'carrera_nombre' => "Licenciatura en Gestión Ambiental"
        ]);

        Carrera::create([
            'carrera_nombre' => "Licenciatura en Tecnología de los Alimentos"
        ]);

        Carrera::create([
            'carrera_nombre' => "Tecnicatura Universitaria en Tecnología de los Alimentos"
        ]);

        Carrera::create([
            'carrera_nombre' => "Tecnicatura Universitaria en Gestión Ambiental"
        ]);

        Carrera::create([
            'carrera_nombre' => "Tecnicatura Universitaria en Viverismo"
        ]);
    }
}
