<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <style type="text/css">

        #front{
            position:absolute;
            top: 5px;
            z-index:0;
            width:502px;
            height:325px;
        }
        #back{
            position:absolute;
            top: 5px;
            left: 50px;
            z-index:0;
            width:502px;
            height:296px;
        }
        #razon1{ position:absolute;
            z-index:1;
            top:10px;
            left:205px;
            font-family: 'Roboto Slab', serif;
            color: #FFFFFF;
            font-size: 18px;
        }
        #razon3{ position:absolute;
            z-index:1;
            top:225px;
            left:350px;
            font-family: 'Roboto Slab', serif;
            color: #FFFFFF;
            font-size: 7px;
        }
        #nombres{ position:absolute;
            z-index: 1;
            top:200px;
            left:90px;
            font-size: 15px;
            color: #FFFFFF;
        }
        #apellidos{ position:absolute;
            z-index: 1;
            top:220px;
            left:80px;
            font-size: 16px;
            font-family: 'Roboto Slab', serif;
            color: #FFFFFF;
        }
        #foto{ position:absolute;
            z-index: 1;
            top:50px;
            left:75px;
        }
        #razon2{
            position:absolute;
            top: 5px;
            left: 155px;
            z-index:0;
            font-family: 'Roboto';
            font-size: 19px;
            color: #008a57;
        }
        #razon4{ position:absolute;
            z-index:0;
            top:222px;
            left:355px;
            font-family: 'Roboto Slab', serif;
            color: #008a57;
            font-size: 7px;
        }
        #calle{
            position:absolute;
            top: 50px;
            left: 80px;
            z-index:0;
            font-family: 'Roboto';
            font-size: 12px;
            color: #e30043;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="razon1"><span>Colorantes Importados SA de CV</span></div>
            <div id="front"><img  src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/cFront.png'))) }}" alt="Frontal"></div>
            <div id="nombres"><span>Luis Manuel</span></div>
            <div id="apellidos"><span>Rivera Garcia</span></div>
            <div id="foto"> <img src="img\Foto.png" /> </div>
            <div id="razon3"><span>Colorantes Importados SA de CV</span></div>
        </div>
        <div class="col">
            <div id="back"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/cBack.png'))) }}" alt="logo"></div>
            <div id="razon2"><span>Colorantes Importados SA de CV</span></div>
            <div id="calle"><span>Calle 10 #20, Col. San Pedro de los Pinos,
                <br>C.P. 01180, México, CDMX.
                <br>Tel.  55 9149 5500                  Lada sin costo: 80000 20000
                <br><br>Número colaborador:
                <br><br>NSS:
                <br><br>Área:
                <br><br>Vigencia: diciembre 2021
                </span></div>
            <div id="razon4"><span>Colorantes Importados SA de CV</span></div>
        </div>
    </div>
</div>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>
