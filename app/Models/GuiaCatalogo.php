<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiaCatalogo extends Model
{
    use HasFactory;
    protected $table = "guia_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function guiaitems(){
        return $this->hasMany(GuiaItemCatalogo::class, 'id_guia');
    }
}
