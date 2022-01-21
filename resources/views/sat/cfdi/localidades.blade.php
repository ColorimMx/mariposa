@extends('adminlte::page')

@section('title', 'Localidad SAT')

@section('content_header')
    <h1>
        Datos Catálogo Localidad SAT.
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Localidad SAT.</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID_ESTADO</th>
                                <th scope="col">NOMBRE</th>
                            </tr>
                            </thead>
                            @foreach($SatLocalidades as $SatLocalidad)
                                <tbody>
                                <tr>
                                    <td>{{$SatLocalidad->id}}</td>
                                    <td>{{$SatLocalidad->id_estado}}</td>
                                    <td>{{$SatLocalidad->nombre}}</td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')

@stop

@section('js')

@stop
