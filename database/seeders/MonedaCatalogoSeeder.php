<?php

namespace Database\Seeders;

use App\Models\MonedaCatalogo;
use Illuminate\Database\Seeder;

class MonedaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MonedaCatalogo::create([
           'id' => 'MN',
            'sat_moneda_id' => 'MXN',
           'nombre' => 'Peso Mexicano',
           'activo' => '1'
        ]);

        MonedaCatalogo::create([
            'id' => 'US',
            'sat_moneda_id' => 'USD',
            'nombre' => 'Dolar americano',
            'activo' => '1'
        ]);
    }
}
