@extends('adminlte::page')

@section('title', 'País SAT')

@section('content_header')
    <h1>
        Datos Catálogo País SAT.
    </h1>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-create-pais">
        Crear
    </button>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de categorías</h3>
                    </div>
                    <div class="card-body">
                        <table id="paises" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Satpaises as $Satpais)
                                <tr>
                                    <td>{{$Satpais->id}}</td>
                                    <td>{{$Satpais->nombre}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="modal-create-pais">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear País</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Próximamente, Formulario....</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-outline-success">Guardar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop
@section('js')
    <script>
        $(document).ready(function() {
            $('#paises').DataTable( {
                "order": [[ 1, "desc" ]]
            } );
        } );
    </script>
@stop

