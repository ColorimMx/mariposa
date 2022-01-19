<?php

namespace Database\Seeders;

use App\Models\MenuCatalogo;
use Illuminate\Database\Seeder;

class MenuCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuCatalogo::create([
            'id' => '1',
            'descripcion' => 'Proveedores',
            'icon' => 'fas fa-dolly',
            'icon_color' => 'light',
            'classes' => '',
            'activo' => '1'
        ]);
        MenuCatalogo::create([
            'id' => '2',
            'descripcion' => 'Inventario',
            'icon' => 'fas fa-box-open',
            'icon_color' => 'indigo',
            'classes' => '',
            'activo' => '1'
        ]);
        MenuCatalogo::create([
            'id' => '3',
            'descripcion' => 'Bancos',
            'icon' => 'fas fa-donate',
            'icon_color' => 'lightblue',
            'classes' => '',
            'activo' => '1'
        ]);
        MenuCatalogo::create([
            'id' => '4',
            'descripcion' => 'Clientes',
            'icon' => 'fas fa-people-carry',
            'icon_color' => 'primary',
            'classes' => '',
            'activo' => '1'
        ]);
        MenuCatalogo::create([
            'id' => '5',
            'descripcion' => 'Activo Fijo',
            'icon' => 'fas fa-hand-holding-usd',
            'icon_color' => 'success',
            'classes' => '',
            'activo' => '1'
        ]);
        MenuCatalogo::create([
            'id' => '6',
            'descripcion' => 'Contabilidad',
            'icon' => 'fas fa-wallet',
            'icon_color' => 'warning',
            'classes' => '',
            'activo' => '1'
        ]);
        MenuCatalogo::create([
            'id' => '7',
            'descripcion' => 'Empleados',
            'icon' => 'fas fa-id-badge',
            'icon_color' => 'orange',
            'classes' => '',
            'activo' => '1'
        ]);
        MenuCatalogo::create([
            'id' => '8',
            'descripcion' => 'SAT',
            'icon' => 'fas fa-stamp',
            'icon_color' => 'pink',
            'classes' => '',
            'activo' => '1'
        ]);
        MenuCatalogo::create([
            'id' => '9',
            'descripcion' => 'Administración',
            'icon' => 'fas fa-user-secret',
            'icon_color' => 'danger',
            'classes' => '',
            'activo' => '1'
        ]);
    }
}
