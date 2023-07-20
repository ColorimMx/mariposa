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
            'descripcion' => 	'Menus',
            'menu_id' =>	'1',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'danger',
            'classes' => '',
            'activo' => '1']);

    }

}
