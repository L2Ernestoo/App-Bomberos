@extends('layouts.app')

@section('content')
    <div class="container shadow-sm">
        <h1 class="mt-4">Crear Incidencia</h1>
        <form class="row g-3" method="post" action="{{route('incidente.store')}}">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="text" name="nombre" required maxlength="35" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Descripcion</label>
                <input type="text" required name="descripcion" maxlength="150" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Direccion</label>
                <input type="text" required name="direccion" maxlength="45" class="form-control" id="inputAddress" placeholder="Por donde">
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
