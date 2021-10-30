<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Incidencia;
use Illuminate\Http\Request;

class IncidenteController extends Controller
{
    public function created(){
        return view ('incidencias.created');
    }

    public function store(Request $request){
        $fuego = new Incidencia;
        $fuego->descripcion = $request->descripcion;
        $fuego->direccion = $request->direccion;
        $fuego->nombre = $request->nombre;
        $fuego->save();

        return redirect()->route('incidente.create');
    }
}
