<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use Illuminate\Http\Request;

class EstacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $estaciones = Estacion::all();

        return view('estaciones.index',compact('estaciones'));
    }

    public function created(){
        return view('estaciones.create');
    }

    public function store(Request $request){
        $estacion = new Estacion;
        $estacion->nombre = $request->nombre;
        $estacion->capacidad_vehiculos = $request->capacidad_vehiculos;
        $estacion->direccion = $request->direccion;
        $estacion->telefono = $request->telefono;
        $estacion->save();

        return redirect()->route('estaciones.index');
    }
}
