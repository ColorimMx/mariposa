<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuCatalogo extends Model
{
    use HasFactory;

    protected $table = "sub_menu_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function subitems(){
        return $this->hasMany('App\Models\SubItemMenuCatalogo', 'id_sub_menu');
    }

    public function menu(){
        return $this->belongsTo('App\Models\MenuCatalogo','id','id_menu');
    }
}
