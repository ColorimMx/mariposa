<?php

namespace Database\Seeders;

use App\Models\Mba3ContabilidadCuentasCatalogo;
Use App\Models\ContabilidadPlanCuenta;
use Illuminate\Database\Seeder;

class ContabilidadPlanCuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mba3cuentas = new Mba3ContabilidadCuentasCatalogo();
        $cuentas = $mba3cuentas->get_cuentas();

        foreach ($cuentas as $cuenta){
            ContabilidadPlanCuenta::create([
                'id' => $cuenta->id,
                'nombre' => $cuenta->nombre,
                'cuenta_tipo_id' => $cuenta->cuenta_tipo_id,
                'cuenta_de_agrupacion' => $cuenta->cuenta_de_agrupacion,
                'tipo_configuracion' => $cuenta->tipo_configuracion,
                'agrupacion_id' => $cuenta->agrupacion_id,
                'clasificacion_id' => $cuenta->clasificacion_id,
                'activo' => $cuenta->activo

            ]);
        }
    }
}
