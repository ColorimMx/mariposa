<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatPaisCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = "sat_pais_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
        'id', 'nombre', 'activo'
    ];

    public function estados(){
        return $this->hasMany(SatEstadoCatalogo::class);
    }
}
