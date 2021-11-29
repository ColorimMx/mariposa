<?php

namespace Database\Seeders;

use App\Models\SatUsoCfdiCatalogo;
use Illuminate\Database\Seeder;

class SatUsoCfdiCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatUsoCfdiCatalogo::create([
            'id' => 'G01',
            'nombre' => 'Adquisición de mercancias',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'G02',
            'nombre' => 'Devoluciones,
     descuentos o bonificaciones',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'G03',
            'nombre' => 'Gastos en general',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'I01',
            'nombre' => 'Construcciones',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'I02',
            'nombre' => 'Mobilario y equipo de oficina por inversiones',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'I03',
            'nombre' => 'Equipo de transporte',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'I04',
            'nombre' => 'Equipo de computo y accesorios',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'I05',
            'nombre' => 'Dados,
     troqueles,
     moldes,
     matrices y herramental',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'I06',
            'nombre' => 'Comunicaciones telefónicas',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'I07',
            'nombre' => 'Comunicaciones satelitales',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'I08',
            'nombre' => 'Otra maquinaria y equipo',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D01',
            'nombre' => 'Honorarios médicos,
     dentales y gastos hospitalarios.',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D02',
            'nombre' => 'Gastos médicos por incapacidad o discapacidad',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D03',
            'nombre' => 'Gastos funerales.',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D04',
            'nombre' => 'Donativos.',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D05',
            'nombre' => 'Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación).',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D06',
            'nombre' => 'Aportaciones voluntarias al SAR.',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D07',
            'nombre' => 'Primas por seguros de gastos médicos.',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D08',
            'nombre' => 'Gastos de transportación escolar obligatoria.',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D09',
            'nombre' => 'Depósitos en cuentas para el ahorro,
     primas que tengan como base planes de pensiones.',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'D10',
            'nombre' => 'Pagos por servicios educativos (colegiaturas)',
            'activo' => '1',
        ]);
        SatUsoCfdiCatalogo::create([
            'id' => 'P01',
            'nombre' => 'Por definir',
            'activo' => '1',
        ]);

    }
}
