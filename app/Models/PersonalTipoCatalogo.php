<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalTipoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "personal_tipo_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
