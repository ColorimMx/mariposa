<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatFormaPagoCatalogo extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = "sat_forma_pago_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
