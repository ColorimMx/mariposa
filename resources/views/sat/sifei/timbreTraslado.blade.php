@extends('adminlte::page')

@section('title', 'Carga de XML Sifei')

@section('content_header')
    <h1>
        Seleccion XML para Timbrado SIFEI
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
                            <h3 class="card-title">Seleccion de XML Para Procesar el Timbrado SIFEI</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="was-validated" action="{{route('timbradoSifei')}}" method="POST">
                        @csrf
                        <!-- /.card-body -->
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">Numero de Transferencia:</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <section id="registro" class="custom-control custom-checkbox mb-3 ">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-sign-in-alt"></i></span>
                                                    </div>
                                                    <select id="transferencia" name="transferencia"  class="custom-select" required>
                                                        <option value="">Seleccione la Transferencia de traslado</option>
                                                        @foreach($traslados as $traslado)
                                                            <option value="{{$traslado->trasnferencia_empresa_id}}"> {{$traslado->trasnferencia_empresa_id}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="submit" type="submit" class="btn btn-primary">Guardar</button>
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