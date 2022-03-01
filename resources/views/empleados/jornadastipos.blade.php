
@extends('adminlte::page')
@section('title', 'Tipos De Jornadas')

@section('content_header')
    <h1>
        Datos Catálogo Tipos De Jornadas.
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tipos De Jornadas.</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOMBRE</th>
                                </tr>
                                </thead>
                                @foreach($JornadasTipos as $JornadaTipo)
                                    <tbody>
                                    <tr>
                                        <td>{{$JornadaTipo->id}}</td>
                                        <td>{{$JornadaTipo->nombre}}</td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
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
