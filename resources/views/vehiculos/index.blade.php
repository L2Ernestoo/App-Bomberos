@extends('layouts.app')

@section('content')
    <div class="container shadow-sm">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-4">Vehiculos</h1>
            </div>
            <div class="col-md-2 justify-content-end">
                <a class="mt-4 btn btn-primary text-white" href="{{route('vehiculos.create')}}" title="Crear Vehiculo">Registrar Vehiculo</a>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">capacidad_agua</th>
                    <th scope="col">Estacion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vehiculos as $vehiculo)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$vehiculo->marca}}</td>
                    <td>{{$vehiculo->modelo}}</td>
                    <td>{{$vehiculo->capacidad_agua}}</td>
                    <td>{{$vehiculo->estacion}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection
