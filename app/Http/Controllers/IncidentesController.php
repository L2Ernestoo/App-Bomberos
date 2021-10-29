<?php

namespace App\Http\Controllers;

use App\Models\Models\Incidencia;
use Illuminate\Http\Request;

class IncidentesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $incidencias = Incidencia::all();
        return view('incidencias.index',compact('incidencias'));
    }


}
