<?php

namespace Database\Seeders;

use App\Models\GuiaItemCatalogo;
use Illuminate\Database\Seeder;

class GuiaItemCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'1',
            'pregunta' =>	'¿Accidente Que Tenga Como Consecuencia La Muerte, La Pérdida De Un Miembro O Una Lesión Grave?',
            'id_seccion' =>	'1',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'2',
            'pregunta' =>	'¿Asaltos?',
            'id_seccion' =>	'1',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'3',
            'pregunta' =>	'¿Actos Violentos Que Derivaron En Lesiones Graves?',
            'id_seccion' =>	'1',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'4',
            'pregunta' =>	'¿Secuestro?',
            'id_seccion' =>	'1',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'5',
            'pregunta' =>	'¿Amenazas?,
 O',
            'id_seccion' =>	'1',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'6',
            'pregunta' =>	'Cualquier Otro Que Ponga En Riesgo Su Vida O Salud,
 Y/O La De Otras Personas?',
            'id_seccion' =>	'1',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'7',
            'pregunta' =>	'¿Ha Tenido Recuerdos Recurrentes Sobre El Acontecimiento Que Le Provocan Malestares?',
            'id_seccion' =>	'22',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'8',
            'pregunta' =>	'¿Ha Tenido Sueños De Carácter Recurrente Sobre El Acontecimiento,
 Que Le Producen Malestar?',
            'id_seccion' =>	'22',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'9',
            'pregunta' =>	'¿Se Ha Esforzado Por Evitar Todo Tipo De Sentimientos,
 Conversaciones O Situaciones Que Le Puedan Recordar El Acontecimiento?',
            'id_seccion' =>	'16',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'10',
            'pregunta' =>	'¿Se Ha Esforzado Por Evitar Todo Tipo De Actividades,
 Lugares O Personas Que Motivan Recuerdos Del Acontecimiento?',
            'id_seccion' =>	'16',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'11',
            'pregunta' =>	'¿Ha Tenido Dificultad Para Recordar Alguna Parte Importante Del Evento?',
            'id_seccion' =>	'16',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'12',
            'pregunta' =>	'¿Ha Disminuido Su Interés En Sus Actividades Cotidianas?',
            'id_seccion' =>	'16',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'13',
            'pregunta' =>	'¿Se Ha Sentido Usted Alejado O Distante De Los Demás?',
            'id_seccion' =>	'16',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'14',
            'pregunta' =>	'¿Ha Notado Que Tiene Dificultad Para Expresar Sus Sentimientos?',
            'id_seccion' =>	'16',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'15',
            'pregunta' =>	'¿Ha Tenido La Impresión De Que Su Vida Se Va A Acortar,
 Que Va A Morir Antes Que Otras Personas O Que Tiene Un Futuro Limitado?',
            'id_seccion' =>	'16',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'16',
            'pregunta' =>	'¿Ha Tenido Usted Dificultades Para Dormir?',
            'id_seccion' =>	'4',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'17',
            'pregunta' =>	'¿Ha Estado Particularmente Irritable O Le Han Dado Arranques De Coraje?',
            'id_seccion' =>	'4',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'18',
            'pregunta' =>	'¿Ha Tenido Dificultad Para Concentrarse?',
            'id_seccion' =>	'4',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'19',
            'pregunta' =>	'¿Ha Estado Nervioso O Constantemente En Alerta?',
            'id_seccion' =>	'4',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'1',
            'numero_pregunta' =>	'20',
            'pregunta' =>	'¿Se Ha Sobresaltado Fácilmente Por Cualquier Cosa?',
            'id_seccion' =>	'4',
            'id_categoria' => 	'4',
            'id_dominio' =>	'4',
            'id_dimension' =>	'14',
        ]);
        GuiaItemCatalogo::create([
            'id_guia' => 	'2',
            'numero_pregunta' =>	'1',
	'pregunta' =>	'Mi Trabajo Me Exige Hacer Mucho Esfuerzo Físico',
	'id_seccion' =>	'10',
	'id_categoria' => 	'1',
	'id_dominio' =>	'2',
	'id_dimension' =>	'7',
	]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'2',
    'pregunta' =>	'Me Preocupa Sufrir Un Accidente En Mi Trabajo',
    'id_seccion' =>	'10',
    'id_categoria' => 	'1',
    'id_dominio' =>	'2',
    'id_dimension' =>	'8',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'3',
    'pregunta' =>	'Considero Que Las Actividades Que Realizo Son Peligrosas',
    'id_seccion' =>	'10',
    'id_categoria' => 	'1',
    'id_dominio' =>	'2',
    'id_dimension' =>	'24',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'4',
    'pregunta' =>	'Por La Cantidad De Trabajo Que Tengo Debo Quedarme Tiempo Adicional A Mi Turno',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'4',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'5',
    'pregunta' =>	'Por La Cantidad De Trabajo Que Tengo Debo Trabajar Sin Parar ',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'23',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'6',
    'pregunta' =>	'Considero Que Es Necesario Mantener Un Ritmo De Trabajo Acelerado',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'23',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'7',
    'pregunta' =>	'Mi Trabajo Exige Que Esté Muy Concentrado ',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'2',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'8',
    'pregunta' =>	'Mi Trabajo Requiere Que Memorice Mucha Información',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'2',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'9',
    'pregunta' =>	'Mi Trabajo Exige Que Atienda Varios Asuntos Al Mismo Tiempo',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'4',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'10',
    'pregunta' =>	'En Mi Trabajo Soy Responsable De Cosas De Mucho Valor',
    'id_seccion' =>	'2',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'5',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'11',
    'pregunta' =>	'Respondo Ante Mi Jefe Por Los Resultados De Toda Mi Área De Trabajo',
    'id_seccion' =>	'2',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'5',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'12',
    'pregunta' =>	'En Mi Trabajo Me Dan Órdenes Contradictorias',
    'id_seccion' =>	'2',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'3',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'13',
    'pregunta' =>	'Considero Que En Mi Trabajo Me Piden Hacer Cosas Innecesarias',
    'id_seccion' =>	'2',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'3',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'14',
    'pregunta' =>	'Trabajo Horas Extras Más De Tres Veces A La Semana',
    'id_seccion' =>	'24',
    'id_categoria' => 	'6',
    'id_dominio' =>	'7',
    'id_dimension' =>	'18',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'15',
    'pregunta' =>	'Mi Trabajo Me Exige Laborar En Días De Descanso,
 Festivos O Fines De Semana',
    'id_seccion' =>	'24',
    'id_categoria' => 	'6',
    'id_dominio' =>	'7',
    'id_dimension' =>	'18',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'16',
    'pregunta' =>	'Considero Que El Tiempo En El Trabajo Es Mucho Y Perjudica Mis Actividades Familiares O Personales',
    'id_seccion' =>	'24',
    'id_categoria' => 	'6',
    'id_dominio' =>	'6',
    'id_dimension' =>	'16',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'17',
    'pregunta' =>	'Pienso En Las Actividades Familiares O Personales Cuando Estoy En Mi Trabajo',
    'id_seccion' =>	'24',
    'id_categoria' => 	'6',
    'id_dominio' =>	'6',
    'id_dimension' =>	'15',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'18',
    'pregunta' =>	'Mi Trabajo Permite Que Desarrolle Nuevas Habilidades ',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'20',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'19',
    'pregunta' =>	'En Mi Trabajo Puedo Aspirar A Un Mejor Puesto',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'20',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'20',
    'pregunta' =>	'Durante Mi Jornada De Trabajo Puedo Tomar Pausas Cuando Las Necesito',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'13',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'21',
    'pregunta' =>	'Puedo Decidir La Velocidad A La Que Realizo Mis Actividades En Mi Trabajo',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'13',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'22',
    'pregunta' =>	'Puedo Cambiar El Orden De Las Actividades Que Realizo En Mi Trabajo',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'13',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'23',
    'pregunta' =>	'Me Informan Con Claridad Cuáles Son Mis Funciones',
    'id_seccion' =>	'7',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'10',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'24',
    'pregunta' =>	'Me Explican Claramente Los Resultados Que Debo Obtener En Mi Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'10',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'25',
    'pregunta' =>	'Me Informan Con Quién Puedo Resolver Problemas O Asuntos De Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'10',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'26',
    'pregunta' =>	'Me Permiten Asistir A Capacitaciones Relacionadas Con Mi Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'19',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'27',
    'pregunta' =>	'Recibo Capacitación Útil Para Hacer Mi Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'19',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'28',
    'pregunta' =>	'Mi Jefe Tiene En Cuenta Mis Puntos De Vista Y Opiniones',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'1',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'29',
    'pregunta' =>	'Mi Jefe Ayuda A Solucionar Los Problemas Que Se Presentan En El Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'1',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'30',
    'pregunta' =>	'Puedo Confiar En Mis Compañeros De Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'22',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'31',
    'pregunta' =>	'Cuando Tenemos Que Realizar Trabajo De Equipo Los Compañeros Colaboran',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'22',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'32',
    'pregunta' =>	'Mis Compañeros De Trabajo Me Ayudan Cuando Tengo Dificultades',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'22',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'33',
    'pregunta' =>	'En Mi Trabajo Puedo Expresarme Libremente Sin Interrupciones',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'34',
    'pregunta' =>	'Recibo Críticas Constantes A Mi Persona Y/O Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'35',
    'pregunta' =>	'Recibo Burlas,
 Calumnias,
 Difamaciones,
 Humillaciones O Ridiculizaciones',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'36',
    'pregunta' =>	'Se Ignora Mi Presencia O Se Me Excluye De Las Reuniones De Trabajo Y En La Toma De Decisiones',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'37',
    'pregunta' =>	'Se Manipulan Las Situaciones De Trabajo Para Hacerme Parecer Un Mal Trabajador',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'38',
    'pregunta' =>	'Se Ignoran Mis Éxitos Laborales Y Se Atribuyen A Otros Trabajadores',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'39',
    'pregunta' =>	'Me Bloquean O Impiden Las Oportunidades Que Tengo Para Obtener Ascenso O Mejora En Mi Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'40',
    'pregunta' =>	'He Presenciado Actos De Violencia En Mi Centro De Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'41',
    'pregunta' =>	'Atiendo Clientes O Usuarios Muy Enojados',
    'id_seccion' =>	'5',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'6',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'42',
    'pregunta' =>	'Mi Trabajo Me Exige Atender Personas Muy Necesitadas De Ayuda O Enfermas',
    'id_seccion' =>	'5',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'6',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'43',
    'pregunta' =>	'Para Hacer Mi Trabajo Debo Demostrar Sentimientos Distintos A Los Míos',
    'id_seccion' =>	'5',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'6',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'44',
    'pregunta' =>	'Comunican Tarde Los Asuntos De Trabajo',
    'id_seccion' =>	'19',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'9',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'45',
    'pregunta' =>	'Dificultan El Logro De Los Resultados Del Trabajo',
    'id_seccion' =>	'19',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'9',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'2',
    'numero_pregunta' =>	'46',
    'pregunta' =>	'Ignoran Las Sugerencias Para Mejorar Su Trabajo',
    'id_seccion' =>	'19',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'9',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'1',
    'pregunta' =>	'El Espacio Donde Trabajo Me Permite Realizar Mis Actividades De Manera Segura E Higiénica',
    'id_seccion' =>	'9',
    'id_categoria' => 	'1',
    'id_dominio' =>	'2',
    'id_dimension' =>	'8',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'2',
    'pregunta' =>	'Mi Trabajo Me Exige Hacer Mucho Esfuerzo Físico',
    'id_seccion' =>	'10',
    'id_categoria' => 	'1',
    'id_dominio' =>	'2',
    'id_dimension' =>	'7',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'3',
    'pregunta' =>	'Me Preocupa Sufrir Un Accidente En Mi Trabajo',
    'id_seccion' =>	'10',
    'id_categoria' => 	'1',
    'id_dominio' =>	'2',
    'id_dimension' =>	'8',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'4',
    'pregunta' =>	'Considero Que En Mi Trabajo Se Aplican Las Normas De Seguridad Y Salud En El Trabajo',
    'id_seccion' =>	'9',
    'id_categoria' => 	'1',
    'id_dominio' =>	'2',
    'id_dimension' =>	'7',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'5',
    'pregunta' =>	'Considero Que Las Actividades Que Realizo Son Peligrosas',
    'id_seccion' =>	'10',
    'id_categoria' => 	'1',
    'id_dominio' =>	'2',
    'id_dimension' =>	'24',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'6',
    'pregunta' =>	'Por La Cantidad De Trabajo Que Tengo Debo Quedarme Tiempo Adicional A Mi Turno',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'4',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'7',
    'pregunta' =>	'Por La Cantidad De Trabajo Que Tengo Debo Trabajar Sin Parar',
    'id_seccion' =>	'6',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'23',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'8',
    'pregunta' =>	'Considero Que Es Necesario Mantener Un Ritmo De Trabajo Acelerado',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'23',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'9',
    'pregunta' =>	'Mi Trabajo Exige Que Esté Muy Concentrado',
    'id_seccion' =>	'15',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'2',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'10',
    'pregunta' =>	'Mi Trabajo Requiere Que Memorice Mucha Información',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'2',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'11',
    'pregunta' =>	'En Mi Trabajo Tengo Que Tomar Decisiones Difíciles Muy Rápido',
    'id_seccion' =>	'15',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'2',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'12',
    'pregunta' =>	'Mi Trabajo Exige Que Atienda Varios Asuntos Al Mismo Tiempo',
    'id_seccion' =>	'10',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'4',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'13',
    'pregunta' =>	'En Mi Trabajo Soy Responsable De Cosas De Mucho Valor',
    'id_seccion' =>	'2',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'5',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'14',
    'pregunta' =>	'Respondo Ante Mi Jefe Por Los Resultados De Toda Mi Área De Trabajo',
    'id_seccion' =>	'2',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'5',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'15',
    'pregunta' =>	'En El Trabajo Me Dan Órdenes Contradictorias',
    'id_seccion' =>	'2',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'3',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'16',
    'pregunta' =>	'Considero Que En Mi Trabajo Me Piden Hacer Cosas Innecesarias',
    'id_seccion' =>	'2',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'3',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'17',
    'pregunta' =>	'Trabajo Horas Extras Más De Tres Veces A La Semana',
    'id_seccion' =>	'24',
    'id_categoria' => 	'6',
    'id_dominio' =>	'7',
    'id_dimension' =>	'18',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'18',
    'pregunta' =>	'Mi Trabajo Me Exige Laborar En Días De Descanso,
 Festivos O Fines De Semana',
    'id_seccion' =>	'24',
    'id_categoria' => 	'6',
    'id_dominio' =>	'7',
    'id_dimension' =>	'18',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'19',
    'pregunta' =>	'Considero Que El Tiempo En El Trabajo Es Mucho Y Perjudica Mis Actividades Familiares O Personales',
    'id_seccion' =>	'24',
    'id_categoria' => 	'6',
    'id_dominio' =>	'6',
    'id_dimension' =>	'16',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'20',
    'pregunta' =>	'Debo Atender Asuntos De Trabajo Cuando Estoy En Casa',
    'id_seccion' =>	'21',
    'id_categoria' => 	'6',
    'id_dominio' =>	'6',
    'id_dimension' =>	'16',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'21',
    'pregunta' =>	'Pienso En Las Actividades Familiares O Personales Cuando Estoy En Mi Trabajo',
    'id_seccion' =>	'24',
    'id_categoria' => 	'6',
    'id_dominio' =>	'6',
    'id_dimension' =>	'15',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'22',
    'pregunta' =>	'Pienso Que Mis Responsabilidades Familiares Afectan Mi Trabajo ',
    'id_seccion' =>	'21',
    'id_categoria' => 	'6',
    'id_dominio' =>	'6',
    'id_dimension' =>	'15',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'23',
    'pregunta' =>	'Mi Trabajo Permite Que Desarrolle Nuevas Habilidades ',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'20',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'24',
    'pregunta' =>	'En Mi Trabajo Puedo Aspirar A Un Mejor Puesto',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'20',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'25',
    'pregunta' =>	'Durante Mi Jornada De Trabajo Puedo Tomar Pausas Cuando Las Necesito',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'13',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'26',
    'pregunta' =>	'Puedo Decidir Cuánto Trabajo Realizo Durante La Jornada Laboral',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'13',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'27',
    'pregunta' =>	'Puedo Decidir La Velocidad A La Que Realizo Mis Actividades En Mi Trabajo',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'13',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'28',
    'pregunta' =>	'Puedo Cambiar El Orden De Las Actividades Que Realizo En Mi Trabajo',
    'id_seccion' =>	'14',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'13',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'29',
    'pregunta' =>	'Los Cambios Que Se Presentan En Mi Trabajo Dificultan Mi Labor',
    'id_seccion' =>	'11',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'17',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'30',
    'pregunta' =>	'Cuando Se Presentan Cambios En Mi Trabajo Se Tienen En Cuenta Mis Ideas O Aportaciones',
    'id_seccion' =>	'11',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'17',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'31',
    'pregunta' =>	'Me Informan Con Claridad Cuáles Son Mis Funciones',
    'id_seccion' =>	'7',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'10',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'32',
    'pregunta' =>	'Me Explican Claramente Los Resultados Que Debo Obtener En Mi Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'10',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'33',
    'pregunta' =>	'Me Explican Claramente Los Objetivos De Mi Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'10',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'34',
    'pregunta' =>	'Me Informan Con Quién Puedo Resolver Problemas O Asuntos De Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'10',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'35',
    'pregunta' =>	'Me Permiten Asistir A Capacitaciones Relacionadas Con Mi Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'19',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'36',
    'pregunta' =>	'Recibo Capacitación Útil Para Hacer Mi Trabajo',
    'id_seccion' =>	'7',
    'id_categoria' => 	'3',
    'id_dominio' =>	'3',
    'id_dimension' =>	'19',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'37',
    'pregunta' =>	'Mi Jefe Ayuda A Organizar Mejor El Trabajo',
    'id_seccion' =>	'20',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'1',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'38',
    'pregunta' =>	'Mi Jefe Tiene En Cuenta Mis Puntos De Vista Y Opiniones',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'1',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'39',
    'pregunta' =>	'Mi Jefe Me Comunica A Tiempo La Información Relacionada Con El Trabajo',
    'id_seccion' =>	'20',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'1',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'40',
    'pregunta' =>	'La Orientación Que Me Da Mi Jefe Me Ayuda A Realizar Mejor Mi Trabajo',
    'id_seccion' =>	'20',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'1',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'41',
    'pregunta' =>	'Mi Jefe Ayuda A Solucionar Los Problemas Que Se Presentan En El Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'8',
    'id_dimension' =>	'1',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'42',
    'pregunta' =>	'Puedo Confiar En Mis Compañeros De Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'22',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'43',
    'pregunta' =>	'Entre Compañeros Solucionamos Los Problemas De Trabajo De Forma Respetuosa',
    'id_seccion' =>	'8',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'22',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'44',
    'pregunta' =>	'En Mi Trabajo Me Hacen Sentir Parte Del Grupo',
    'id_seccion' =>	'8',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'22',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'45',
    'pregunta' =>	'Cuando Tenemos Que Realizar Trabajo De Equipo Los Compañeros Colaboran',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'22',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'46',
    'pregunta' =>	'Mis Compañeros De Trabajo Me Ayudan Cuando Tengo Dificultades',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'22',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'47',
    'pregunta' =>	'Me Informan Sobre Lo Que Hago Bien En Mi Trabajo',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'9',
    'id_dimension' =>	'11',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'48',
    'pregunta' =>	'La Forma Como Evalúan Mi Trabajo En Mi Centro De Trabajo Me Ayuda A Mejorar Mi Desempeño',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'9',
    'id_dimension' =>	'11',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'49',
    'pregunta' =>	'En Mi Centro De Trabajo Me Pagan A Tiempo Mi Salario',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'9',
    'id_dimension' =>	'12',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'50',
    'pregunta' =>	'El Pago Que Recibo Es El Que Merezco Por El Trabajo Que Realizo',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'9',
    'id_dimension' =>	'12',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'51',
    'pregunta' =>	'Si Obtengo Los Resultados Esperados En Mi Trabajo Me Recompensan O Reconocen',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'9',
    'id_dimension' =>	'12',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'52',
    'pregunta' =>	'Las Personas Que Hacen Bien El Trabajo Pueden Crecer Laboralmente',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'9',
    'id_dimension' =>	'12',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'53',
    'pregunta' =>	'Considero Que Mi Trabajo Es Estable',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'5',
    'id_dimension' =>	'21',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'54',
    'pregunta' =>	'En Mi Trabajo Existe Continua Rotación De Personal',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'5',
    'id_dimension' =>	'21',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'55',
    'pregunta' =>	'Siento Orgullo De Laborar En Este Centro De Trabajo',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'5',
    'id_dimension' =>	'21',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'56',
    'pregunta' =>	'Me Siento Comprometido Con Mi Trabajo',
    'id_seccion' =>	'18',
    'id_categoria' => 	'2',
    'id_dominio' =>	'5',
    'id_dimension' =>	'21',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'57',
    'pregunta' =>	'En Mi Trabajo Puedo Expresarme Libremente Sin Interrupciones',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'58',
    'pregunta' =>	'Recibo Críticas Constantes A Mi Persona Y/O Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'59',
    'pregunta' =>	'Recibo Burlas,
 Calumnias,
 Difamaciones,
 Humillaciones O Ridiculizaciones',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'60',
    'pregunta' =>	'Se Ignora Mi Presencia O Se Me Excluye De Las Reuniones De Trabajo Y En La Toma De Decisiones',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'61',
    'pregunta' =>	'Se Manipulan Las Situaciones De Trabajo Para Hacerme Parecer Un Mal Trabajador',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'62',
    'pregunta' =>	'Se Ignoran Mis Éxitos Laborales Y Se Atribuyen A Otros Trabajadores',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'63',
    'pregunta' =>	'Me Bloquean O Impiden Las Oportunidades Que Tengo Para Obtener Ascenso O Mejora En Mi Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'64',
    'pregunta' =>	'He Presenciado Actos De Violencia En Mi Centro De Trabajo',
    'id_seccion' =>	'23',
    'id_categoria' => 	'5',
    'id_dominio' =>	'11',
    'id_dimension' =>	'25',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'65',
    'pregunta' =>	'Atiendo Clientes O Usuarios Muy Enojados',
    'id_seccion' =>	'5',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'6',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'66',
    'pregunta' =>	'Mi Trabajo Me Exige Atender Personas Muy Necesitadas De Ayuda O Enfermas',
    'id_seccion' =>	'5',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'6',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'67',
    'pregunta' =>	'Para Hacer Mi Trabajo Debo Demostrar Sentimientos Distintos A Los Míos',
    'id_seccion' =>	'5',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'6',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'68',
    'pregunta' =>	'Mi Trabajo Me Exige Atender Situaciones De Violencia',
    'id_seccion' =>	'5',
    'id_categoria' => 	'3',
    'id_dominio' =>	'1',
    'id_dimension' =>	'6',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'69',
    'pregunta' =>	'Comunican Tarde Los Asuntos De Trabajo',
    'id_seccion' =>	'19',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'9',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'70',
    'pregunta' =>	'Dificultan El Logro De Los Resultados Del Trabajo',
    'id_seccion' =>	'19',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'9',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'71',
    'pregunta' =>	'Cooperan Poco Cuando Se Necesita',
    'id_seccion' =>	'19',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'9',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'3',
    'numero_pregunta' =>	'72',
    'pregunta' =>	'Ignoran Las Sugerencias Para Mejorar Su Trabajo',
    'id_seccion' =>	'19',
    'id_categoria' => 	'5',
    'id_dominio' =>	'10',
    'id_dimension' =>	'9',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'1',
    'pregunta' =>	'Política De Prevención De Riesgos Psicosociales',
    'id_seccion' =>	'17',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'2',
    'pregunta' =>	'Sexo',
    'id_seccion' =>	'12',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'3',
    'pregunta' =>	'Edad En Años',
    'id_seccion' =>	'12',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'4',
    'pregunta' =>	'Nivel De Estudios',
    'id_seccion' =>	'12',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'5',
    'pregunta' =>	'Ocupacion Profesion Puesto',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'6',
    'pregunta' =>	'Departamentos Seccion Area',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'7',
    'pregunta' =>	'Tipo De Puesto',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'8',
    'pregunta' =>	'Tipo De Contatacion',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'9',
    'pregunta' =>	'Tipo De Personal',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'10',
    'pregunta' =>	'Tipo De Jornada De Trabajo',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'11',
    'pregunta' =>	'Realiza Rotacion De Turnos',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'12',
    'pregunta' =>	'Experiencia (Años) Tiempo En El Puesto Actual',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
GuiaItemCatalogo::create([
    'id_guia' => 	'5',
    'numero_pregunta' =>	'13',
    'pregunta' =>	'Tiempo Experiencia Laboral',
    'id_seccion' =>	'13',
    'id_categoria' => 	'4',
    'id_dominio' =>	'4',
    'id_dimension' =>	'14',
]);
    }
}
