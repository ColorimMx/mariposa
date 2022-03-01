<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoMarcaCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "producto_marca_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
