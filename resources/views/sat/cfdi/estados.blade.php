@extends('adminlte::page')

@section('title', 'Estado SAT')

@section('content_header')
    <h1>
        Datos Catálogo Estado SAT.
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Estado SAT.</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID PAIS</th>
                                <th scope="col">NOMBRE</th>
                            </tr>
                            </thead>
                            @foreach($SatEstados as $SatEstado)
                                <tbody>
                                <tr>
                                    <td>{{$SatEstado->id}}</td>
                                    <td>{{$SatEstado->pais_id}}</td>
                                    <td>{{$SatEstado->nombre}}</td>
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
