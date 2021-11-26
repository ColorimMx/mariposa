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
            'activo' => '1'
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'PRIMA',
            'nombre' => 'Primaría',
            'activo' => '1'
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'SECUND',
            'nombre' => 'Secundaría',
            'activo' => '1'
        ]);
        NivelEstudioCatalogo::create([
            'id' => 'PREBA',
            'nombre' => 'Preparatoría o Bachillerato',
            'activo' => '1'
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'TECSU',
            'nombre' => 'Técnico Superior',
            'activo' => '1'
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'LICEN',
            'nombre' => 'Licenciatura',
            'activo' => '1'
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'MAEST',
            'nombre' => 'Maestría',
            'activo' => '1'
        ]);

        NivelEstudioCatalogo::create([
            'id' => 'DOCTO',
            'nombre' => 'Doctorado',
            'activo' => '1'
        ]);
    }
}
