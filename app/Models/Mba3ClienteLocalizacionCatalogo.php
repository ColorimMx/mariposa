<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mba3ClienteLocalizacionCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "cliente_localizacion_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
