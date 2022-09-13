<?php

namespace Database\Seeders;


use App\Models\ClienteCatalogo;
use App\Models\SatCartaPorteTipoPermisoCatalogo;
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
        $this->call(MenuCatalogoSeeder::class);
        $this->call(SubMenuCatalogoSeeder::class);
        $this->call(SubItemMenuCatalogoSeeder::class);

        $this->call(MonedaCatalogoSeeder::class);
        $this->call(SatPaisCatalogoSeeder::class);
        $this->call(DemografiaPaisCatalogoSeeder::class);
        $this->call(SatEstadoCatalogoSeeder::class);
        $this->call(DemografiaEstadoCatalogoSeeder::class);
        $this->call(DemografiaCiudadCatalogoSeeder::class);
        $this->call(EmpresaCatalogoSeeder::class);
        $this->call(EmpresaSucursalCatalogoSeeder::class);
        $this->call(EmpresaAlmacenCatalogoSeeder::class);

        $this->call(SatRegimenFiscalCatalogoSeeder::class);

        $this->call(SatMunicipioCatalogoSeeder::class);
        $this->call(SatLocalidadCatalogoSeeder::class);
        $this->call(SatImpuestoCatalogoSeeder::class);
        $this->call(SatTipoComprobanteCatalogoSeeder::class);
        $this->call(SatTipoRelacionCatalogoSeeder::class);
        $this->call(SatUsoCfdiCatalogoSeeder::class);
        $this->call(SatMetodoPagoCatalogoSeeder::class);
        $this->call(SatFormaPagoCatalogoSeeder::class);
        $this->call(SatUnidadCatalogoSeeder::class);
        $this->call(SatTipoFactorCatalogoSeeder::class);
        $this->call(SatProductoServicioCatalogoSeeder::class);
        $this->call(SatComercioExteriorUnidadAduanaCatalogoSeeder::class);
        $this->call(SatComercioExteriorFraccionArancelariaCatalogoSeeder::class);
        $this->call(SatComercioExteriorIncotermCatalogoSeeder::class);
        $this->call(SatComercioExteriorTipoOperacionCatalogoSeeder::class);
        $this->call(SatComercioExteriorPedimentoCatalogoSeeder::class);
        $this->call(SatCartaPorteTipoPermisoCatalogoSeeder::class);
        $this->call(SatCartaPorteConfigVehicularCatalogoSeeder::class);
        $this->call(SatCartaPorteSubTipoRemCatalogoSeeder::class);

        $this->call(ContabilidadPlanCuentaSeeder::class);

        $this->call(PermisoAutotransporteCatalogoSeeder::class);
        $this->call(SeguroAutotransporteCatalogoSeeder::class);
        $this->call(AutotransporteCatalogoSeeder::class);

        $this->call(ClienteGiroCatalogoSeeder::class);
        $this->call(ClienteLocalizacionCatalogoSeeder::class);
        $this->call(ClienteTipoCatalogoSeeder::class);
        $this->call(ClienteVendedorCatalogoSeeder::class);
        $this->call(ClienteZonaCatalogoSeeder::class);
        $this->call(ClienteCatalogoSeeder::class);

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
        $this->call(EstatusEstudioCatalogoSeeder::class);
        $this->call(EmpleadoCatalogoSeeder::class);

        $this->call(GuiaCatalogoSeeder::class);
        $this->call(GuiaSeccionCatalogoSeeder::class);
        $this->call(GuiaCategoriaCatalogoSeeder::class);
        $this->call(GuiaDominioCatalogoSeeder::class);
        $this->call(GuiaDimensionCatalogoSeeder::class);
        $this->call(GuiaItemCatalogoSeeder::class);

        $this->call(UnidadMedidaCatalogoSeeder::class);
        $this->call(ProductoGrupoCatalogoSeeder::class);
        //$this->call(ProductoSubgrupoCatalogoSeeder::class);
        $this->call(ProductoMarcaCatalogoSeeder::class);
        $this->call(ProductoModeloCatalogoSeeder::class);
        $this->call(ProductoSubmodeloCatalogoSeeder::class);
        //$this->call(ProductoCatalogoSeeder::class);

       //$this->call(ClienteFacturaSeeder::class);
        //$this->call(ClienteFacturaDetalleSeeder::class);

        //$this->call(CartaPortePrincipalSeeder::class);
        //$this->call(CartaPorteDetalleSeeder::class);
    }
}
