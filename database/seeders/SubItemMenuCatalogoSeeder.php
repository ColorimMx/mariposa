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
            'id' => 	'1.1.1',
            'descripcion' =>	'Importar Proveedores Catálogo',
            'sub_menu_id' =>	'1.1',
            'route' =>	'impProveedores',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'light',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'2.1.1',
            'descripcion' =>	'Importar Grupos Catálogo',
            'sub_menu_id' =>	'2.1',
            'route' =>	'impGrupos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'2.1.2',
            'descripcion' =>	'Importar Subgrupos Catálogo',
            'sub_menu_id' =>	'2.1',
            'route' =>	'impSubgrupos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'2.1.3',
            'descripcion' =>	'Importar Marcas Catálogo',
            'sub_menu_id' =>	'2.1',
            'route' =>	'impMarcas',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'2.1.4',
            'descripcion' =>	'Importar Modelos Catálogo',
            'sub_menu_id' =>	'2.1',
            'route' =>	'impModelos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'2.1.5',
            'descripcion' =>	'Importar Submodelos Catálogo',
            'sub_menu_id' =>	'2.1',
            'route' =>	'impSubmodelos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'2.1.6',
            'descripcion' =>	'Importar Productos Catálogo',
            'sub_menu_id' =>	'2.1',
            'route' =>	'impProductos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'indigo',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'3.1.1',
            'descripcion' =>	'Importar Bancos Catálogo',
            'sub_menu_id' =>	'3.1',
            'route' =>	'impBancos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'lightblue',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'4.1.1',
            'descripcion' =>	'Importar Clientes Catálogo',
            'sub_menu_id' =>	'4.1',
            'route' =>	'impClientes',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'primary',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'5.1.1',
            'descripcion' =>	'Importar Activo Fijo Catálogo',
            'sub_menu_id' =>	'5.1',
            'route' =>	'impActivoFijo',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'success',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'6.1.1',
            'descripcion' =>	'Importar Cuentas Catálogo',
            'sub_menu_id' =>	'6.1',
            'route' =>	'impCuentas',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'warning',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.1',
            'descripcion' =>	'Areas Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'areas',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.2',
            'descripcion' =>	'Departamentos Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'departamentos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.3',
            'descripcion' =>	'Puesto Tipos Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'puestosTipo',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.4',
            'descripcion' =>	'Puestos Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'puestos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.5',
            'descripcion' =>	'Estado Civil Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'estadoCivil',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.6',
            'descripcion' =>	'Nivel Estudios Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'nivelEstudios',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.7',
            'descripcion' =>	'Contrato Tipos Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'contratosTipo',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.8',
            'descripcion' =>	'Personal Tipos Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'personalTipo',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.9',
            'descripcion' =>	'Jordana Tipos Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'jornadasTipo',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.10',
            'descripcion' =>	'Nomina Tipos Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'nominasTipos',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.11',
            'descripcion' =>	'Localidades Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'localidades',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.12',
            'descripcion' =>	'Estatus Estudios Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'estatusEstudios',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'7.1.13',
            'descripcion' =>	'Empleados Catálogo',
            'sub_menu_id' =>	'7.1',
            'route' =>	'empleados',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'orange',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.1',
            'descripcion' =>	'Regimen Fiscal Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'regimenFiscalSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.2',
            'descripcion' =>	'País Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'paisesSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.3',
            'descripcion' =>	'Estado Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'estadosSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.4',
            'descripcion' =>	'Municipio Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'municipiosSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.5',
            'descripcion' =>	'Localidad Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'localidadesSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.6',
            'descripcion' =>	'Impuesto Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'impuestosSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.7',
            'descripcion' =>	'Comprobante Tipo Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'comprobantesSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.8',
            'descripcion' =>	'Relación Tipo Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'relacionSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.9',
            'descripcion' =>	'Uso CFDI Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'usosCfdiSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.10',
            'descripcion' =>	'Método Pago Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'metodosPagoSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.11',
            'descripcion' =>	'Forma Pago Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'formasPagoSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.12',
            'descripcion' =>	'Unidad Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'unidadesSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.1.13',
            'descripcion' =>	'Producto / Servicio Catálogo',
            'sub_menu_id' =>	'8.1',
            'route' =>	'productosSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.2.1',
            'descripcion' =>	'Unidad Aduana Catálogo',
            'sub_menu_id' =>	'8.2',
            'route' =>	'unidadesAduanaSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.2.2',
            'descripcion' =>	'Fracción Arancelaria Catálogo',
            'sub_menu_id' =>	'8.2',
            'route' =>	'fraccionesSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.2.3',
            'descripcion' =>	'Incoterm Catálogo',
            'sub_menu_id' =>	'8.2',
            'route' =>	'incotermSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.2.4',
            'descripcion' =>	'Operación Tipo Catálogo',
            'sub_menu_id' =>	'8.2',
            'route' =>	'operacionesSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.2.5',
            'descripcion' =>	'Pedimento Catálogo',
            'sub_menu_id' =>	'8.2',
            'route' =>	'pedimentosSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.3.1',
            'descripcion' =>	'Permiso Tipo Catálogo',
            'sub_menu_id' =>	'8.3',
            'route' =>	'permisosSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.3.2',
            'descripcion' =>	'Configuración Vehicular Catálogo',
            'sub_menu_id' =>	'8.3',
            'route' =>	'configVehicularSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.3.3',
            'descripcion' =>	'Remolque Subtipo Catálogo',
            'sub_menu_id' =>	'8.3',
            'route' =>	'remolqueSat',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.4.1',
            'descripcion' =>	'Sellado',
            'sub_menu_id' =>	'8.4',
            'route' =>	'selladoSifei',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'8.4.2',
            'descripcion' =>	'Timbrado',
            'sub_menu_id' =>	'8.4',
            'route' =>	'timbradoSifei',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'pink',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.1.1',
            'descripcion' =>	'Menu Principal',
            'sub_menu_id' =>	'9.1',
            'route' =>	'menuPrincipal',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.1.2',
            'descripcion' =>	'Submenu',
            'sub_menu_id' =>	'9.1',
            'route' =>	'subMenu',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.1.3',
            'descripcion' =>	'Items Submenu',
            'sub_menu_id' =>	'9.1',
            'route' =>	'itemSubmenu',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.2.1',
            'descripcion' =>	'Empresa Catálogo',
            'sub_menu_id' =>	'9.2',
            'route' =>	'empresas',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.2.2',
            'descripcion' =>	'Sucursal Catálogo',
            'sub_menu_id' =>	'9.2',
            'route' =>	'sucursales',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.2.3',
            'descripcion' =>	'Almacén Catálogo',
            'sub_menu_id' =>	'9.2',
            'route' =>	'almacenes',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.3.1',
            'descripcion' =>	'Moneda Catálogo',
            'sub_menu_id' =>	'9.3',
            'route' =>	'monedas',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.3.2',
            'descripcion' =>	'País Demografía Catálogo',
            'sub_menu_id' =>	'9.3',
            'route' =>	'paises',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.3.3',
            'descripcion' =>	'Estado Demografía Catálogo',
            'sub_menu_id' =>	'9.3',
            'route' =>	'estados',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);

        SubItemMenuCatalogo::create([
            'id' => 	'9.3.4',
            'descripcion' =>	'Ciudad Demografía Catálogo',
            'sub_menu_id' =>	'9.3',
            'route' =>	'ciudades',
            'icon' =>	'fas fa-angle-double-right',
            'icon_color' =>	'danger',
            'classes' => '',
            'activo' => '1'
        ]);
    }
}
