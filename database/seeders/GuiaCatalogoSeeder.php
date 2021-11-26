<?php

namespace Database\Seeders;

use App\Models\GuiaCatalogo;
use Illuminate\Database\Seeder;

class GuiaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuiaCatalogo::create([
            'nombre' => 'Guia de Referencia I',
            'Descripcion' => 'Identificar A Los Trabajadores Que Fueron Sujetos A Acontecimientos Traumáticos Severos',
            'activo' => '1'
        ]);
        GuiaCatalogo::create([
            'nombre' => 'Guia de Referencia II',
            'Descripcion' => 'Identificación Y Análisis De Los Factores De Riesgo Psicosocial',
            'activo' => '1'
        ]);
        GuiaCatalogo::create([
            'nombre' => 'Guia de Referencia III',
            'Descripcion' => 'Identificación Y Análisis De Los Factores De Riesgo Psicosocial',
            'activo' => '1'
        ]);
        GuiaCatalogo::create([
            'nombre' => 'Guia de Referencia IV',
            'Descripcion' => 'Política De Prevención De Riesgos Psicosociales',
            'activo' => '1'
        ]);
        GuiaCatalogo::create([
            'nombre' => 'Guia de Referencia V',
            'Descripcion' => 'Datos Del Trabajador',
            'activo' => '1'
        ]);

    }
}
