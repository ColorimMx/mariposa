<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoSubgrupoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "producto_subgrupo_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
