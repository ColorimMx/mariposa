<?php

namespace Database\Seeders;

use App\Models\GuiaCategoriaCatalogo;
use Illuminate\Database\Seeder;

class GuiaCategoriaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Ambiente De Trabajo',
            'activo' => '1'
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Entorno Organizacional',
            'activo' => '1'
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Factores Propios De La Actividad',
            'activo' => '1'
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'General',
            'activo' => '1'
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Liderazgo Y Relaciones En El Trabajo',
            'activo' => '1'
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Organización Del Tiempo De Trabajo',
            'activo' => '1'
            ]);
    }
}
