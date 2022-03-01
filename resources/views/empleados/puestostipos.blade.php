        @extends('adminlte::page')

        @section('title', 'Tipos De Puestos')

        @section('content_header')
            <h1>
                Datos Catálogo Tipos De Puestos.
            </h1>
        @stop
        @section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tipos De Puestos.</h3>
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
                                        @foreach($puestostipos as $puestotipo)
                                            <tbody>
                                            <tr>
                                                <td>{{$puestotipo->id}}</td>
                                                <td>{{$puestotipo->nombre}}</td>
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

