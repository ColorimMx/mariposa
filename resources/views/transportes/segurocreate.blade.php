@extends('adminlte::page')

@section('title', 'Alta de Seguros Autotransporte')

@section('content_header')
    <h1>
        Alta de Seguros Autotransporte
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
                                <h3 class="card-title">Registro de Seguros de Autotransporte.</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="was-validated" action="{{route('seguroautotransporte.store')}}" method="POST">
                                @csrf
                                <!-- /.card-body -->
                                <div class="card card-olive">
                                    <div class="card-header">
                                        <h3 class="card-title">Aseguradora Responsabilidad Civil:</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <section id="registro" class="custom-control custom-checkbox mb-3 ">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-car-crash"></i></span>
                                                        </div>
                                                        <input id="aseguradora" name="aseguradora" type="text" class="form-control" name="respcivil" placeholder="Nombre Aseguradora" required>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card card-olive">
                                        <div class="card-header">
                                            <h3 class="card-title">Numero de Poliza:</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <section id="registro" class="custom-control custom-checkbox mb-3 ">
                                                    <div class="form-group">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                                                            </div>
                                                            <input id="poliza" name="poliza" type="text" class="form-control" placeholder="Poliza Folio" required>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-olive">
                                        <div class="card-header">
                                            <h3 class="card-title">Fecha de Vigencia:</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input id="vigencia" name ="vigencia" type="text" class="form-control" name="datetime" placeholder="dd/mm/yyyy"  im-insert="false" required>
                                            </div>
                                            <!-- /.input group -->
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
