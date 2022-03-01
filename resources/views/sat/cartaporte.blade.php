<div class="container">
    <div class="table-responsive-lg">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Transferencía</th>
                <th scope="col">Fecha</th>
                <th scope="col">Moneda</th>
                <th scope="col">Origén</th>
                <th scope="col">Destino</th>
                <th scope="col">SKU</th>
                <th scope="col">SAT Producto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">UM</th>
            </tr>
            </thead>
            @foreach($cartas as $carta)
                <tbody>
                <tr>
                    <td>{{$carta->id}}</td>
                    <td>{{$carta->trasnferencia_empresa_id}}</td>
                    <td>{{$carta->fecha}}</td>
                    <td>{{$carta->moneda_id}}/{{$carta->moneda->nombre}}</td>
                    <td>{{$carta->almacen_id}}/{{$carta->origen->nombre}}</td>
                    <td>{{$carta->destino_almacen_id}}/{{$carta->destino->nombre}}</td>
                    <td>{{$carta->cartadetalles->producto_id}}</td>
                    <td>{{$carta->cartadetalles->producto->sat_producto_servicio_id}}/{{$carta->cartadetalles->producto->satproducto->nombre}}</td>
                    <td>{{$carta->cartadetalles->producto->descripcion}}</td>
                    <td>{{$carta->cartadetalles->producto->descripcion}}</td>
                    <td>{{$carta->cartadetalles->cantidad}}</td>
                    <td>{{$carta->cartadetalles->um}}/{{$carta->cartadetalles->unidad->nombre}}/{{$carta->cartadetalles->unidad->satum->id}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
