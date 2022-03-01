@extends('adminlte::page')

@section('title', 'XML CFDI Traslado')

@section('content_header')
    <h1>
        XML CFDI Traslado
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
                            <h3 class="card-title">Genracion de XML CFDI Tipo Traslado.</h3>
                        </div>
                        <!-- /.card-header -->
                        @foreach($traslados as $traslado)
                            <p> {{$traslado->trasnferencia_empresa_id}} </p>
                    @endforeach
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
