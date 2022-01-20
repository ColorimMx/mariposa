<?php

namespace Database\Seeders;

use App\Models\SubMenuCatalogo;
use Illuminate\Database\Seeder;

class SubMenuCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Proveedores MBA3',
            'menu_id' =>	'1',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'light',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Productos MBA3',
            'menu_id' =>	'2',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'indigo',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Bancos MBA3',
            'menu_id' =>	'3',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'lightblue',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Clientes MBA3',
            'menu_id' =>	'4',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'primary',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Activo Fijo MBA3',
            'menu_id' =>	'5',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'success',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Cuentas MBA3',
            'menu_id' =>	'6',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'warning',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Empleados',
            'menu_id' =>	'7',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'orange',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos CFDI',
            'menu_id' =>	'8',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'pink',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Comercio Exterior',
            'menu_id' =>	'8',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'pink',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Carta Porte',
            'menu_id' =>	'8',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'pink',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'SIFEI',
            'menu_id' =>	'8',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'pink',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Menus',
            'menu_id' =>	'9',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'danger',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Empresas',
            'menu_id' =>	'9',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'danger',
            'classes' => '',
            'activo' => '1']);

        SubMenuCatalogo::create([
            'descripcion' => 	'Datos Generales',
            'menu_id' =>	'9',
            'icon' =>	'fas fa-angle-right',
            'icon_color' => 	'danger',
            'classes' => '',
            'activo' => '1']);
    }

}
