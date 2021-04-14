<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JornadaTipoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "jornada_tipo_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
