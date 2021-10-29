<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncidentesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
