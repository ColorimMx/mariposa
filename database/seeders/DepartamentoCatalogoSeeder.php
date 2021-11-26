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
            'id' => 'ALMAC',
            'area_id' => 'OPERA',
            'nombre' =>	'Almacén',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'CALID',
            'area_id' => 'OPERA',
            'nombre' =>	'Calidad',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'COMPR',
            'area_id' => 'OPERA',
            'nombre' =>	'Compras',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'CONTA',
            'area_id' => 'FINAN',
            'nombre' =>	'Contabilidad',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'COSTO',
            'area_id' => 'FINAN',
            'nombre' =>	'Costos',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'CRCXC',
            'area_id' => 'FINAN',
            'nombre' =>	'Cuentas por pagar',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'CRCXP',
            'area_id' => 'FINAN',
            'nombre' =>	'Crédito y cobranza',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'DIRGR',
            'area_id' => 'DIRGR',
            'nombre' =>	'Dirección general',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'DISEN',
            'area_id' => 'ADMIN',
            'nombre' =>	'Diseño',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'EMBAR',
            'area_id' => 'COMER',
            'nombre' =>	'Embarques',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'FACTU',
            'area_id' => 'COMER',
            'nombre' =>	'Facturación',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'FISCA',
            'area_id' => 'FINAN',
            'nombre' =>	'Fiscal',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'LIMPI',
            'area_id' => 'ADMIN',
            'nombre' =>	'Limpieza',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'PDVXX',
            'area_id' => 'COMER',
            'nombre' =>	'Punto de Venta',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'PEDID',
            'area_id' => 'COMER',
            'nombre' =>	'Pedidos',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'PLANE',
            'area_id' => 'COMER',
            'nombre' =>	'Planeación',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'PROD',
            'area_id' => 'OPERA',
            'nombre' =>	'Producción',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'PROMO',
            'area_id' => 'COMER',
            'nombre' =>	'Promotoría',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'RECEP',
            'area_id' => 'COMER',
            'nombre' =>	'Recepción',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'RHUMA',
            'area_id' => 'ADMIN',
            'nombre' =>	'Recursos Humanos',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'SEGHI',
            'area_id' => 'ADMIN',
            'nombre' =>	'Seguridad e Higiene',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'SISTE',
            'area_id' => 'ADMIN',
            'nombre' =>	'Sistemas',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'TELEM',
            'area_id' => 'COMER',
            'nombre' =>	'Telemarketing',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'TESOR',
            'area_id' => 'FINAN',
            'nombre' =>	'Tesorería',
            'activo' => '1'
        ]);
        DepartamentoCatalogo::create([
            'id' => 'VENTA',
            'area_id' => 'COMER',
            'nombre' =>	'Ventas',
            'activo' => '1'
        ]);
    }
}
