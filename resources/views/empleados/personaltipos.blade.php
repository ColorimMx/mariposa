@extends('adminlte::page')
@section('title', 'Tipos De Personal')

@section('content_header')
    <h1>
        Datos Catálogo Tipos De Personal.
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tipos De Personal.</h3>
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
                                @foreach($PersonalTipos as $PersonalTipo)
                                    <tbody>
                                    <tr>
                                        <td>{{$PersonalTipo->id}}</td>
                                        <td>{{$PersonalTipo->nombre}}</td>
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

