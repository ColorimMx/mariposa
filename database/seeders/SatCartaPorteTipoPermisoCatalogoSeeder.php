<?php

namespace Database\Seeders;

use App\Models\SatCartaPorteTipoPermisoCatalogo;
use Illuminate\Database\Seeder;

class SatCartaPorteTipoPermisoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF01',
            'nombre' =>	'Autotransporte Federal de carga general.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF02',
            'nombre' =>	'Transporte privado de carga.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF03',
            'nombre' =>	'Autotransporte Federal de Carga Especializada de materiales y residuos peligrosos.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF04',
            'nombre' =>	'Transporte de automóviles sin rodar en vehículo tipo góndola.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF05',
            'nombre' =>	'Transporte de carga de gran peso y/o volumen de hasta 90 toneladas.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF06',
            'nombre' =>	'Transporte de carga especializada de gran peso y/o volumen de más 90 toneladas.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF07',
            'nombre' =>	'Transporte Privado de materiales y residuos peligrosos.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF08',
            'nombre' =>	'Autotransporte internacional de carga de largo recorrido.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF09',
            'nombre' =>	'Autotransporte internacional de carga especializada de materiales y residuos peligrosos de largo recorrido.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF10',
            'nombre' =>	'Autotransporte Federal de Carga General cuyo ámbito de aplicación comprende la franja fronteriza con Estados Unidos.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF11',
            'nombre' =>	'Autotransporte Federal de Carga Especializada cuyo ámbito de aplicación comprende la franja fronteriza con Estados Unidos.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF12',
            'nombre' =>	'Servicio auxiliar de arrastre en las vías generales de comunicación.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF13',
            'nombre' =>	'Servicio auxiliar de servicios de arrastre,arrastre y salvamento, y depósito de vehículos en las vías generales de comunicación.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF14',
            'nombre' =>	'Servicio de paquetería y mensajería en las vías generales de comunicación.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF15',
            'nombre' =>	'Transporte especial para el tránsito de grúas industriales con peso máximo de 90 toneladas.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF16',
            'nombre' =>	'Servicio federal para empresas arrendadoras servicio público federal.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF17',
            'nombre' =>	'Empresas trasladistas de vehículos nuevos.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF18',
            'nombre' =>	'Empresas fabricantes o distribuidoras de vehículos nuevos.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF19',
            'nombre' =>	'Autorización expresa para circular en los caminos y puentes de jurisdicción federal con configuraciones de tractocamión doblemente articulado.',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPAF20',
            'nombre' =>	'Autotransporte Federal de Carga Especializada de fondos y valores.',
            'activo' => '1'
            ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPTM01',
            'nombre' =>	'Permiso temporal para navegación de cabotaje',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPTA01',
            'nombre' =>	'Concesión y/o autorización para el servicio regular nacional y/o internacional para empresas mexicanas',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPTA02',
            'nombre' =>	'Permiso para el servicio aéreo regular de empresas extranjeras',
            'activo' => '1'
            ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPTA03',
            'nombre' =>	'Permiso para el servicio nacional e internacional no regular de fletamento',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPTA04',
            'nombre' =>	'Permiso para el servicio nacional e internacional no regular de taxi aéreo',
            'activo' => '1'
        ]);

        SatCartaPorteTipoPermisoCatalogo::create([
            'id' =>    	'TPXX00',
            'nombre' =>	'Permiso no contemplado en el catálogo.',
            'activo' => '1'
        ]);
    }
}
