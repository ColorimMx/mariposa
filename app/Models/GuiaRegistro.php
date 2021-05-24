<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiaRegistro extends Model
{
    use HasFactory;
    protected $table = "guia_registros";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
