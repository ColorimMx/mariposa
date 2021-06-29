<div class="container">
    <div class="table-responsive-lg">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
            </tr>
            </thead>
            @foreach($areas as $area)
                <tbody>
                <tr>
                    <td>{{$area->id}}</td>
                    <td>{{$area->nombre}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
