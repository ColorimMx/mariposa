<?php

namespace Database\Seeders;

Use App\Models\Mba3ClienteLocalizacionCatalogo;
use Illuminate\Database\Seeder;

class ClienteLocalizacionCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mba3ClienteLocalizacionCatalogo::create([
            'id' => 'L',
            'nombre' => 'Nacional',
            'activo' => '1'
        ]);

        Mba3ClienteLocalizacionCatalogo::create([
            'id' => 'E',
            'nombre' => 'Extranjero',
            'activo' => '1'
        ]);
    }
}
