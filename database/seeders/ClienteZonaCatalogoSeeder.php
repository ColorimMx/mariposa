<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mba3ClienteZonaCatalogo;
use App\Models\ClienteZonaCatalogo;

class ClienteZonaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbazonas = new Mba3ClienteZonaCatalogo();
        $zonas = $mbazonas->get_zonas();

        foreach ($zonas as $zona){
            ClienteZonaCatalogo::create([
                'id' => $zona->id,
                'nombre' => $zona->nombre,
                'activo' => '1'
            ]);
        }
    }
}
