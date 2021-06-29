<?php

namespace Database\Seeders;

use App\Models\DepartamentoCatalogo;
use Illuminate\Database\Seeder;

class DepartamentoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DepartamentoCatalogo::create([
            'id' => 	'ALMAC',
            'id_area' => 	'OPERA',
            'nombre' =>	'Almacén',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'CALID',
            'id_area' => 	'OPERA',
            'nombre' =>	'Calidad',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'COMPR',
            'id_area' => 	'OPERA',
            'nombre' =>	'Compras',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'CONTA',
            'id_area' => 	'FINAN',
            'nombre' =>	'Contabilidad',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'COSTO',
            'id_area' => 	'FINAN',
            'nombre' =>	'Costos',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'CRCXC',
            'id_area' => 	'FINAN',
            'nombre' =>	'Cuentas por pagar',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'CRCXP',
            'id_area' => 	'FINAN',
            'nombre' =>	'Crédito y cobranza',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'DIRGR',
            'id_area' => 	'DIRGR',
            'nombre' =>	'Dirección general',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'DISEN',
            'id_area' => 	'ADMIN',
            'nombre' =>	'Diseño',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'EMBAR',
            'id_area' => 	'COMER',
            'nombre' =>	'Embarques',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'FACTU',
            'id_area' => 	'COMER',
            'nombre' =>	'Facturación',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'FISCA',
            'id_area' => 	'FINAN',
            'nombre' =>	'Fiscal',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'LIMPI',
            'id_area' => 	'ADMIN',
            'nombre' =>	'Limpieza',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'PDVXX',
            'id_area' => 	'COMER',
            'nombre' =>	'Punto de Venta',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'PEDID',
            'id_area' => 	'COMER',
            'nombre' =>	'Pedidos',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'PLANE',
            'id_area' => 	'COMER',
            'nombre' =>	'Planeación',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'PROD',
            'id_area' => 	'OPERA',
            'nombre' =>	'Producción',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'PROMO',
            'id_area' => 	'COMER',
            'nombre' =>	'Promotoría',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'RECEP',
            'id_area' => 	'COMER',
            'nombre' =>	'Recepción',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'RHUMA',
            'id_area' => 	'ADMIN',
            'nombre' =>	'Recursos Humanos',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'SEGHI',
            'id_area' => 	'ADMIN',
            'nombre' =>	'Seguridad e Higiene',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'SISTE',
            'id_area' => 	'ADMIN',
            'nombre' =>	'Sistemas',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'TELEM',
            'id_area' => 	'COMER',
            'nombre' =>	'Telemarketing',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'TESOR',
            'id_area' => 	'FINAN',
            'nombre' =>	'Tesorería',

        ]);
        DepartamentoCatalogo::create([
            'id' => 	'VENTA',
            'id_area' => 	'COMER',
            'nombre' =>	'Ventas',

        ]);
    }
}
