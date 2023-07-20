<?php

namespace Database\Seeders;


use App\Models\SubItemMenuCatalogo;
use Illuminate\Database\Seeder;

class SubItemMenuCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        SubItemMenuCatalogo::create([
            'descripcion' =>	'Menu Principal',
            'sub_menu_id' =>	'1',
            'route' =>	'menu.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Submenu',
            'sub_menu_id' =>	'1',
            'route' =>	'subMenu.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Items Submenu',
            'sub_menu_id' =>	'1',
            'route' =>	'itemSubmenu.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

    }
}
