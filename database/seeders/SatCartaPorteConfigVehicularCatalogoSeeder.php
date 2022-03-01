<?php

namespace Database\Seeders;

use App\Models\SatCartaPorteConfigVehicularCatalogo;
use Illuminate\Database\Seeder;

class SatCartaPorteConfigVehicularCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'VL',
            'nombre' =>	'Vehículo ligero de carga (2 llantas en el eje delantero y 2 llantas en el eje trasero)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'C2',
            'nombre' =>	'Camión Unitario (2 llantas en el eje delantero y 4 llantas en el eje trasero)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'C3',
            'nombre' =>	'Camión Unitario (2 llantas en el eje delantero y 6 o 8 llantas en los dos ejes traseros)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'C2R2',
            'nombre' =>	'Camión-Remolque (6 llantas en el camión y 8 llantas en remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'C3R2',
            'nombre' =>	'Camión-Remolque (10 llantas en el camión y 8 llantas en remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'C2R3',
            'nombre' =>	'Camión-Remolque (6 llantas en el camión y 12 llantas en remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'C3R3',
            'nombre' =>	'Camión-Remolque (10 llantas en el camión y 12 llantas en remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T2S1',
            'nombre' =>	'Tractocamión Articulado (6 llantas en el tractocamión, 4 llantas en el semirremolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T2S2',
            'nombre' =>	'Tractocamión Articulado (6 llantas en el tractocamión, 8 llantas en el semirremolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T2S3',
            'nombre' =>	'Tractocamión Articulado (6 llantas en el tractocamión, 12 llantas en el semirremolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S1',
            'nombre' =>	'Tractocamión Articulado (10 llantas en el tractocamión, 4 llantas en el semirremolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S2',
            'nombre' =>	'Tractocamión Articulado (10 llantas en el tractocamión, 8 llantas en el semirremolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S3',
            'nombre' =>	'Tractocamión Articulado (10 llantas en el tractocamión, 12 llantas en el semirremolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T2S1R2',
            'nombre' =>	'Tractocamión Semirremolque-Remolque (6 llantas en el tractocamión, 4 llantas en el semirremolque y 8 llantas en el remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T2S2R2',
            'nombre' =>	'Tractocamión Semirremolque-Remolque (6 llantas en el tractocamión, 8 llantas en el semirremolque y 8 llantas en el remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T2S1R3',
            'nombre' =>	'Tractocamión Semirremolque-Remolque (6 llantas en el tractocamión, 4 llantas en el semirremolque y 12 llantas en el remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S1R2',
            'nombre' =>	'Tractocamión Semirremolque-Remolque (10 llantas en el tractocamión, 4 llantas en el semirremolque y 8 llantas en el remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S1R3',
            'nombre' =>	'Tractocamión Semirremolque-Remolque (10 llantas en el tractocamión, 4 llantas en el semirremolque y 12 llantas en el remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S2R2',
            'nombre' =>	'Tractocamión Semirremolque-Remolque (10 llantas en el tractocamión, 8 llantas en el semirremolque y 8 llantas en el remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S2R3',
            'nombre' =>	'Tractocamión Semirremolque-Remolque (10 llantas en el tractocamión, 8 llantas en el semirremolque y 12 llantas en el remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S2R4',
            'nombre' =>	'Tractocamión Semirremolque-Remolque (10 llantas en el tractocamión, 8 llantas en el semirremolque y 16 llantas en el remolque)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T2S2S2',
            'nombre' =>	'Tractocamión Semirremolque-Semirremolque (6 llantas en el tractocamión, 8 llantas en el semirremolque delantero y 8 llantas en el semirremolque trasero)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S2S2',
            'nombre' =>	'Tractocamión Semirremolque-Semirremolque (10 llantas en el tractocamión, 8 llantas en el semirremolque delantero y 8 llantas en el semirremolque trasero)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'T3S3S2',
            'nombre' =>	'Tractocamión Semirremolque-Semirremolque (10 llantas en el tractocamión, 12 llantas en el semirremolque delantero y 8 llantas en el semirremolque trasero)',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'OTROEVGP',
            'nombre' =>	'Especializado de carga Voluminosa y/o Gran Peso',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'OTROSG',
            'nombre' =>	'Servicio de Grúas',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'GPLUTA',
            'nombre' =>	'Grúa de Pluma Tipo A',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'GPLUTB',
            'nombre' =>	'Grúa de Pluma Tipo B',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'GPLUTC',
            'nombre' =>	'Grúa de Pluma Tipo C',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'GPLUTD',
            'nombre' =>	'Grúa de Pluma Tipo D',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'GPLATA',
            'nombre' =>	'Grúa de Plataforma Tipo A',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'GPLATB',
            'nombre' =>	'Grúa de Plataforma Tipo B',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'GPLATC',
            'nombre' =>	'Grúa de Plataforma Tipo C',
            'activo' => '1'
        ]);
        SatCartaPorteConfigVehicularCatalogo::create([
            'id' =>    	'GPLATD',
            'nombre' =>	'Grúa de Plataforma Tipo D',
            'activo' => '1'
        ]);

    }
}
