<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mba3ClienteGiroCatalogo;
use App\Models\ClienteGiroCatalogo;

class ClienteGiroCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbagiros = new Mba3ClienteGiroCatalogo();
        $giros = $mbagiros->get_giro();

        foreach ($giros as $giro) {
            ClienteGiroCatalogo::create([
                'id' => $giro->id,
                'nombre' => $giro->nombre,
                'activo' => '1'
            ]);
        }
    }
}
