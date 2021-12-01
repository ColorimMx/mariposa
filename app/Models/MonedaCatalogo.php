<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonedaCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "moneda_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
