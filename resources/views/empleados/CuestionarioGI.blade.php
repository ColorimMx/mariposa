@extends('adminlte::page')

@section('title', 'Guia de Referencia I')

@section('content_header')
    <h1>
        Norma 35 STPS - Guia de Referencia I
    </h1>
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 offset-md-1">
                    <!-- general form elements -->
                    <div class="card card-orange">
                        <div class="card-header">
                            <h3 class="card-title">Cuestionario Para Identificar A Los Trabajadores Que Fueron Sujetos A Acontecimientos Traumáticos Severos.</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="was-validated" action="{{route('cuestionarioGI.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <fieldset id = "empleados">
                                        <select id="empleado" name="empleado"  class="custom-select" required>
                                            <option value="">Seleccione un empleado</option>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach($empleados as $empleado)
                                                <option value="{{$empleado->id}}">{{ $i++ }}.- {{$empleado->a_paterno}} {{$empleado->a_materno}} {{$empleado->nombres}} - {{$empleado->id}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">I.- Acontecimiento traumático severo:</h3>
                                </div>
                                <div class="card-body">
                                <div class="form-group">
                                    <section id="acontecimiento" class="custom-control custom-checkbox mb-3 ">
                                        <label>¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes:</label>
                                    @foreach($custionarioI as $cuestionario)
                                        @if ($cuestionario->id_seccion == 1)
                                            <label>{{$cuestionario->numero_pregunta}}.- {{$cuestionario->pregunta}}</label>
                                            <select id="{{$cuestionario->id}}" name="{{$cuestionario->id}}"  class="custom-select" required>
                                                <option value="">Seleccione una respuesta</option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        @endif
                                        @endforeach
                                    </section>
                                </div>
                                </div>
                            </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <section id="recuerdo" class="custom-control custom-checkbox mb-3 ">
                                            @foreach($custionarioI as $cuestionario)
                                                @if ($cuestionario->id_seccion == 22)
                                                    <label>{{$cuestionario->numero_pregunta}}.- {{$cuestionario->pregunta}}</label>
                                                    <select id="{{$cuestionario->id}}" name="{{$cuestionario->id}}"  class="custom-select" required>
                                                        <option value="">Seleccione una respuesta</option>
                                                        <option value="0">No</option>
                                                        <option value="1">Si</option>
                                                    </select>
                                                @endif
                                            @endforeach
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <section id="esfuerzo" class="custom-control custom-checkbox mb-3 ">
                                            @foreach($custionarioI as $cuestionario)
                                                @if ($cuestionario->id_seccion == 16)
                                                    <label>{{$cuestionario->numero_pregunta}}.- {{$cuestionario->pregunta}}</label>
                                                    <select id="{{$cuestionario->id}}" name="{{$cuestionario->id}}"  class="custom-select" required>
                                                        <option value="">Seleccione una respuesta</option>
                                                        <option value="0">No</option>
                                                        <option value="1">Si</option>
                                                    </select>
                                                @endif
                                            @endforeach
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">IV.- Afectación (durante el último mes):</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <section id="afectacion" class="custom-control custom-checkbox mb-3 ">
                                            @foreach($custionarioI as $cuestionario)
                                                @if ($cuestionario->id_seccion == 4)
                                                    <label>{{$cuestionario->numero_pregunta}}.- {{$cuestionario->pregunta}}</label>
                                                    <select id="{{$cuestionario->id}}" name="{{$cuestionario->id}}"  class="custom-select" required>
                                                        <option value="">Seleccione una respuesta</option>
                                                        <option value="0">No</option>
                                                        <option value="1">Si</option>
                                                    </select>
                                                @endif
                                            @endforeach
                                        </section>
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
