<?php

namespace Database\Seeders;

use App\Models\ContratoTipoCatalogo;
use Illuminate\Database\Seeder;

class ContratoTipoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContratoTipoCatalogo::create([
        'id' => 'HONOR',
        'nombre' => 'Honorarios',
    ]);
        ContratoTipoCatalogo::create([
            'id' => 'OBRPR',
            'nombre' => 'Obra o Proyecto',
        ]);

        ContratoTipoCatalogo::create([
            'id' => 'TEMPI',
            'nombre' => 'Por Tiempo Indeterminado',
        ]);

        ContratoTipoCatalogo::create([
            'id' => 'TEMPO',
            'nombre' => 'Por Tiempo Determinado',
        ]);
    }
}
