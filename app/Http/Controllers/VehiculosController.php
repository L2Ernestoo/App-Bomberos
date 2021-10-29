<?php

namespace App\Http\Controllers;

use App\Models\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $vehiculos = Vehiculo::join('estaciones', 'estaciones.id', 'vehiculos.estaciones_id')
            ->get();

        return view('vehiculos.index', compact('vehiculos'));
    }

    public function created(){
        return view('vehiculos.create');
    }

    public function store(Request $request){
        $vehiculo = new Vehiculo;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->capacidad_agua = $request->estaciones_id;
        $vehiculo->save();

        return response()->json('Vehiculo registrado');
    }
}
