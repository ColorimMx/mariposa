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
            'pais_sat_id' => 'MEX',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'MEX',
            'nombre' => 	'MEXICO',
            'pais_sat_id' => 'MEX',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'CR',
            'nombre' => 	'COSTA RICA',
            'pais_sat_id' => 'CRI',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'ESP',
            'nombre' => 	'ESPANA',
            'pais_sat_id' => 'ESP',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'BOL',
            'nombre' => 	'BOLIVIA',
            'pais_sat_id' => 'BOL',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'NIC',
            'nombre' => 	'NICARAGUA',
            'pais_sat_id' => 'NIC',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'PAN',
            'nombre' => 	'PANAMA',
            'pais_sat_id' => 'PAN',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'USA',
            'nombre' => 	'ESTADOS UNIDOS DE NORTEAMERICA',
            'pais_sat_id' => 'USA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'GUA',
            'nombre' => 	'GUATEMALA',
            'pais_sat_id' => 'GTM',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'BRA',
            'nombre' => 	'BRASIL',
            'pais_sat_id' => 'BRA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'CHN',
            'nombre' => 	'CHINA',
            'pais_sat_id' => 'CHN',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'ALE',
            'nombre' => 	'ALEMANIA',
            'pais_sat_id' => 'DEU',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'IND',
            'nombre' => 	'INDIA',
            'pais_sat_id' => 'IND',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'ITA',
            'nombre' => 	'ITALIA',
            'pais_sat_id' => 'ITA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'COL',
            'nombre' => 	'COLOMBIA',
            'pais_sat_id' => 'COL',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'FRA',
            'nombre' => 	'FRANCIA',
            'pais_sat_id' => 'FRA',
            'activo' => '1'
        ]);
        DemografiaPaisCatalogo::create([
            'id' => 	'URU',
            'nombre' => 	'URUGUAY',
            'pais_sat_id' => 'URY',
            'activo' => '1'
        ]);
    }
}
