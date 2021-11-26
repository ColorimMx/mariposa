@extends('adminlte::page')

@section('title', 'Guia de Referencia II')

@section('content_header')
    <h1>
        Norma 35 STPS - Guia de Referencia II
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
                <div class="col-md-10 offset-md-1">
                    <div class="card card-orange">
                        <div class="card-header">
                            <h3 class="card-title">Cuestionario Para Identificar A Los Trabajadores Que Fueron Sujetos A
                                Acontecimientos Traumáticos Severos.</h3>
                        </div>
                        <form class="was-validated" action="{{route('cuestionarioGI.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <fieldset id="empleados">
                                        <select id="empleado" name="empleado" class="custom-select" required>
                                            <option value="">Seleccione un empleado</option>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach($empleados as $empleado)
                                                <option value="{{$empleado->id}}">{{ $i++ }}
                                                    .- {{$empleado->a_paterno}} {{$empleado->a_materno}} {{$empleado->nombres}}
                                                    - {{$empleado->id}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <fieldset id="s1">
                                        <p>Para responder las preguntas siguientes considere las condiciones de su
                                            centro de trabajo, así como la cantidad y ritmo de trabajo.</p>
                                        <br>
                                        <br>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"></th>
                                                    <th scope="col" class="bg-secondary">Siempre</th>
                                                    <th scope="col" class="bg-secondary">Casi Siempre</th>
                                                    <th scope="col" class="bg-secondary">Algunas Veces</th>
                                                    <th scope="col" class="bg-secondary">Casi Nunca</th>
                                                    <th scope="col" class="bg-secondary">Nunca</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($custionarioII as $custionario)
                                                    @if ($custionario->seccion_id == 10)
                                                        <tr>
                                                            <th scope="row">{{$custionario->numero_pregunta}}</th>
                                                            <td>{{$custionario->pregunta}}</td>
                                                            <td>
                                                                <input type="radio"
                                                                       id="CR{{$custionario->numero_pregunta}}"
                                                                       class="form-radio"
                                                                       name="CR{{$custionario->numero_pregunta}}"
                                                                       value="1" required>
                                                            </td>
                                                            <td>
                                                                <input type="radio"
                                                                       id="CR{{$custionario->numero_pregunta}}"
                                                                       class="form-radio"
                                                                       name="CR{{$custionario->numero_pregunta}}"
                                                                       value="2" required>
                                                            </td>
                                                            <td>
                                                                <input type="radio"
                                                                       id="CR{{$custionario->numero_pregunta}}"
                                                                       class="form-radio"
                                                                       name="CR{{$custionario->numero_pregunta}}"
                                                                       value="3" required>
                                                            </td>
                                                            <td>
                                                                <input type="radio"
                                                                       id="CR{{$custionario->numero_pregunta}}"
                                                                       class="form-radio"
                                                                       name="CR{{$custionario->numero_pregunta}}"
                                                                       value="4" required>
                                                            </td>
                                                            <td>
                                                                <input type="radio"
                                                                       id="CR{{$custionario->numero_pregunta}}"
                                                                       class="form-radio"
                                                                       name="CR{{$custionario->numero_pregunta}}"
                                                                       value="5" required>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('css')
@stop
@section('js')
@stop
