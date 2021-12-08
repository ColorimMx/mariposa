<?php

namespace Database\Seeders;

use App\Models\EmpresaAlmacenCatalogo;
use Illuminate\Database\Seeder;

class EmpresaAlmacenCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpresaAlmacenCatalogo::create([
            'id' => 'PVA',
            'nombre' => 'AMAZON',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'DEV',
            'nombre' => 'DEVOLUCIONES',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'MLB',
            'nombre' => 'MERCADO LIBRE',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PM1',
            'nombre' => 'MISCELANEAS Z1',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PVM',
            'nombre' => 'MONARCA',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'MP1',
            'nombre' => 'MP CIVAC',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'MPC',
            'nombre' => 'MP INSPECCION',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'MPP',
            'nombre' => 'MP PINOS',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PVP',
            'nombre' => 'PARISINA',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PPP',
            'nombre' => 'PRODUCTO PROC',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PDC',
            'nombre' => 'PRUEBAS CALIDAD',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PTC',
            'nombre' => 'PT CIVAC',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PTX',
            'nombre' => 'PT OXXO',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PTP',
            'nombre' => 'PT PINOS',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PV7',
            'nombre' => 'PVMISC1',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PV8',
            'nombre' => 'PVMISC2',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PV9',
            'nombre' => 'PVMISC3',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'RPR',
            'nombre' => 'REPROCESO',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'SPV',
            'nombre' => 'SOLPRO',
            'sucursal_id' => 'PRI',
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

        EmpresaAlmacenCatalogo::create([
            'id' => 'PV1',
            'nombre' => 'PVCENTRO',
            'sucursal_id' => 'S01',
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
        EmpresaAlmacenCatalogo::create([
            'id' => 'PV2',
            'nombre' => 'PVPLAZA',
            'sucursal_id' => 'S02',
            'activo' => '0'
        ]);
        EmpresaAlmacenCatalogo::create([
            'id' => 'PV3',
            'nombre' => 'PVCVA',
            'sucursal_id' => 'S03',
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
        EmpresaAlmacenCatalogo::create([
            'id' => 'PV4',
            'nombre' => 'PVTLA',
            'sucursal_id' => 'S04',
            'activo' => '0'
        ]);
        EmpresaAlmacenCatalogo::create([
            'id' => 'PV5',
            'nombre' => 'PVMTY',
            'sucursal_id' => 'S05',
            'activo' => '0'
        ]);
        EmpresaAlmacenCatalogo::create([
            'id' => 'PV6',
            'nombre' => 'PVSAN',
            'sucursal_id' => 'S06',
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
