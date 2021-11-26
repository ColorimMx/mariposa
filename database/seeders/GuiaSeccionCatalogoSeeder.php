<?php

namespace Database\Seeders;

use App\Models\GuiaSeccionCatalogo;
use Illuminate\Database\Seeder;

class GuiaSeccionCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuiaSeccionCatalogo::create([
            'nombre' => 'Acontecimiento Traumático Severo',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Actividades Que Realiza En Su Trabajo Y Las Responsabilidades Que Tiene',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Actos De Violencia Laboral (Malos Tratos, Acoso, Hostigamiento, Acoso Psicológico)',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Afectación (Durante El Último Mes)',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Atención A Clientes Y Usuarios',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Cantidad Y Ritmo De Trabajo Que Tiene',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Capacitación E Información Que Se Le Proporciona Sobre Su Trabajo',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Compañeros',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Condiciones Ambientales De Su Centro De Trabajo',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Condiciones De Su Centro De Trabajo, Asi Como La Cantidad Y Ritmo De Trabajo',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Cualquier Tipo De Cambio Que Ocurra En Su Trabajo (Considere Los Últimos Cambios Realizados)',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Datos Generales',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Datos Laborales',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Decisiones Que Puede Tomar En Su Trabajo',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Esfuerzo Mental Que Le Exige Su Trabajo',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Esfuerzo Por Evitar Circunstancias Parecidas O Asociadas Al Acontecimiento (Durante El Último Mes)',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Informacion General',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Información Que Recibe Sobre Su Rendimiento En El Trabajo, El Reconocimiento, El Sentido De Pertenencia Y La Estabilidad Que Le Ofrece Su Trabajo',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Jefe De Otros Trabajadores',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Jefes Con Quien Tiene Contacto',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Jornada De Trabajo',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Recuerdos Persistentes Sobre El Acontecimiento (Durante El Último Mes)',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Relaciones Con Sus Compañeros De Trabajo Y Su Jefe',
            'activo' => '1'
            ]);
        GuiaSeccionCatalogo::create([
            'nombre' => 'Tiempo Destinado A Su Trabjo Y Sus Responsabilidades Familiares',
            'activo' => '1'
            ]);
    }
}
