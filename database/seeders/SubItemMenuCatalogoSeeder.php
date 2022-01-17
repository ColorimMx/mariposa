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
            'sub_menu_id' => '1',
            'descripcion' => 'Impotar Catalogo Proveedores MBA3',
            'route' => 'empresas',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'light',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'sub_menu_id' => '2',
            'descripcion' => 'Impotar Catalogo Productos MBA3',
            'route' => 'empresas',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);



        SubItemMenuCatalogo::create([
            'sub_menu_id' => '9',
            'descripcion' => 'Seguro Autotransporte',
            'route' => 'seguroautotransporte.create',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'sub_menu_id' => '9',
            'descripcion' => 'Permiso Autotransporte',
            'route' => 'permisoautotransporte.create',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'sub_menu_id' => '9',
            'descripcion' => 'Autotransporte',
            'route' => 'autotransporte.create',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'sub_menu_id' => '8',
            'descripcion' => 'Impotar Traslados MBA3',
            'route' => 'trasladotransfer.create',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'sub_menu_id' => '8',
            'descripcion' => 'Generar XML Traslado',
            'route' => 'xmltraslado.create',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'sub_menu_id' => '10',
            'descripcion' => 'Importar Traslados MBA3',
            'route' => 'trasladocliente.create',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'pink',
            'classes' => '',
            'activo' => '1'
        ]);
        SubItemMenuCatalogo::create([
            'sub_menu_id' => '10',
            'descripcion' => 'Generar XML Traslado',
            'route' => 'xmltrasladocliente.create',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'pink',
            'classes' => '',
            'activo' => '1'
        ]);
    }
}
