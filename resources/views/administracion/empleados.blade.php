<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empelados</title>
</head>
<body>
<div class="container">
    <div class="table-responsive-lg">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">APELLIDO PATERNO</th>
                <th scope="col">APELLIDO MATERNO</th>
                <th scope="col">NOMBRE(S)</th>
            </tr>
            </thead>
            @foreach($Empleados as $Empleado)
                <tbody>
                <tr>
                    <td>{{$Empleado->id}}</td>
                    <td>{{$Empleado->nombres}}</td>
                    <td>{{$Empleado->a_paterno}}</td>
                    <td>{{$Empleado->a_materno}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>
