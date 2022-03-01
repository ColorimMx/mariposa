<?php

namespace Database\Seeders;

use App\Models\SatRegimenFiscalCatalogo;
use Illuminate\Database\Seeder;

class SatRegimenFiscalCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatRegimenFiscalCatalogo::create([
            'id' => '601',
            'nombre' => 'General de Ley Personas Morales',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '603',
            'nombre' => 'Personas Morales con Fines no Lucrativos',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '605',
            'nombre' => 'Sueldos y Salarios e Ingresos Asimilados a Salarios',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '606',
            'nombre' => 'Arrendamiento',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '608',
            'nombre' => 'Demás ingresos',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '609',
            'nombre' => 'Consolidación',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '610',
            'nombre' => 'Residentes en el Extranjero sin Establecimiento Permanente en México',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '611',
            'nombre' => 'Ingresos por Dividendos (socios y accionistas)',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '612',
            'nombre' => 'Personas Físicas con Actividades Empresariales y Profesionales',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '614',
            'nombre' => 'Ingresos por intereses',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '616',
            'nombre' => 'Sin obligaciones fiscales',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '620',
            'nombre' => 'Sociedades Cooperativas de Producción que optan por diferir sus ingresos',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '621',
            'nombre' => 'Incorporación Fiscal',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '622',
            'nombre' => 'Actividades Agrícolas,
     Ganaderas,
     Silvícolas y Pesqueras',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '623',
            'nombre' => 'Opcional para Grupos de Sociedades',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '624',
            'nombre' => 'Coordinados',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '628',
            'nombre' => 'Hidrocarburos',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '607',
            'nombre' => 'Régimen de Enajenación o Adquisición de Bienes',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '629',
            'nombre' => 'De los Regímenes Fiscales Preferentes y de las Empresas Multinacionales',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '630',
            'nombre' => 'Enajenación de acciones en bolsa de valores',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '615',
            'nombre' => 'Régimen de los ingresos por obtención de premios',
            'activo' => '1',
        ]);
        SatRegimenFiscalCatalogo::create([
            'id' => '625',
            'nombre' => 'Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas',
            'activo' => '1',
        ]);
    }
}
