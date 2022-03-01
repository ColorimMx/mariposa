<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemografiaCiudadCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "demografia_ciudad_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
