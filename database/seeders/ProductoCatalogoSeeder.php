<?php

namespace Database\Seeders;

use App\Models\Mba3ProductoCatalogo;
use App\Models\ProductoCatalogo;
use Illuminate\Database\Seeder;

class ProductoCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mbaproductos = new Mba3ProductoCatalogo();
        $productos = $mbaproductos->get_productos();

        foreach ($productos as $producto){
            ProductoCatalogo::create([
                'id' => $producto->id,
                'nombre' => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'codigo_barras' => $producto->codigo_barras,
                //'grupo_id' => $producto->grupo_id,
                //'subgrupo_id' => $producto->subgrupo_id,
                //'marca_id' => $producto->marca_id,
                //'modelo_id' => $producto->modelo_id,
                //'submodelo_id' => $producto->submodelo_id,
                'existencias' => floatval($producto->existencias),
                'disponible' => floatval($producto->disponible),
                'asignado' => floatval($producto->asignado),
                'precio_minimo' => $producto->precio_minimo,
                'um' => $producto->UM,
                'peso_neto' => $producto->peso_neto,
                'peso_bruto' => $producto->peso_bruto,
                'largo' => $producto->largo,
                'ancho' => $producto->ancho,
                'altura' => $producto->altura,
                'costo_promedio' => $producto->costo_promedio,
                'costo_ultima_produccion' => $producto->costo_ultima_produccion,
                'total_costo_inventario' => $producto->total_costo_inventario,
                'fecha_ultimo_costo_promedio' =>  \Carbon\Carbon::parse($producto->fecha_ultimo_costo_promedio)->format('Y-m-d\TH:i:s.v'),
                'fecha_ultima_produccion' => \Carbon\Carbon::parse($producto->fecha_ultima_produccion)->format('Y-m-d\TH:i:s.v'),
                //'cuenta_inventario_id' => $producto->cuenta_inventario_id,
                'cuenta_costo_id' => $producto->cuenta_costo_id,
                'cuenta_ingreso_nacional_id' => $producto->cuenta_ingreso_nacional_id,
                'cuenta_ingreso_extrangero_id' => $producto->cuenta_ingreso_extrangero_id,
                'sat_producto_servicio_id' => $producto->sat_producto_servicio_id,
                //'sat_fraccion_arancelaria_id' => $producto->sat_fraccion_arancelaria,
                'tipo_producto' => $producto->tipo_producto,
                'activo' => '1'
            ]);
        }
    }
}
