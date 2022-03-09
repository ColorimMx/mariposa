<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mba3ClienteVendedorCatalogo;
use App\Models\ClienteVendedorCatalogo;

class ClienteVendedorCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbavendedor = new Mba3ClienteVendedorCatalogo();
        $vendedores = $mbavendedor->get_vendedor();

        foreach ($vendedores as $vendedor) {
            ClienteVendedorCatalogo::create([
                'id' => $vendedor->id,
                'nombre' => $vendedor->nombre,
                'activo' => '1'
            ]);
        }
    }
}
