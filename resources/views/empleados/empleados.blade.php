@extends('adminlte::page')
@section('title', 'Empleados')

@section('content_header')
    <h1>
        Datos Catálogo Empleados.
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Empleados.</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">APELLIDO PATERNO</th>
                                    <th scope="col">APELLIDO MATERNO</th>
                                    <th scope="col">NOMBRE(S)</th>
                                </tr>
                                </thead>
                                @foreach($Empleados as $Empleado)
                                    <tbody>
                                    <tr>
                                        <td>{{$Empleado->id}}</td>
                                        <td>{{$Empleado->nombres}}</td>
                                        <td>{{$Empleado->a_paterno}}</td>
                                        <td>{{$Empleado->a_materno}}</td>
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
