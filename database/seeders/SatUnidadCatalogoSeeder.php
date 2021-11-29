<?php

namespace Database\Seeders;

use App\Models\SatUnidadCatalogo;
use Illuminate\Database\Seeder;

class SatUnidadCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SatUnidadCatalogo::create([
            'id' => 'ACT',
            'nombre' => 'Actividad',
            'activo' => '1']);
        SatUnidadCatalogo::create([
            'id' => 'KGM',
            'nombre' => 'Kilogramo',
            'activo' => '1']);
        SatUnidadCatalogo::create([
            'id' => 'LTR',
            'nombre' => 'Litro',
            'activo' => '1']);
        SatUnidadCatalogo::create([
            'id' => 'MTR',
            'nombre' => 'Metro',
            'activo' => '1']);
        SatUnidadCatalogo::create([
            'id' => 'H87',
            'nombre' => 'Pieza',
            'activo' => '1']);
        SatUnidadCatalogo::create([
            'id' => 'E48',
            'nombre' => 'Unidad de servicio',
            'activo' => '1']);
    }
}
