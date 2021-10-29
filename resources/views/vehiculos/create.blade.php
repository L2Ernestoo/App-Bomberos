@extends('layouts.app')

@section('content')
    <div class="container shadow-sm">
        <h1 class="mt-4">Crear Vehiculo</h1>
        <form class="row g-3" method="post" action="{{route('vehiculos.store')}}">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Marca</label>
                <input type="text" name="marca" required maxlength="45" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Modelo</label>
                <input type="text" required name="modelo" maxlength="4" class="form-control" id="inputPassword4">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Capacidad Agua</label>
                <input type="text" required name="capacidad_agua" maxlength="25" class="form-control" id="inputAddress" placeholder="Cuanta agua">
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">Estacion</label>
                <select id="inputState" required name="estaciones_id" class="form-select">
                    <option selected hidden>Seleccionar...</option>
                    @foreach($estaciones as $estacion)
                        <option value="{{$estacion->id}}">{{$estacion->nombre}}</option>
                    @endforeach
                </select>
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
