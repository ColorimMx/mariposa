<?php

namespace Database\Seeders;

use App\Models\SatImpuestoCatalogo;
use Illuminate\Database\Seeder;

class SatImpuestoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatImpuestoCatalogo::create([
            'id' => '001',
            'nombre' => 'ISR',
            'activo' => '1',
        ]);
        SatImpuestoCatalogo::create([
            'id' => '002',
            'nombre' => 'IVA',
            'activo' => '1',
        ]);
        SatImpuestoCatalogo::create([
            'id' => '003',
            'nombre' => 'IEPS',
            'activo' => '1',
        ]);
    }
}
