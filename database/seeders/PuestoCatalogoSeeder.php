<?php

namespace Database\Seeders;

use App\Models\PuestoCatalogo;
use Illuminate\Database\Seeder;

class PuestoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PuestoCatalogo::create([
            'id' => 	'ANALI',
            'nombre' =>	'Analista',
        ]);
        PuestoCatalogo::create([
                'id' => 	'ASCOM',
                'nombre' =>	'Asesor Comercial',

            ]);
        PuestoCatalogo::create([
            'id' => 	'ASIST',
            'nombre' =>	'Asistente',

        ]);
        PuestoCatalogo::create([
            'id' => 	'AUXIL',
            'nombre' =>	'Auxiliar',

        ]);
        PuestoCatalogo::create([
            'id' => 	'AYUGR',
            'nombre' =>	'Ayudante General',

        ]);
        PuestoCatalogo::create([
            'id' => 	'AYURE',
            'nombre' =>	'Ayudante Reparto',

        ]);
        PuestoCatalogo::create([
            'id' => 	'AYUXA',
            'nombre' =>	'Ayudante General A',

        ]);
        PuestoCatalogo::create([
            'id' => 	'AYUXB',
            'nombre' =>	'Ayudante General B',

        ]);
        PuestoCatalogo::create([
            'id' => 	'AYUXC',
            'nombre' =>	'Ayudante General C',

        ]);
        PuestoCatalogo::create([
            'id' => 	'CAPTU',
            'nombre' =>	'Capturista',

        ]);
        PuestoCatalogo::create([
            'id' => 	'CHOFE',
            'nombre' =>	'Chofer',

        ]);
        PuestoCatalogo::create([
            'id' => 	'COMGR',
            'nombre' =>	'Community Manager',

        ]);
        PuestoCatalogo::create([
            'id' => 	'CONTA',
            'nombre' =>	'Contador',

        ]);
        PuestoCatalogo::create([
            'id' => 	'COORD',
            'nombre' =>	'Coordinador',

        ]);
        PuestoCatalogo::create([
            'id' => 	'DIREC',
            'nombre' =>	'Director',

        ]);
        PuestoCatalogo::create([
            'id' => 	'GEREN',
            'nombre' =>	'Gerente',

        ]);
        PuestoCatalogo::create([
            'id' => 	'JEFEX',
            'nombre' =>	'Jefe',

        ]);
        PuestoCatalogo::create([
            'id' => 	'OPESA',
            'nombre' =>	'Operador Especial A',

        ]);
        PuestoCatalogo::create([
            'id' => 	'OPESB',
            'nombre' =>	'Operador Especial B',

        ]);
        PuestoCatalogo::create([
            'id' => 	'OPESC',
            'nombre' =>	'Operador Especial C',

        ]);
        PuestoCatalogo::create([
            'id' => 	'OPEXA',
            'nombre' =>	'Operador A',

        ]);
        PuestoCatalogo::create([
            'id' => 	'OPEXB',
            'nombre' =>	'Operador B',

        ]);
        PuestoCatalogo::create([
            'id' => 	'OPEXC',
            'nombre' =>	'Operador C',

        ]);
        PuestoCatalogo::create([
            'id' => 	'PLANE',
            'nombre' =>	'Planeador',

        ]);
        PuestoCatalogo::create([
            'id' => 	'RECEP',
            'nombre' =>	'Recepcion',

        ]);
        PuestoCatalogo::create([
            'id' => 	'SUPER',
            'nombre' =>	'Supervisor',

        ]);
        PuestoCatalogo::create([
            'id' => 	'VENDE',
            'nombre' =>	'Vendedor',

        ]);
    }
}
