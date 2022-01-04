<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index() {
        $estudiantes = Estudiante::all();

        return response()->json($estudiantes);
    }


    public function store(Request $request) {

        //Validación
        $request->validate([
            'estudiante_nombre' => 'required',
            'estudiante_apellido' => 'required',
            'estudiante_carrera' => 'required',
        ]);

        //Guardar en BD
        $estudiante = Estudiante::created([
            'estudiante_nombre' => $request->estudiante_nombre,
            'estudiante_apellido' => $request->estudiante_apellido,
            'estudiante_carrera' => $request->estudiante_carrera
        ]);

        //Return response
        return response()->json($estudiante);
    }
}
