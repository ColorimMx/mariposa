<?php

namespace Database\Seeders;

use App\Models\AreaCatalogo;
use Illuminate\Database\Seeder;

class AreaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AreaCatalogo::create([
            'id' => 'ADMIN',
            'nombre' => 'Administración',
        ]);

        AreaCatalogo::create([
            'id' => 'COMER',
            'nombre' => 'Comercial',
        ]);

        AreaCatalogo::create([
            'id' => 'DIRGR',
            'nombre' => 'Dirección General',
        ]);

        AreaCatalogo::create([
            'id' => 'FINAN',
            'nombre' => 'Finanzas',
        ]);

        AreaCatalogo::create([
            'id' => 'OPERA',
            'nombre' => 'Operativa',
        ]);
    }
}
