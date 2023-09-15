<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    //
    public function personas(){
        return view('DatosPersonas');
    }

    public function crearPersonas(){
        return view('CrearPersona');
    }
}
