<?php

namespace Database\Seeders;

use App\Models\EstadoCivilCatalogo;
use Illuminate\Database\Seeder;

class EstadoCivilCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoCivilCatalogo::create([
            'id' => 'CASAD',
            'nombre' => 'Casado',
            'activo' => '1'
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'DIVOR',
            'nombre' => 'Divorciado',
            'activo' => '1'
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'OTRO',
            'nombre' => 'Otro',
            'activo' => '1'
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'SOLTE',
            'nombre' => 'Soltero',
            'activo' => '1'
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'UNILI',
            'nombre' => 'Unión Libre',
            'activo' => '1'
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'VIUDO',
            'nombre' => 'Viudo',
            'activo' => '1'
        ]);
    }
}
