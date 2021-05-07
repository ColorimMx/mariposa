<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubItemMenuCatalogo extends Model
{
    use HasFactory;

    protected $table = "sub_item_menu_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function submenu(){
        return $this->belongsTo('App\Models\SubMenuCatalogo', 'id','id_sub_menu');
    }
}
