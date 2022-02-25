<?php

namespace App\Http\Controllers\Sat;

use App\Http\Controllers\Controller;
use Redirect;

class SifeiController extends Controller
{
    public function sellado()
    {
        //echo 'Sellado Sifei';

        return Redirect::to('http://mariposa.mx/ejemplo_cadena_original_sello.php');
    }

    public function timbrado()
    {
        //echo 'Timbrado Sifei';
        return Redirect::to('http://mariposa.mx/ejemploTimbrado.php');
    }
}
