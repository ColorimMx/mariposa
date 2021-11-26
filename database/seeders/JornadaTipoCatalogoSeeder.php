<?php

namespace Database\Seeders;

use App\Models\JornadaTipoCatalogo;
use Illuminate\Database\Seeder;

class JornadaTipoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JornadaTipoCatalogo::create([
            'id' => 'FIDIU',
            'nombre' => 'Fijo Diurno',
            'activo' => '1'
        ]);

        JornadaTipoCatalogo::create([
            'id' => 'FIMIX',
            'nombre' => 'Fijo Mixto',
            'activo' => '1'
        ]);

        JornadaTipoCatalogo::create([
            'id' => 'FINOC',
            'nombre' => 'Fijo Nocturno',
            'activo' => '1'
        ]);
    }
}
