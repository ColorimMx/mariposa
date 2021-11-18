<?php

namespace Database\Seeders;

use App\Models\SubMenuCatalogo;
use Illuminate\Database\Seeder;

class SubMenuCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubMenuCatalogo::create([
            'id_menu' => '8',
            'descripcion' => 'Catalogos',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubMenuCatalogo::create([
            'id_menu' => '7',
            'descripcion' => 'Norma 35 STPS',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);

        SubMenuCatalogo::create([
            'id_menu' => '7',
            'descripcion' => 'Catalogos',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);

        SubMenuCatalogo::create([
            'id_menu' => '4',
            'descripcion' => 'Catalogo',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'primary',
            'classes' => '',
        ]);
    }
}
