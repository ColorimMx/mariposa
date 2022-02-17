@extends('adminlte::page')
@section('title', 'Localidad SAT')
@section('content_header')
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 table-responsive" >
                <div class="card">
                    <div class="card-header">
                        <img class="img-fluid rounded mx-auto d-block" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/LogoCimsa.png'))) }}" style="width:30%;" alt="logo">
                        <h3 class="titulo-tabla">Catálogo Municipios SAT.</h3>
                    </div>
                    <div class="card-body">
                        <table id="data-table" class="table table-sm" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tfoot>
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
