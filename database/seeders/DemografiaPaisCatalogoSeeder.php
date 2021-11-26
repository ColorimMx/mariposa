<?php

namespace Database\Seeders;
use App\Models\DemografiaPaisCatalogo;
use Illuminate\Database\Seeder;

class DemografiaPaisCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DemografiaPaisCatalogo::create([
            'id' => 	'MX',
            'nombre' => 	'México',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'MEX',
            'nombre' => 	'MEXICO',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'CR',
            'nombre' => 	'COSTA RICA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'ESP',
            'nombre' => 	'ESPANA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'BOL',
            'nombre' => 	'BOLIVIA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'NIC',
            'nombre' => 	'NICARAGUA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'PAN',
            'nombre' => 	'PANAMA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'USA',
            'nombre' => 	'ESTADOS UNIDOS DE NORTEAMERICA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'GUA',
            'nombre' => 	'GUATEMALA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'BRA',
            'nombre' => 	'BRASIL',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'CHN',
            'nombre' => 	'CHINA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'ALE',
            'nombre' => 	'ALEMANIA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'IND',
            'nombre' => 	'INDIA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'ITA',
            'nombre' => 	'ITALIA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'COL',
            'nombre' => 	'COLOMBIA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'FRA',
            'nombre' => 	'FRANCIA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'URU',
            'nombre' => 	'URUGUAY',
            'activo' => '1'
        ]);
    }
}
