<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nominas Tipos</title>
</head>
<body>
<div class="container">
    <div class="table-responsive-lg">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
            </tr>
            </thead>
            @foreach($NominasTipos as $NominaTipo)
                <tbody>
                <tr>
                    <td>{{$NominaTipo->id}}</td>
                    <td>{{$NominaTipo->nombre}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>
