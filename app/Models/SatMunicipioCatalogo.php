<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatMunicipioCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_municipio_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
