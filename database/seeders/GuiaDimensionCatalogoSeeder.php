<?php

namespace Database\Seeders;

use App\Models\GuiaDimensionCatalogo;
use Illuminate\Database\Seeder;

class GuiaDimensionCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Características Del Liderazgo',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Carga Mental',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Cargas Contradictorias O Inconsistentes',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Cargas Cuantitativas',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Cargas De Alta Responsabilidad',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Cargas Psicológicas Emocionales',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Condiciones Deficientes E Insalubres',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Condiciones Peligrosas E Inseguras',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Deficiente Relación Con Los Colaboradores Que Supervisa',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Escasa Claridad De Funciones',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Escasa O Nula Retroalimentación Del Desempeño',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Escaso O Nulo Reconocimiento Y Compensación',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Falta De Control Y Autonomía Sobre El Trabajo',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'General',	]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Influencia De Las Responsabilidades Familiares',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Influencia Del Trabajo Fuera Del Centro Laboral',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Insuficiente Participacion Y Manejo Del Cambio',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Jornadas De Trabajo Extensas',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Limitada O Inexistente Capacitación',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Limitada O Nula Posibilidad De Desarrollo',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Limitado Sentido De Pertenencia',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Relaciones Sociales En El Trabajo',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Ritmos De Trabajo Acelerado',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Trabajos Peligrosos',
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' => 	'Violencia Laboral',
            ]);
    }
}
