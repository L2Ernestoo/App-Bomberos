<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
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
            ->select('vehiculos.*','estaciones.nombre as estacion')
            ->get();

        return view('vehiculos.index', compact('vehiculos'));
    }

    public function created(){
        $estaciones = Estacion::all();
        return view('vehiculos.create', compact('estaciones'));
    }

    public function store(Request $request){
        $vehiculo = new Vehiculo;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->capacidad_agua = $request->capacidad_agua;
        $vehiculo->estaciones_id = $request->estaciones_id;
        $vehiculo->save();

        return redirect()->route('vehiculos.index');
    }
}
