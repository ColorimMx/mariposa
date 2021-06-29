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
            'descripcion' => 'Proveedores',
            'icon' => 'fas fa-dolly',
            'icon_color' => 'light',
            'classes' => '',
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Inventario',
            'icon' => 'fas fa-box-open',
            'icon_color' => 'indigo',
            'classes' => '',
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Bancos',
            'icon' => 'fas fa-donate',
            'icon_color' => 'lightblue',
            'classes' => '',
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Clientes',
            'icon' => 'fas fa-people-carry',
            'icon_color' => 'primary',
            'classes' => '',
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Activo Fijo',
            'icon' => 'fas fa-hand-holding-usd',
            'icon_color' => 'success',
            'classes' => '',
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Contabilidad',
            'icon' => 'fas fa-wallet',
            'icon_color' => 'warning',
            'classes' => '',
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Empleados',
            'icon' => 'fas fa-id-badge',
            'icon_color' => 'orange',
            'classes' => '',
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Administración',
            'icon' => 'fas fa-user-secret',
            'icon_color' => 'danger',
            'classes' => '',
        ]);
    }
}
