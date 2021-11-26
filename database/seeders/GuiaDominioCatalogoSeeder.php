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
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Condiciones En El Ambiente De Trabajo',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Falta De Control Sobre El Trabajo',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'General',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Insuficiente Sentido De Pertenencia E Inestabilidad',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Interferencia En La Relación Trabajofamilia',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Jornada De Trabajo',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Liderazgo',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Reconocimiento Del Desempeño',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Relaciones En El Trabajo',
            'activo' => '1'
            ]);
        GuiaDominioCatalogo::create([
            'nombre' => 	'Violencia',
            'activo' => '1'
            ]);
    }
}
