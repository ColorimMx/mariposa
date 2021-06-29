<?php

namespace Database\Seeders;

use App\Models\EmpresaCatalogo;
use Illuminate\Database\Seeder;

class EmpresaCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpresaCatalogo::create([
            'id' => 'CIMSA',
            'nombre' => 'Colorantes Importados SA de CV',
            'RFC' => 'CIM581206CI9'
        ]);

        EmpresaCatalogo::create([
            'id' => 'IARSA',
            'nombre' => 'Industrias Arcoiris SA de CV',
            'RFC' => 'IAR990924GI4'
        ]);
    }
}
