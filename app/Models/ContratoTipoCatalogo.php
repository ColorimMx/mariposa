<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoTipoCatalogo extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = "contrato_tipo_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
