<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "area_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function departamentos()
    {
        return $this->hasOne(DepartamentoCatalogo::class);
    }



}
