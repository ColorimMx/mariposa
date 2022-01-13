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
            'menu_id' => '9',
            'descripcion' => 'Catalogos',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubMenuCatalogo::create([
            'menu_id' => '7',
            'descripcion' => 'Norma 35 STPS',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'orange',
            'classes' => '',
            'activo' => '1'
        ]);
        SubMenuCatalogo::create([
            'menu_id' => '7',
            'descripcion' => 'Catalogos',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubMenuCatalogo::create([
            'menu_id' => '4',
            'descripcion' => 'Catalogo',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'primary',
            'classes' => '',
            'activo' => '1'
        ]);

        SubMenuCatalogo::create([
            'menu_id' => '8',
            'descripcion' => 'CFDI',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubMenuCatalogo::create([
            'menu_id' => '8',
            'descripcion' => 'Ver Catalogos',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubMenuCatalogo::create([
            'menu_id' => '8',
            'descripcion' => 'Alta Catalogos',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubMenuCatalogo::create([
            'menu_id' => '2',
            'descripcion' => 'Transferencias / Traslados',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubMenuCatalogo::create([
            'menu_id' => '2',
            'descripcion' => 'Transportes',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);
    }

}
