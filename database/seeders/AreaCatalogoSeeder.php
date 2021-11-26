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
            'activo' => '1'
        ]);

        AreaCatalogo::create([
            'id' => 'COMER',
            'nombre' => 'Comercial',
            'activo' => '1'
        ]);

        AreaCatalogo::create([
            'id' => 'DIRGR',
            'nombre' => 'Dirección General',
            'activo' => '1'
        ]);

        AreaCatalogo::create([
            'id' => 'FINAN',
            'nombre' => 'Finanzas',
            'activo' => '1'
        ]);

        AreaCatalogo::create([
            'id' => 'OPERA',
            'nombre' => 'Operativa',
            'activo' => '1'
        ]);
    }
}
