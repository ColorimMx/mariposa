<?php

namespace Database\Seeders;

use App\Models\Mba3CartaPortePrincipal;
Use App\Models\CartaPortePrincipal;
use Illuminate\Database\Seeder;

class CartaPortePrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbacartaporte = new Mba3CartaPortePrincipal();
        $cartaporte = $mbacartaporte->get_cartaporte();

        foreach ($cartaporte as $carta){
            CartaPortePrincipal::create([
                'id' => $carta->id,
               'trasnferencia_empresa_id' => $carta->trasnferencia_empresa_id,
                'fecha' => \Carbon\Carbon::parse($carta->fecha)->format('Y-m-d\TH:i:s.v'),
                'moneda_id' => $carta->moneda_id,
                'almacen_id' => $carta->bodega_id,
                'destino_almacen_id' => $carta->destino_bodega_id
            ]);
        }
    }
}
