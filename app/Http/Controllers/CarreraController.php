<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index() {
    $carreras = Carrera::all();

    return response()->json($carreras);
}
    //
}
