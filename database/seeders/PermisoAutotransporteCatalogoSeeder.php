<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PermisoAutotransporteCatalogo;

class PermisoAutotransporteCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PermisoAutotransporteCatalogo::create([
           'id' => 'CA-C-8601646',
            'sat_carta_porte_tipo_permiso_catalogos_id' => 'TPXX00',
            'vigencia' =>  '05/10/2024',
            'asignado' => '1',
            'activo' => '1',
        ]);

        PermisoAutotransporteCatalogo::create([
            'id' => 'CA-C-11385652',
            'sat_carta_porte_tipo_permiso_catalogos_id' => 'TPXX00',
            'vigencia' =>  '24/08/2024',
            'asignado' => '1',
            'activo' => '1',
        ]);

        PermisoAutotransporteCatalogo::create([
            'id' => 'CA-C-7955429',
            'sat_carta_porte_tipo_permiso_catalogos_id' => 'TPXX00',
            'vigencia' =>  '24/08/2024',
            'asignado' => '1',
            'activo' => '1',
        ]);

        PermisoAutotransporteCatalogo::create([
            'id' => 'AU-C-7955372',
            'sat_carta_porte_tipo_permiso_catalogos_id' => 'TPXX00',
            'vigencia' =>  '24/08/2024',
            'asignado' => '1',
            'activo' => '1',
        ]);

        PermisoAutotransporteCatalogo::create([
            'id' => 'CA-C-7955389',
            'sat_carta_porte_tipo_permiso_catalogos_id' => 'TPXX00',
            'vigencia' =>  '24/08/2024',
            'asignado' => '1',
            'activo' => '1',
        ]);
    }
}
