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
            'menu_id' => '1',
            'descripcion' => 'Catalago Proveedores',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'light',
            'classes' => '',
            'activo' => '1'
        ]);

        SubMenuCatalogo::create([
            'menu_id' => '2',
            'descripcion' => 'Catalogo Productos',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'indigo',
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

        SubMenuCatalogo::create([
            'menu_id' => '4',
            'descripcion' => 'Traslados',
            'icon' => 'fas fa-angle-right',
            'icon_color' => 'primary',
            'classes' => '',
            'activo' => '1'
        ]);
    }

}
