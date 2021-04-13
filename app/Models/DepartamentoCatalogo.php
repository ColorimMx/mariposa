<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "departamento_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function areas()
    {
        return $this->hasOne(AreaCatalogo::class,'id','id_area');
    }
}
