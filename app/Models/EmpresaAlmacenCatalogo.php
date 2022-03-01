<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaAlmacenCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "empresa_almacen_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
