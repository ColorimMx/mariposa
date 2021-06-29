<?php

namespace Database\Seeders;

use App\Models\NivelEstudioCatalogo;
use Illuminate\Database\Seeder;

class NivelEstudioCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NivelEstudioCatalogo::create([
            'id' => 'SINFO',
            'nombre' => 'Sin Formación',
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'PRIMA',
            'nombre' => 'Primaría',
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'SECUND',
            'nombre' => 'Secundaría',
        ]);
        NivelEstudioCatalogo::create([
            'id' => 'PREBA',
            'nombre' => 'Preparatoría o Bachillerato',
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'TECSU',
            'nombre' => 'Técnico Superior',
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'LICEN',
            'nombre' => 'Licenciatura',
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'MAEST',
            'nombre' => 'Maestría',
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'DOCTO',
            'nombre' => 'Doctorado',
        ]);
    }
}
