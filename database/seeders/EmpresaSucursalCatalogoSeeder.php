<?php

namespace Database\Seeders;

use App\Models\EmpresaSucursalCatalogo;
use Illuminate\Database\Seeder;

class EmpresaSucursalCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpresaSucursalCatalogo::create([
            'id' => 'PRI',
            'nombre' => 'MATRIZ',
            'empresa_id' => 'CIMSA',
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
        EmpresaSucursalCatalogo::create([
            'id' => 'S01',
            'nombre' => 'PV CENTRO',
            'empresa_id' => 'CIMSA',
            'direccion_principal_1' => 'REGINA',
            'num_exterior' => '114B',
            'colonia' => 'CENTRO',
            'ciudad_id' => 'CDM6',
            'estado_id' => 'CDMX',
            'pais_id' => 'MEX',
            'cp' => '01180',
            'telefono' => '5555229173',
            'activo' => '1'
        ]);
        EmpresaSucursalCatalogo::create([
            'id' => 'S02',
            'nombre' => 'PV PLAZA CUERNAVACA',
            'empresa_id' => 'CIMSA',
            'activo' => '0'
        ]);
        EmpresaSucursalCatalogo::create([
            'id' => 'S03',
            'nombre' => 'PV CUERNAVACA CENTRO',
            'empresa_id' => 'CIMSA',
            'direccion_principal_1' => 'MATAMOROS',
            'num_exterior' => '15-2',
            'colonia' => 'CENTRO',
            'ciudad_id' => 'MOR3',
            'estado_id' => 'MOR',
            'pais_id' => 'MEX',
            'cp' => '62000',
            'telefono' => '7773105757',
            'activo' => '1'
        ]);
        EmpresaSucursalCatalogo::create([
            'id' => 'S04',
            'nombre' => 'PV TLALNEPANTLA',
            'empresa_id' => 'CIMSA',
            'activo' => '0'
        ]);
        EmpresaSucursalCatalogo::create([
            'id' => 'S05',
            'nombre' => 'PV MONTERREY',
            'empresa_id' => 'CIMSA',
            'activo' => '0'
        ]);
        EmpresaSucursalCatalogo::create([
            'id' => 'S06',
            'nombre' => 'PV SAN ANGEL',
            'empresa_id' => 'CIMSA',
            'direccion_principal_1' => 'AV. INSURGENTES SUR',
            'num_exterior' => '2167 D',
            'colonia' => 'SAN ANGEL',
            'ciudad_id' => 'CDM6',
            'estado_id' => 'CDMX',
            'pais_id' => 'MEX',
            'cp' => '01000',
            'telefono' => '5555982931',
            'activo' => '1'
        ]);
    }
}
