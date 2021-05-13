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
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Entorno Organizacional',
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Factores Propios De La Actividad',
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'General',	]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Liderazgo Y Relaciones En El Trabajo',
            ]);
        GuiaCategoriaCatalogo::create([
            'nombre' =>	'Organización Del Tiempo De Trabajo',
            ]);
    }
}
