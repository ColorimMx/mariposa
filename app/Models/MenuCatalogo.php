<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCatalogo extends Model
{
    use HasFactory;

    protected $table = "menu_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
    protected $fillable = [
        'id', 'descripcion', 'activo'
    ];

    public function submenus(){
        return $this->hasMany('App\Models\SubMenuCatalogo', 'menu_id');
    }

}
