<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mba3ClienteCatalogo;
use App\Models\ClienteCatalogo;

class ClienteCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbaclientes = new Mba3ClienteCatalogo();
        $clientes = $mbaclientes->get_clientes();

        foreach ($clientes as $cliente) {
            ClienteCatalogo::create([
                'id' => $cliente->id,
                'nombre' => $cliente->nombre,
                'rfc' => $cliente->rfc,
                'razon_social' => $cliente->razon_social,
                'fecha_ingreso' => $cliente->fecha_ingreso,
                'direccion_principal_1' => $cliente->direccion_principal_1,
                'direccion_principal_2' => $cliente->direccion_principal_2,
                'direccion_principal_3' => $cliente->direccion_principal_3,
                'num_exterior' => $cliente->num_exterior,
                'num_interior' => $cliente->num_interior,
                'colonia' => $cliente->colonia,
                'municipio' => $cliente->municipio,
                'localidad' => $cliente->localidad,
                'ciudad_id' => $cliente->ciudad_id,
                'estado_id' => $cliente->estado_id,
                'pais_id' => $cliente->pais_id,
                'cp' => $cliente->cp,
                'telefono' => $cliente->telefono,
                'telefono_2' => $cliente->telefono_2,
                'fax' => $cliente->fax,
                'email_fiscal' => $cliente->email_fiscal,
                'e_mail' => $cliente->e_mail,
                //'cuenta_id' => $cliente->cuenta_id,
                'moneda_id' => $cliente->moneda_id,
                'dias_credito' => $cliente->dias_credito,
                'termino_credito' => $cliente->termino_credito,
                /*'limite_credito' => $cliente->limite_credito,
                'saldo' => $cliente->saldo,
                'reserva' => $cliente->reserva,*/
                'zona_id' => $cliente->zona_id,
                //'tipo_id' => $cliente->tipo_id,
                'giro_id' => $cliente->giro_id,
                'categoria_id' => $cliente->categoria_id,
                'sector_id' => $cliente->sector_id,
                'localizacion_id' => $cliente->localizacion_id,
                'vendedor_id' => $cliente->vendedor_id,
                'sat_regimen_fiscal_id' => $cliente->sat_regimen_fiscal_id,
                'activo' => '1'
            ]);
        }
    }
}
