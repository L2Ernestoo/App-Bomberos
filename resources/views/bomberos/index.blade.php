@extends('layouts.app')

@section('content')
    <div class="container shadow-sm">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-4">Bomberos</h1>
            </div>
            <div class="col-md-2 justify-content-end">
                <a class="mt-4 btn btn-primary text-white" href="{{route('bomberos.create')}}" title="Crear Bombero">Registrar Bombero</a>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Estacion</th>
                    <th scope="col">Rango</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bomberos as $bombero)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$bombero->nombre}}</td>
                    <td>{{$bombero->direccion}}</td>
                    <td>{{$bombero->telefono}}</td>
                    <td>{{$bombero->estacion}}</td>
                    <td>{{$bombero->rango}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection
