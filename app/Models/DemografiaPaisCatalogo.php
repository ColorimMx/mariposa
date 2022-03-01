<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemografiaPaisCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "demografia_pais_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
