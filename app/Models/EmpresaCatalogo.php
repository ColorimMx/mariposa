<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "empresa_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
