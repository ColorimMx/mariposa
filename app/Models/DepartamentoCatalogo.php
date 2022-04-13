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

    public function area()
    {
        return $this->belongsTo(AreaCatalogo::class,'id','area_id');
    }
}
