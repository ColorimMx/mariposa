<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiaDimensionCatalogo extends Model
{
    use HasFactory;
    protected $table = "guia_dimension_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
