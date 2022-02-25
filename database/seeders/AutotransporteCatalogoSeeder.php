<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AutotransporteCatalogo;

class AutotransporteCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AutotransporteCatalogo::create([
            'marca' => 'Freigthliner',
            'modelo' => 'FL 360',
            'anio_modelo_vm' => '2016',
            'placa' => 'LD-18818',
            'permiso_autotransporte_id' => 'CA-C-8601646',
            'config_vehicular_id' => 'C2',
            'asegura_resp_civil_id' => '655-2322-22',
        ]);

        AutotransporteCatalogo::create([
            'marca' => 'Chevrolet',
            'modelo' => 'Panel 30',
            'anio_modelo_vm' => '1991',
            'placa' => 'LC-57616',
            'permiso_autotransporte_id' => 'CA-C-11385652',
            'config_vehicular_id' => 'C2',
            'asegura_resp_civil_id' => '655-2322-14',
        ]);

        AutotransporteCatalogo::create([
            'marca' => 'Chevrolet',
            'modelo' => 'Panel 30',
            'anio_modelo_vm' => '1997',
            'placa' => 'LC-57603',
            'permiso_autotransporte_id' => 'CA-C-7955429',
            'config_vehicular_id' => 'C2',
            'asegura_resp_civil_id' => '655-2322-13',
        ]);

        AutotransporteCatalogo::create([
            'marca' => 'Dodge',
            'modelo' => 'RAM 1500',
            'anio_modelo_vm' => '2003',
            'placa' => 'NMS-4631',
            'permiso_autotransporte_id' => 'AU-C-7955372',
            'config_vehicular_id' => 'VL',
            'asegura_resp_civil_id' => '655-2322-8',
        ]);

        AutotransporteCatalogo::create([
            'marca' => 'Dodge',
            'modelo' => 'RAM 1500',
            'anio_modelo_vm' => '1997',
            'placa' => 'NMS-4640',
            'permiso_autotransporte_id' => 'CA-C-7955389',
            'config_vehicular_id' => 'VL',
            'asegura_resp_civil_id' => '655-2322-7',
        ]);
    }
}
