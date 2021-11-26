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
            'nombre' =>	'Características Del Liderazgo',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Carga Mental',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Cargas Contradictorias O Inconsistentes',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Cargas Cuantitativas',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Cargas De Alta Responsabilidad',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Cargas Psicológicas Emocionales',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Condiciones Deficientes E Insalubres',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Condiciones Peligrosas E Inseguras',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Deficiente Relación Con Los Colaboradores Que Supervisa',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Escasa Claridad De Funciones',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Escasa O Nula Retroalimentación Del Desempeño',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Escaso O Nulo Reconocimiento Y Compensación',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Falta De Control Y Autonomía Sobre El Trabajo',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'General',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Influencia De Las Responsabilidades Familiares',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Influencia Del Trabajo Fuera Del Centro Laboral',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Insuficiente Participacion Y Manejo Del Cambio',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Jornadas De Trabajo Extensas',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Limitada O Inexistente Capacitación',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Limitada O Nula Posibilidad De Desarrollo',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Limitado Sentido De Pertenencia',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Relaciones Sociales En El Trabajo',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Ritmos De Trabajo Acelerado',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Trabajos Peligrosos',
            'activo' => '1'
            ]);
        GuiaDimensionCatalogo::create([
            'nombre' =>	'Violencia Laboral',
            'activo' => '1'
            ]);
    }
}
