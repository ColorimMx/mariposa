<?php

namespace Database\Seeders;

use App\Models\Mba3ProductoSubmodeloCatalogo;
use App\Models\ProductoSubmodeloCatalogo;
use Illuminate\Database\Seeder;

class ProductoSubmodeloCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbasubmodelos = new Mba3ProductoSubmodeloCatalogo();
        $submodelos = $mbasubmodelos->get_submodelos();

        foreach ($submodelos as $submodelo){
            ProductoSubmodeloCatalogo::create([
            'id' => $submodelo->ID,
            'nombre' => $submodelo->NOMBRE,
            'activo' => '1'
            ]);
        }
    }
}
