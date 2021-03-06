@extends('layouts.app')

@section('content')
    <div class="container shadow-sm">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-4">Emergencias</h1>
            </div>
            <div class="col-md-2 justify-content-end">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Nombre quien reporta</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($incidencias as $incidencia)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$incidencia->descripcion}}</td>
                        <td>{{$incidencia->direccion}}</td>
                        <td>{{$incidencia->nombre}}</td>
                        <td>{{$incidencia->created_at}}</td>
                        <td><a href="#Programando" class="btn btn-primary">Atender Emergencia</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection
