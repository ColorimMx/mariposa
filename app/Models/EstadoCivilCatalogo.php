<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivilCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "estado_civil_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
