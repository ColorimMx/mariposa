@extends('layouts.email')
@section('title', 'Mail Cuestionario I')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card card-orange">
                    <div class="card-header">
                        <h3 class="card-title">Cuestionario Para Identificar A Los Trabajadores Que Fueron Sujetos A Acontecimientos Traumáticos Severos.</h3>
                    </div>
                    <form class="was-validated" >
                        <div class="card-body">
                            <div class="form-group">
                                <fieldset id = "empleados">
                                    <p> El empleado: {{$msg['empleado']}} {{$msg['a_paterno']}} {{$msg['a_materno']}} {{$msg['nombres']}} - ha realizado la aplicación de la Guía de Referencia I</p>
                                </fieldset>
                            </div>
                        </div>
                        <div class="card card-olive">
                            <div class="card-header">
                                <h3 class="card-title">I.- Acontecimiento traumático severo:</h3>
                            </div>
                            <div class="card-body">
                                <p>	1	¿Accidente Que Tenga Como Consecuencia La Muerte La Pérdida De Un Miembro O Una Lesión Grave?
                                    <label>
                                        @if ($msg['pregunta1']==0)
                                            NO
                                            @else
                                            SI
                                            @endif
                                    </label></P>
                                <p>	2	¿Asaltos?
                                    <label>
                                        @if ($msg['pregunta2']==0)
                                            NO
                                            @else
                                            SI
                                            @endif
                                    </label></P>
                                <p>	3	¿Actos Violentos Que Derivaron En Lesiones Graves?
                                    <label>
                                        @if ($msg['pregunta3']==0)
                                            NO
                                            @else
                                            SI
                                            @endif
                                    </label></P>
                                <p>	4	¿Secuestro?
                                    <label>
                                        @if ($msg['pregunta4']==0)
                                            NO
                                            @else
                                            SI
                                            @endif
                                    </label></P>
                                <p>	5	¿Amenazas? O
                                    <label>
                                        @if ($msg['pregunta5']==0)
                                            NO
                                            @else
                                            SI
                                            @endif
                                    </label></P>
                                <p>	6	Cualquier Otro Que Ponga En Riesgo Su Vida O Salud Y/O La De Otras Personas?
                                    <label>
                                        @if ($msg['pregunta6']==0)
                                            NO
                                            @else
                                            SI
                                            @endif
                                    </label></P>
                            </div>
                        </div>
                        <div class="card card-olive">
                            <div class="card-header">
                                <h3 class="card-title">II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <p>	7	¿Ha Tenido Recuerdos Recurrentes Sobre El Acontecimiento Que Le Provocan Malestares?
                                        <label>
                                            @if ($msg['pregunta7']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	8	¿Ha Tenido Sueños De Carácter Recurrente Sobre El Acontecimiento Que Le Producen Malestar?
                                        <label>
                                            @if ($msg['pregunta8']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                </div>
                            </div>
                        </div>
                        <div class="card card-olive">
                            <div class="card-header">
                                <h3 class="card-title">III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <p>	9	¿Se Ha Esforzado Por Evitar Todo Tipo De Sentimientos Conversaciones O Situaciones Que Le Puedan Recordar El Acontecimiento? <label>
                                            @if ($msg['pregunta9']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	10	¿Se Ha Esforzado Por Evitar Todo Tipo De Actividades Lugares O Personas Que Motivan Recuerdos Del Acontecimiento? <label>
                                            @if ($msg['pregunta10']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	11	¿Ha Tenido Dificultad Para Recordar Alguna Parte Importante Del Evento? <label>
                                            @if ($msg['pregunta11']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	12	¿Ha Disminuido Su Interés En Sus Actividades Cotidianas? <label>
                                            @if ($msg['pregunta12']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	13	¿Se Ha Sentido Usted Alejado O Distante De Los Demás? <label>
                                            @if ($msg['pregunta13']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	14	¿Ha Notado Que Tiene Dificultad Para Expresar Sus Sentimientos? <label>
                                            @if ($msg['pregunta14']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	15	¿Ha Tenido La Impresión De Que Su Vida Se Va A Acortar Que Va A Morir Antes Que Otras Personas O Que Tiene Un Futuro Limitado? <label>
                                            @if ($msg['pregunta15']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>

                                </div>
                            </div>
                        </div>
                        <div class="card card-olive">
                            <div class="card-header">
                                <h3 class="card-title">IV.- Afectación (durante el último mes):</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <p>	16	¿Ha Tenido Usted Dificultades Para Dormir?  <label>
                                            @if ($msg['pregunta16']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	17	¿Ha Estado Particularmente Irritable O Le Han Dado Arranques De Coraje?  <label>
                                            @if ($msg['pregunta17']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	18	¿Ha Tenido Dificultad Para Concentrarse?  <label>
                                            @if ($msg['pregunta18']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	19	¿Ha Estado Nervioso O Constantemente En Alerta?  <label>
                                            @if ($msg['pregunta19']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                    <p>	20	¿Se Ha Sobresaltado Fácilmente Por Cualquier Cosa?  <label>
                                            @if ($msg['pregunta20']== 0)
                                                NO
                                            @else
                                                SI
                                            @endif
                                        </label></P>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
