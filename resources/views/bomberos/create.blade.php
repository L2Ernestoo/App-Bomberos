@extends('layouts.app')

@section('content')
    <div class="container shadow-sm">
        <h1 class="mt-4">Crear Bombero</h1>
        <form class="row g-3" method="post" action="{{route('bomberos.store')}}">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="text" name="nombre" required maxlength="45" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">DPI</label>
                <input type="number" required name="dpi" maxlength="10000000000000000" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Direccion</label>
                <input type="text" required name="direccion" maxlength="45" class="form-control" id="inputAddress" placeholder="Por donde ramiro">
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Telefono</label>
                <input type="number" required name="telefono" maxlength="50000000000" class="form-control" id="inputAddress2" placeholder="(502) 1111-1111">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Fecha Nacimiento</label>
                <input type="date" required name="fecha_nacimiento" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Estacion</label>
                <select id="inputState" required name="estaciones_id" class="form-select">
                    <option selected hidden>Seleccionar...</option>
                    @foreach($estaciones as $estacion)
                        <option value="{{$estacion->id}}">{{$estacion->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Rango</label>
                <select id="inputState" required name="rangos_id" class="form-select">
                    <option selected hidden>Seleccionar...</option>
                    @foreach($rangos as $rango)
                        <option value="{{$rango->id}}">{{$rango->descripcion}}</option>
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
