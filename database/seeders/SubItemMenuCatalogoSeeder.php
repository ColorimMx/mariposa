<?php

namespace Database\Seeders;


use App\Models\SubItemMenuCatalogo;
use Illuminate\Database\Seeder;

class SubItemMenuCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Proveedores Catálogo',
            'sub_menu_id' =>	'1',
            'route' =>	'impProveedores.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'light',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Grupos Catálogo',
            'sub_menu_id' =>	'2',
            'route' =>	'impGrupos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Subgrupos Catálogo',
            'sub_menu_id' =>	'2',
            'route' =>	'impSubgrupos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Marcas Catálogo',
            'sub_menu_id' =>	'2',
            'route' =>	'impMarcas.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Modelos Catálogo',
            'sub_menu_id' =>	'2',
            'route' =>	'impModelos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Submodelos Catálogo',
            'sub_menu_id' =>	'2',
            'route' =>	'impSubmodelos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Productos Catálogo',
            'sub_menu_id' =>	'2',
            'route' =>	'impProductos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Bancos Catálogo',
            'sub_menu_id' =>	'3',
            'route' =>	'impBancos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'lightblue',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Clientes Catálogo',
            'sub_menu_id' =>	'4',
            'route' =>	'impClientes.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'primary',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Activo Fijo Catálogo',
            'sub_menu_id' =>	'5',
            'route' =>	'impActivoFijo.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'success',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Importar Cuentas Catálogo',
            'sub_menu_id' =>	'6',
            'route' =>	'impCuentas.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'warning',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Areas Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'areas.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Departamentos Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'departamentos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Puesto Tipos Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'puestosTipo.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Puestos Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'puestos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Estado Civil Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'estadoCivil.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Nivel Estudios Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'nivelEstudios.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Contrato Tipos Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'contratosTipo.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Personal Tipos Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'personalTipo.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Jordana Tipos Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'jornadasTipo.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Nomina Tipos Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'nominasTipos.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Localidades Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'localidades.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Estatus Estudios Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'estatusEstudios.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Empleados Catálogo',
            'sub_menu_id' =>	'7',
            'route' =>	'empleados.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Regimen Fiscal Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'regimenFiscalSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'País Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'paisesSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Estado Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'estadosSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Municipio Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'municipiosSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Localidad Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'localidadesSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Impuesto Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'impuestosSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Comprobante Tipo Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'comprobantesSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Relación Tipo Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'relacionSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Uso CFDI Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'usosCfdiSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Método Pago Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'metodosPagoSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Forma Pago Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'formasPagoSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Unidad Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'unidadesSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Producto / Servicio Catálogo',
            'sub_menu_id' =>	'8',
            'route' =>	'productosSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Unidad Aduana Catálogo',
            'sub_menu_id' =>	'9',
            'route' =>	'unidadesAduanaSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Fracción Arancelaria Catálogo',
            'sub_menu_id' =>	'9',
            'route' =>	'fraccionesSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Incoterm Catálogo',
            'sub_menu_id' =>	'9',
            'route' =>	'incotermSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Operación Tipo Catálogo',
            'sub_menu_id' =>	'9',
            'route' =>	'operacionesSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Pedimento Catálogo',
            'sub_menu_id' =>	'9',
            'route' =>	'pedimentosSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Permiso Tipo Catálogo',
            'sub_menu_id' =>	'10',
            'route' =>	'permisosSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Configuración Vehicular Catálogo',
            'sub_menu_id' =>	'10',
            'route' =>	'configVehicularSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Remolque Subtipo Catálogo',
            'sub_menu_id' =>	'10',
            'route' =>	'remolqueSat.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Sellado',
            'sub_menu_id' =>	'11',
            'route' =>	'selladoSifei',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Timbrado',
            'sub_menu_id' =>	'11',
            'route' =>	'timbradoSifei',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Menu Principal',
            'sub_menu_id' =>	'12',
            'route' =>	'menuPrincipal.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Submenu',
            'sub_menu_id' =>	'12',
            'route' =>	'subMenu.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Items Submenu',
            'sub_menu_id' =>	'12',
            'route' =>	'itemSubmenu.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Empresa Catálogo',
            'sub_menu_id' =>	'13',
            'route' =>	'empresas.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Sucursal Catálogo',
            'sub_menu_id' =>	'13',
            'route' =>	'sucursales.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Almacén Catálogo',
            'sub_menu_id' =>	'13',
            'route' =>	'almacenes.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Moneda Catálogo',
            'sub_menu_id' =>	'14',
            'route' =>	'monedas.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'País Demografía Catálogo',
            'sub_menu_id' =>	'14',
            'route' =>	'paises.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Estado Demografía Catálogo',
            'sub_menu_id' =>	'14',
            'route' =>	'estados.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Ciudad Demografía Catálogo',
            'sub_menu_id' =>	'14',
            'route' =>	'ciudades.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Permisos Autotransporte',
            'sub_menu_id' =>	'15',
            'route' =>	'permisoAutotrasnporte.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Polizas De Seguros Autotransporte',
            'sub_menu_id' =>	'15',
            'route' =>	'seguroAutotrasnporte.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Flotilla Autotransporte',
            'sub_menu_id' =>	'15',
            'route' =>	'autotrasnporte.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'descripcion' =>	'Traslados',
            'sub_menu_id' =>	'16',
            'route' =>	'traslados.index',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);
    }
}
