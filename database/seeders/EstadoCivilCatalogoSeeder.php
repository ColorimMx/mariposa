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
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'DIVOR',
            'nombre' => 'Divorciado',
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'OTRO',
            'nombre' => 'Otro',
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'SOLTE',
            'nombre' => 'Soltero',
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'UNILI',
            'nombre' => 'Unión Libre',
        ]);

        EstadoCivilCatalogo::create([
            'id' => 'VIUDO',
            'nombre' => 'Viudo',
        ]);
    }
}
