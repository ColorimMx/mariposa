<?php

namespace Database\Seeders;

use App\Models\SatMetodoPagoCatalogo;
use Illuminate\Database\Seeder;

class SatMetodoPagoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatMetodoPagoCatalogo::create([
            'id' => 'PUE',
            'nombre' => 'Pago en una sola exhibición',
            'activo' => '1',
        ]);
        SatMetodoPagoCatalogo::create([
            'id' => 'PPD',
            'nombre' => 'Pago en parcialidades o diferido',
            'activo' => '1',
        ]);
    }
}
