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
           'id' => 'MXN',
           'nombre' => 'Peso Mexicano',
           'activo' => '1'
        ]);

        MonedaCatalogo::create([
            'id' => 'USD',
            'nombre' => 'Dolar americano',
            'activo' => '1'
        ]);
    }
}
