<?php

namespace Database\Seeders;

use App\Models\Mba3ProductoSubgrupoCatalogo;
Use App\Models\ProductoSubgrupoCatalogo;
use Illuminate\Database\Seeder;

class ProductoSubgrupoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbasubgrupos = new Mba3ProductoSubgrupoCatalogo();
        $subgrupos = $mbasubgrupos->get_subgrupos();

        foreach ($subgrupos as $subgrupo) {
            ProductoSubgrupoCatalogo::create([
                'id' => $subgrupo->id,
                'nombre' => $subgrupo->nombre,
                'activo' => '1'
            ]);
        }
    }
}
