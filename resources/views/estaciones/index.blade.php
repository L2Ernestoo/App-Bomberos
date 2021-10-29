@extends('layouts.app')

@section('content')
    <div class="container shadow-sm">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-4">Estaciones</h1>
            </div>
            <div class="col-md-2 justify-content-end">
                <a class="mt-4 btn btn-primary text-white" href="{{route('estaciones.create')}}" title="Crear Estacion">Registrar Estacion</a>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Capacidad Vehiculos</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                </tr>
                </thead>
                <tbody>
                @foreach($estaciones as $estacion)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$estacion->nombre}}</td>
                    <td>{{$estacion->capacidad_vehiculos}}</td>
                    <td>{{$estacion->direccion}}</td>
                    <td>{{$estacion->telefono}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection
