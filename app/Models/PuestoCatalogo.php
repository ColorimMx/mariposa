<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestoCatalogo extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $table = "puesto_catalogos";
}
