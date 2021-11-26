<?php

namespace Database\Seeders;

use App\Models\EstatusEstudioCatalogo;
use Illuminate\Database\Seeder;

class EstatusEstudioCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstatusEstudioCatalogo::create([
            'id' => 'INCOM',
            'nombre' => 'Incompleta',
            'activo' => '1'
        ]);

        EstatusEstudioCatalogo::create([
            'id' => 'TERMI',
            'nombre' => 'Terminada',
            'activo' => '1'
        ]);
    }
}
