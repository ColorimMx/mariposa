<?php

namespace Database\Seeders;

use App\Models\Mba3ProductoMarcaCatalogo;
use App\Models\ProductoMarcaCatalogo;
use Illuminate\Database\Seeder;

class ProductoMarcaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbamarcas = new Mba3ProductoMarcaCatalogo();
        $marcas = $mbamarcas->get_marcas();

        foreach ($marcas as $marca){
            ProductoMarcaCatalogo::create([
                'id' => $marca->ID,
                'nombre' => $marca->NOMBRE,
                'activo' => '1'
            ]);
        }
    }
}
