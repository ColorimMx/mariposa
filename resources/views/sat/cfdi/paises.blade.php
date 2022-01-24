@extends('adminlte::page')

@section('title', 'País SAT')

@section('content_header')
    <h1>
        Datos Catálogo País SAT.
    </h1>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-create-pais">
        Crear
    </button>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de categorías</h3>
                    </div>
                    <div class="card-body">
                        <table id="tablePaises" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Satpaises as $Satpais)
                                <tr>
                                    <td>{{$Satpais->id}}</td>
                                    <td>{{$Satpais->nombre}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="modal-create-pais">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear País</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form role="form">
                        <div class="form-group">
                            <label for="inputID">ID</label>
                            <input type="text" class="form-control" id="inputID" placeholder="Ingrese el ID"/>
                        </div>
                        <div class="form-group">
                            <label for="inputNombre">Email</label>
                            <input type="text" class="form-control" id="inputNombre" placeholder="Ingrese el Nombre"/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-outline-success submitBtn" onclick="submitPaisForm()">Guardar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
@stop
@section('js')

    <script>

        function submitPaisForm(){
            var id = $('#inputID').val();
            var nombre = $('#inputNombre').val();
            var token = '{{csrf_token()}}';
            var data={id:id,nombre:nombre,_token:token};
            if(id.trim() == '' ){
                alert('Por Favor Ingrese El "ID".');
                $('#inputID').focus();
                return false;
            }else if(nombre.trim() == '' ){
                alert('Por Favor Ingrese El "Nombre".');
                $('#inputNombre').focus();
                return false;
            }else{
                $.ajax({
                    type:'POST',
                    url:"{{route('paisesSat.store')}}",
                    data: data,
                    beforeSend: function () {
                        $('.submitBtn').attr("disabled","disabled");
                        $('.modal-body').css('opacity', '.5');
                    },
                    success:function(msg){
                        if(msg == 'ok'){
                            $('#inputID').val('');
                            $('#inputNombre').val('');
                            $('.statusMsg').html('<span style="color:green;">Los Datos Se Registraron Correctamente.</p>');
                        }else{
                            $('.statusMsg').html('<span style="color:red;">Ocurrió algún problema, inténtalo de nuevo.</span>');
                        }
                        $('.submitBtn').removeAttr("disabled");
                        $('.modal-body').css('opacity', '');
                    }
                });
            }
        }
    </script>
@stop

