<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteGiroCatalogo extends Model
{
    use HasFactory;

    public $incrementing= false;
    protected $table = 'cliente_giro_catalogos';
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    protected $fillable = [
        'id', 'nombre', 'activo'
    ];
}