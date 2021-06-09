<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$subject}}</title>
    <style type="text/css">
        .titulo {
            margin-bottom: 0.0pt;
            margin-left: 0.0pt;
            text-align: center;
            text-indent: 0.0pt;
            white-space: nowrap;
            font-family: Helvetica;
            font-weight: bold;
            font-size: 70%
        }

        .subtitulo{
            color:#000000;
            text-align: left;
            font-family:Helvetica;
            font-weight:bold;
            font-size: 80%
        }
        .table {
            border-collapse: collapse;
            margin: 2% auto;
            width: 90%;
            text-align: left;
            text-indent: 0.0pt;
            white-space: nowrap;
            font-size: 70%
        }

        .img{

            width: 300px; height: 100px;
            text-align: center;
        }

        #background{
            position: absolute;
            bottom: 380px;
            height: 200px;
        }
        #watermark{
            color:lightgrey;
            font-size: 120px;
            transform: rotate(300deg);
            -webkit-transform: rotate(300deg);
        }
        #content{
            position:absolute;
            z-index:1;
        }
    </style>
</head>
<body>
<div class="titulo">
    <img class="img" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/bannerColorim.png'))) }}" alt="logo">
    <br>
    {{$nom_empresa}}
    <br>
    {{$rfc}}
    <br><br><br>
    Guía de Referencia I
    <br>
    CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A
    <br>
    ACONTECIMIENTOS TRAUMÁTICOS SEVEROS
    <br><br><br>
    Nombre: {{$a_paterno}} {{$a_materno}} {{$nombres}}
    <br>
</div>
<br>
<p style="text-align: left; font-size: 70%">Marque una X a la respuesta que se le indica</p>
<div id="background">
    <p id="watermark">CONFIDENCIAL</p>
</div>
<div id="content">
    <table border="1" class="table">
        <thead class="titulo">
        <tr>
            <th rowspan="2">Sección / Pregunta</th>
            <th colspan="2">Respuesta</th>
        </tr>
        <tr>
            <th>SÍ</th>
            <th>No</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th colspan="3" class="subtitulo">
                I.- Acontecimiento traumático severo
            </th>
        </tr>
        <tr>
            <td colspan="3">
                ¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes:
            </td>
        </tr>
        <tr>
            <td>
                &rsaquo; Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión
                grave?
            </td>
            <td>
                &nbsp; @if( $pregunta1 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp; @if( $pregunta1 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                &rsaquo; Asaltos?
            </td>
            <td>
                &nbsp;@if( $pregunta2 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;@if( $pregunta2 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                &rsaquo; Actos violentos que derivaron en lesiones graves?
            </td>
            <td>
                &nbsp;@if( $pregunta3 == true)
                    X
                @endif
            </td>
            <td>

                &nbsp;@if( $pregunta3 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                &rsaquo; Secuestro?
            </td>
            <td>
                &nbsp;@if( $pregunta4 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;@if( $pregunta4 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                &rsaquo; Amenazas?, o
            </td>
            <td>
                &nbsp;@if( $pregunta5 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;@if( $pregunta5 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                &rsaquo; Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?
            </td>
            <td>
                &nbsp;@if( $pregunta6 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;@if( $pregunta6 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="3">
                &nbsp;
            </td>
        </tr>
        <tr>
            <th colspan="3" class="subtitulo">
                II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):
            </th>
        </tr>
        <tr>
            <td>
                ¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?
            </td>
            <td>
                &nbsp;@if( $pregunta7 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;@if( $pregunta7 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?
            </td>
            <td>
                &nbsp;@if( $pregunta8 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;@if( $pregunta8 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="3" class="subtitulo">
            <span>III.- Esfuerzo por evitar circunstancias parecidas o asociadas
                al acontecimiento (durante el último mes):</span>
            </td>
        </tr>
        <tr>
            <td>
                ¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan
                <br>recordar el acontecimiento?
            </td>
            <td>
                &nbsp;
                @if( $pregunta9 == true)
                    X
                @endif

            </td>
            <td>
                &nbsp;
                @if( $pregunta9 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que<br>
                motivan recuerdos del acontecimiento?
            </td>
            <td>
                &nbsp;
                @if( $pregunta10 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta10 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha tenido dificultad para recordar alguna parte importante del evento?
            </td>
            <td>
                &nbsp;
                @if( $pregunta11 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta11 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha disminuido su interés en sus actividades cotidianas?
            </td>
            <td>
                &nbsp;
                @if( $pregunta12 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta12 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Se ha sentido usted alejado o distante de los demás?
            </td>
            <td>
                &nbsp;
                @if( $pregunta13 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta13 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha notado que tiene dificultad para expresar sus sentimientos?
            </td>
            <td>
                &nbsp;
                @if( $pregunta14 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta14 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o<br>
                que tiene un futuro limitado?
            </td>
            <td>
                &nbsp;
                @if( $pregunta15 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta15 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="3"> &nbsp;
            </td>
        </tr>
        <tr>
            <td colspan="3" class="subtitulo">
                <span>IV Afectación (durante el último mes):</span>
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha tenido usted dificultades para dormir?
            </td>
            <td>
                &nbsp;
                @if( $pregunta16 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta16 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha estado particularmente irritable o le han dado arranques de coraje?
            </td>
            <td>
                &nbsp;
                @if( $pregunta17 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta17 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha tenido dificultad para concentrarse?
            </td>
            <td>
                &nbsp;
                @if( $pregunta18 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta18 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Ha estado nervioso o constantemente en alerta?

            </td>
            <td>
                &nbsp;
                @if( $pregunta19 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta19 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td>
                ¿Se ha sobresaltado fácilmente por cualquier cosa?
            </td>
            <td>
                &nbsp;
                @if( $pregunta20 == true)
                    X
                @endif
            </td>
            <td>
                &nbsp;
                @if( $pregunta20 == false)
                    X
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="3"> &nbsp;
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
