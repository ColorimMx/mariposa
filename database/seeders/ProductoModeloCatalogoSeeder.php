<?php

namespace Database\Seeders;

use App\Models\Mba3ProductoModeloCatalogo;
use App\Models\ProductoModeloCatalogo;
use Illuminate\Database\Seeder;

class ProductoModeloCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbamodelos = new Mba3ProductoModeloCatalogo();
        $modelos = $mbamodelos->get_modelos();

        foreach ($modelos as $modelo){
            ProductoModeloCatalogo::create([
               'id' => $modelo->ID,
               'nombre' => $modelo->NOMBRE,
               'Activo' => '1'
            ]);
        }
    }
}
