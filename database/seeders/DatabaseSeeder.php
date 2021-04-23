<?php

namespace Database\Seeders;

use App\Models\SatEstadoCatalogo;
use App\Models\SatPaisCatalogo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AreaCatalogoSeeder::class);
        $this->call(DepartamentoCatalogoSeeder::class);
        $this->call(PuestoCatalogoSeeder::class);
        $this->call(PuestoTipoCatalogoSeeder::class);
        $this->call(EstadoCivilCatalogoSeeder::class);
        $this->call(NivelEstudioCatalogoSeeder::class);
        $this->call(ContratoTipoCatalogoSeeder::class);
        $this->call(PersonalTipoCatalogoSeeder::class);
        $this->call(JornadaTipoCatalogoSeeder::class);
        $this->call(NominaTipoCatalogoSeeder::class);
        $this->call(LocalidadCatalogoSeeder::class);
        $this->call(EmpresaCatalogoSeeder::class);
        $this->call(EstatusEstudioCatalogoSeeder::class);
        $this->call(SatPaisCatalogoSeeder::class);
        $this->call(SatEstadoCatalogoSeeder::class);
        $this->call(SatMunicipioCatalogoSeeder::class);
        $this->call(SatLocalidadCatalogoSeeder::class);
        $this->call(EmpleadoCatalogoSeeder::class);
    }
}
