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
            'descripcion' => 'Administración',
            'icon' => 'fas fa-user-secret',
            'icon_color' => 'danger',
            'classes' => '',
            'activo' => '1'
        ]);
    }
}
