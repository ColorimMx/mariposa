<?php

namespace Database\Seeders;

use App\Models\GuiaDominioCatalogo;
use Illuminate\Database\Seeder;

class GuiaDominioCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuiaDominioCatalogo::create([
            'nombre' => 	'Carga De Trabajo',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Condiciones En El Ambiente De Trabajo',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Falta De Control Sobre El Trabajo',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'General',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Insuficiente Sentido De Pertenencia E Inestabilidad',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Interferencia En La Relación Trabajofamilia',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Jornada De Trabajo',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Liderazgo',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Reconocimiento Del Desempeño',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Relaciones En El Trabajo',
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Violencia',
            ]);
    }
}
