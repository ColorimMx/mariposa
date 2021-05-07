<?php

namespace App\Http\Controllers;

use App\Models\MenuCatalogo;
use Illuminate\Http\Request;

class MenuCatalogoController extends Controller
{
    public function index(){
        $Menus = MenuCatalogo::all();
        return view('layouts.menu',compact('Menus'));
    }
}
