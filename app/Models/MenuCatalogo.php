<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCatalogo extends Model
{
    use HasFactory;

    protected $table = "menu_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function submenus(){
        return $this->hasMany('App\Models\SubMenuCatalogo', 'menu_id');
    }

    public static function index(){
        $Menus = MenuCatalogo::all();
        return view('layouts.menu',compact('Menus'));
    }
}
