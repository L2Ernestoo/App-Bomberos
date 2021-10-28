<?php

namespace App\Http\Controllers;

use App\Models\Bombero;
use App\Models\Estacion;
use App\Models\Rango;
use Illuminate\Http\Request;

class BomberosController extends Controller
{
    public function index(){
        $bomberos = Bombero::join('estaciones', 'bomberos.estaciones_id', '=', 'estaciones.id')
            ->join('rangos', 'bomberos.rangos_id', '=', 'rangos.id')
            ->select('bomberos.*', 'estaciones.nombre as estacion', 'rangos.descripcion as rango')
        ->get();
        return view('bomberos.index', compact('bomberos'));
    }
    public function create(){
        $estaciones = Estacion::all();
        $rangos = Rango::all();
        return view('bomberos.create', compact('estaciones','rangos'));
    }

    public function store(Request $request){
        $bombero = new Bombero;
        $bombero->fill($request->all())->save();

        return redirect()->route('bomberos.index');

    }
}
