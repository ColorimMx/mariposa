<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContabilidadPlanCuenta extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "contabilidad_plan_cuentas";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
