<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mba3ClienteTipoCatalogo;
use App\Models\ClienteTipoCatalogo;

class ClienteTipoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbatipos = new Mba3ClienteTipoCatalogo();
        $tipos = $mbatipos->get_cliente_tipo();

        foreach ($tipos as $tipo) {
            ClienteTipoCatalogo::create([
                'id' => $tipo->id,
                'nombre' => $tipo->nombre,
                'activo' => '1'
            ]);
        }
    }
}
