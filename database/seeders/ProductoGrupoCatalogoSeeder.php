<?php

namespace Database\Seeders;

use App\Models\ProductoGrupoCatalogo;
use Illuminate\Database\Seeder;
use App\Models\Mba3ProductoGrupoCatalogo;

class ProductoGrupoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbagrupos = new Mba3ProductoGrupoCatalogo();
        $grupos = $mbagrupos->get_grupos();

        foreach ($grupos as $grupo) {
            ProductoGrupoCatalogo::create([
                'id' => $grupo->ID,
                'nombre' => $grupo->NOMBRE,
                'activo' => '1'
            ]);
        }
    }
}
