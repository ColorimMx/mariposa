<?php

namespace Database\Seeders;

use App\Models\EmpresaCatalogo;
use Illuminate\Database\Seeder;

class EmpresaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpresaCatalogo::create([
            'id' => 'CIMSA',
            'razon_social' => 'COLORANTES IMPORTADOSA SA DE CV',
            'RFC' => 'CIM581206CI9',
            'direccion_principal_1' => 'CALLE 10',
            'num_exterior' => '20',
            'colonia' => 'SAN PEDRO DE LOS PINOS',
            'ciudad_id' => 'CDM1',
            'estado_id' => 'CDMX',
            'pais_id' => 'MEX',
            'cp' => '01180',
            'telefono' => '5591495500',
            'telefono_2' => '80000 20000',
            'activo' => '1'
        ]);

        EmpresaCatalogo::create([
            'id' => 'IARSA',
            'razon_social' => 'INDUSTRIAS ARCOIRIS SA DE CV',
            'RFC' => 'IAR990924GI4',
            'direccion_principal_1' => '21 ESTE',
            'direccion_principal_2' => 'LOTE 3',
            'direccion_principal_3' => 'MANZANA 3',
            'num_exterior' => '29',
            'colonia' => 'CIVAC',
            'ciudad_id' => 'MOR6',
            'estado_id' => 'MOR',
            'pais_id' => 'MEX',
            'cp' => '62500',
            'telefono' => '7773206565',
            'activo' => '1'
        ]);



    }
}
