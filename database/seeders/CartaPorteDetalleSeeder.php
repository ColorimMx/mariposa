<?php

namespace Database\Seeders;

use App\Models\Mba3CartaPorteDetalle;
use App\Models\CartaPorteDetalle;
use Illuminate\Database\Seeder;

class CartaPorteDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbacartaportedetalle = new Mba3CartaPorteDetalle();
        $cartaportedetalles = $mbacartaportedetalle->get_cartaportedetalle();

        foreach($cartaportedetalles as $cartaportedetalle){
            CartaPorteDetalle::create([
                'cartaporte_id' => '1',
                'producto_id' => $cartaportedetalle->producto_id,
                'cantidad' => $cartaportedetalle->cantidad,
                'um' => $cartaportedetalle->um
            ]);
        }
    }
}
