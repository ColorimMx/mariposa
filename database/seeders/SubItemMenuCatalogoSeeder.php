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
            'id_sub_menu' => '1',
            'descripcion' => 'Empresas',
            'route' => 'empresas',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Areas',
            'route' => 'areas',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Departamentos',
            'route' => 'departamentos',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Puestos',
            'route' => 'puestos',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);
        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Puestos Tipos',
            'route' => 'puestostipos',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Estados Civiles',
            'route' => 'estadosciviles',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Niveles de Estudios',
            'route' => 'nivelesestudios',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Estatus de Estudios',
            'route' => 'estatusestudios',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Contratos Tipos',
            'route' => 'contratostipos',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Personal Tipos',
            'route' => 'personaltipos',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Jornadas Tipos',
            'route' => 'jornadastipos',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Nominas Tipos',
            'route' => 'nominastipos',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Localidades Empresas',
            'route' => 'localidades',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Localidades SAT',
            'route' => 'satlocalidades',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Municipios SAT',
            'route' => 'satmunicipios',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Estados SAT',
            'route' => 'satestados',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '1',
            'descripcion' => 'Paises SAT',
            'route' => 'satpaises',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'danger',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '2',
            'descripcion' => 'Domentación',
            'route' => 'home',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '2',
            'descripcion' => 'Guia de Referencia I',
            'route' => 'home',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '2',
            'descripcion' => 'Guia de Referencia II',
            'route' => 'home',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '2',
            'descripcion' => 'Guia de Referencia III',
            'route' => 'home',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '2',
            'descripcion' => 'Guia de Referencia IV',
            'route' => 'home',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '2',
            'descripcion' => 'Guia de Referencia V',
            'route' => 'home',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);

        SubItemMenuCatalogo::create([
            'id_sub_menu' => '3',
            'descripcion' => 'Empleados',
            'route' => 'empleados',
            'icon' => 'fas fa-angle-double-right',
            'icon_color' => 'orange',
            'classes' => '',
        ]);
    }
}
