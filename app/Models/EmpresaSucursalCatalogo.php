<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaSucursalCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "empresa_sucursal_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function empresa(){
        return $this->hasOne(EmpresaCatalogo::class,'id','empresa_id');
    }
}
