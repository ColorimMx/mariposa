<?php

namespace Database\Seeders;

use App\Models\LocalidadCatalogo;
use Illuminate\Database\Seeder;

class LocalidadCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LocalidadCatalogo::create([
            'id' => 'CIVAC',
            'nombre' => 'Civac',
        ]);

        LocalidadCatalogo::create([
            'id' => 'PDV',
            'nombre' => 'Puntos De Venta',
        ]);

        LocalidadCatalogo::create([
            'id' => 'PINOS',
            'nombre' => 'San Pedro de los Pinos',
        ]);
    }
}
