<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SeguroAutotransporteCatalogo;

class SeguroAutotransporteCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeguroAutotransporteCatalogo::create([
            'id' => '655-2322-22',
            'asegura_resp_civil' => 'HDI Seguros',
            'vigencia' => '16/02/2023',
            'asignado' => '1',
            'activo' => '1'
        ]);
        SeguroAutotransporteCatalogo::create([
            'id' => '655-2322-14',
            'asegura_resp_civil' => 'HDI Seguros',
            'vigencia' => '16/02/2023',
            'asignado' => '1',
            'activo' => '1'
        ]);
        SeguroAutotransporteCatalogo::create([
            'id' => '655-2322-13',
            'asegura_resp_civil' => 'HDI Seguros',
            'vigencia' => '16/02/2023',
            'asignado' => '1',
            'activo' => '1'
        ]);
        SeguroAutotransporteCatalogo::create([
            'id' => '655-2322-8',
            'asegura_resp_civil' => 'HDI Seguros',
            'vigencia' => '16/02/2023',
            'asignado' => '1',
            'activo' => '1'
        ]);
        SeguroAutotransporteCatalogo::create([
            'id' => '655-2322-7',
            'asegura_resp_civil' => 'HDI Seguros',
            'vigencia' => '16/02/2023',
            'asignado' => '1',
            'activo' => '1'
        ]);
    }
}
