<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiaItemCatalogo extends Model
{
    use HasFactory;
    protected $table = "guia_item_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
