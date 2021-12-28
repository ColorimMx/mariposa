@extends('adminlte::page')

@section('title', 'Alta Autotransporte')

@section('content_header')
    <h1>
        Alta Autotransporte
    </h1>
@stop
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 offset-md-1">
                    <!-- general form elements -->
                    <div class="card card-orange">
                        <div class="card-header">
                            <h3 class="card-title">Registro de Autotransporte.</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="was-validated" action="{{route('autotransporte.store')}}" method="POST">
                        @csrf
                        <!-- /.card-body -->
                    <div class="card card-olive">
                        <div class="card-header">
                            <h3 class="card-title">Marca:</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <section id="registro" class="custom-control custom-checkbox mb-3 ">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                                            </div>
                                            <input id="marca" name="marca" type="text" class="form-control" placeholder="Marca" required>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">Modelo:</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <section id="registro" class="custom-control custom-checkbox mb-3 ">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                                                    </div>
                                                    <input id="modelo" name="modelo" type="text" class="form-control" placeholder="Modelo" required>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">Año:</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <section id="registro" class="custom-control custom-checkbox mb-3 ">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                                                    </div>
                                                    <input id="anio_modelo_vm" name="anio_modelo_vm" type="text" class="form-control" placeholder="Año" required>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">Placa:</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <section id="registro" class="custom-control custom-checkbox mb-3 ">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                                                    </div>
                                                    <input id="placa" name="placa" type="text" class="form-control" placeholder="Placa" required>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">Permiso:</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <fieldset id = "permisos">
                                            <select id="permiso_autotransporte_id" name="permiso_autotransporte_id"  class="custom-select" required>
                                                <option value="">Seleccione el folio del permiso</option>
                                                @foreach($permisos as $permiso)
                                                    <option value="{{$permiso->id}}">{{$permiso->id}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">Configuración Vehicular:</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <fieldset id = "congiguracions">
                                            <select id="config_vehicular_id" name="config_vehicular_id"  class="custom-select" required>
                                                <option value="">Seleccione la Configuración Vehicular</option>
                                                @foreach($congiguracions as $congiguracion)
                                                    <option value="{{$congiguracion->id}}">{{$congiguracion->nombre}} - {{$congiguracion->id}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">Póliza Aseguradora Vehicular:</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <fieldset id = "aseguradoras">
                                            <select id="asegura_resp_civil_id" name="asegura_resp_civil_id"  class="custom-select" required>
                                                <option value="">Seleccione la Póliza de la Aseguradora Vehicular</option>
                                                @foreach($aseguradoras as $aseguradora)
                                                    <option value="{{$aseguradora->id}}">{{$aseguradora->id}} - {{$aseguradora->asegura_resp_civil}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@stop
@section('css')

@stop

@section('js')

@stop
