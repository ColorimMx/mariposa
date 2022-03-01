@extends('adminlte::page')
@section('title', 'Nivel De Estudios')

@section('content_header')
    <h1>
        Datos Catálogo Nivel De Estudios.
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Nivel De Estudios.</h3>
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
                                @foreach($NivelesEstudios as $NivelEstudio)
                                    <tbody>
                                    <tr>
                                        <td>{{$NivelEstudio->id}}</td>
                                        <td>{{$NivelEstudio->nombre}}</td>
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
