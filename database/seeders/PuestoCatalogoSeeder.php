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
            'id' => 'ANALI',
            'nombre' =>	'Analista',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'ASCOM',
            'nombre' =>	'Asesor Comercial',

            'activo' => '1'
            ]);
        PuestoCatalogo::create([
            'id' => 'ASIST',
            'nombre' =>	'Asistente',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'AUXIL',
            'nombre' =>	'Auxiliar',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'AYUGR',
            'nombre' =>	'Ayudante General',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'AYURE',
            'nombre' =>	'Ayudante Reparto',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'AYUXA',
            'nombre' =>	'Ayudante General A',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'AYUXB',
            'nombre' =>	'Ayudante General B',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'AYUXC',
            'nombre' =>	'Ayudante General C',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'CAPTU',
            'nombre' =>	'Capturista',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'CHOFE',
            'nombre' =>	'Chofer',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'COMGR',
            'nombre' =>	'Community Manager',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'CONTA',
            'nombre' =>	'Contador',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'COORD',
            'nombre' =>	'Coordinador',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'DIREC',
            'nombre' =>	'Director',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'GEREN',
            'nombre' =>	'Gerente',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'JEFEX',
            'nombre' =>	'Jefe',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'OPESA',
            'nombre' =>	'Operador Especial A',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'OPESB',
            'nombre' =>	'Operador Especial B',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'OPESC',
            'nombre' =>	'Operador Especial C',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'OPEXA',
            'nombre' =>	'Operador A',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'OPEXB',
            'nombre' =>	'Operador B',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'OPEXC',
            'nombre' =>	'Operador C',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'PLANE',
            'nombre' =>	'Planeador',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'RECEP',
            'nombre' =>	'Recepcion',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'SUPER',
            'nombre' =>	'Supervisor',
            'activo' => '1'
        ]);
        PuestoCatalogo::create([
            'id' => 'VENDE',
            'nombre' =>	'Vendedor',
            'activo' => '1'
        ]);
    }
}
