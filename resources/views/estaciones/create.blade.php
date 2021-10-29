@extends('layouts.app')

@section('content')
    <div class="container shadow-sm">
        <h1 class="mt-4">Crear Estacion</h1>
        <form class="row g-3" method="post" action="{{route('estaciones.store')}}">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="text" name="nombre" required maxlength="45" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Capacidad Vehiculos</label>
                <input type="number" required name="capacidad_vehiculos" maxlength="10" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Direccion</label>
                <input type="text" required name="direccion" maxlength="45" class="form-control" id="inputAddress" placeholder="Por donde ramiro">
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Telefono</label>
                <input type="number" required name="telefono" maxlength="50000000000" class="form-control" id="inputAddress2" placeholder="(502) 1111-1111">
            </div>

            <div class="col-12 mb-2">
                <button type="submit" class="btn btn-primary text-white">Registrar</button>
            </div>
        </form>
    </div>

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection
