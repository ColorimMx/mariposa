@extends('adminlte::page')

@section('title', 'Municipio SAT')

@section('content_header')
    <h1>
        Datos Catálogo Municipio SAT.
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Municipio SAT.</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID_ESTADOS</th>
                                <th scope="col">NOMBRE</th>
                            </tr>
                            </thead>
                            @foreach($SatMunicipios as $SatMunicipio)
                                <tbody>
                                <tr>
                                    <td>{{$SatMunicipio->id}}</td>
                                    <td>{{$SatMunicipio->id_estado}}</td>
                                    <td>{{$SatMunicipio->nombre}}</td>
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
