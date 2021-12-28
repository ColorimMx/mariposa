<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeguroAutotransporteCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "seguro_autotransporte_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
