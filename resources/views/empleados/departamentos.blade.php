@extends('adminlte::page')

@section('title', 'Departamentos')

@section('content_header')
    <h1>
        Datos Catálogo Departamentos.
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Departamentos.</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">AREA</th>
                                    <th scope="col">NOMBRE</th>
                                </tr>
                                </thead>
                                @foreach($departamentos as $departamento)
                                    <tbody>
                                    <tr>
                                        <td>{{$departamento->id}}</td>
                                        <td>{{$departamento->areas->nombre}}</td>
                                        <td>{{$departamento->nombre}}</td>
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
