@extends('adminlte::page')
@section('title', 'puestos')
@section('content_header')
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 table-responsive" >
                <div class="card">
                    <div class="card-header">
                        <img class="img-fluid rounded mx-auto d-block" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/LogoCimsa.png'))) }}" style="width:30%;" alt="logo">
                        <h3 class="titulo-tabla">Puestos Colorantes Importados.</h3>
                    </div>
                    <div class="card-body">
                        <table id="data-table" class="table table-sm" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade show" id="modal-container">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title" id="title-form"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form action="javascript:void(0)" id="modal-form" name="modal-form"  method="post">
                        @csrf
                        <div class="form-group">
                            <label for="inputID">ID</label>
                            <input type="text" class="form-control" id="id" placeholder="Ingrese El ID"/>
                        </div>
                        <div class="form-group">
                            <label for="inputNombre">Puesto</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese El Nombre Para El Puesto"/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-light" id="btn-save" value="addNewBook" >Guardar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop
@section('css')

@stop

@section('js')
    <script>
        var idioma=
            {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copyTitle": 'Informacion copiada',
                    "copyKeys": 'Use your keyboard or menu to select the copy command',
                    "copySuccess": {
                        "_": '%d filas copiadas al portapapeles',
                        "1": '1 fila copiada al portapapeles'
                    },

                    "pageLength": {
                        "_": "Mostrar %d filas",
                        "-1": "Mostrar Todo"
                    }
                }
            };
        $(document).ready(function() {
            var titulo = 'Puestos Colorantes Importados';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('#data-table').DataTable( {
                "ajax": "{{route('datatable.PuestoCatalogoController')}}",
                "columns":[
                    {data : 'DT_RowIndex'},
                    {data : 'id'},
                    {data : 'nombre'},
                    {
                        'data': null,
                        orderable: false,
                        'render': function (data, type, row) {
                            return '<button data-id="' + row.id +'"   class="editButton btn-sm btn-primary dt-center "><i class="fa fa-pencil"/></button>'
                        }
                    },
                    {
                        'data': null,
                        orderable: false,
                        'render': function (data, type, row) {
                            return '<button id="' + row.id + '" class="deleteButton btn-sm btn-danger" ><i class="fa fa-trash"/></button>'
                        }
                    }
                ],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "responsive": false,
                "autoWidth": false,
                "language": idioma,
                "lengthMenu": [[50,100,500, -1],[50,100,500,"Mostrar Todo"]],
                dom: 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',
                buttons: {
                    dom: {
                        container:{
                            tag:'div',
                            className:'flexcontent'
                        },
                        buttonLiner: {
                            tag: null
                        }
                    },
                    buttons: [
                        {
                            text:      '<i class="far fa-plus-square"></i>Nuevo',
                            className: 'btn btn-sm nuevo',
                            titleAttr: 'Nuevo',
                            attr:  {
                                "data-toggle": "modal",
                                "data-target": "#modal-container"
                            },
                            action: function () {
                                $('#modal-form').trigger("reset");
                                $('#title-form').html("Crear Registro " +titulo);
                                $("#btn-save"). attr("id", "btn-save");
                                $('#id').attr("disabled", false);
                                $(window).on('load', function()
                                {
                                    $('#modal-container').modal('show');
                                });
                            }
                        },
                        {
                            extend:    'copyHtml5',
                            text:      '<i class="fa fa-clipboard"></i>Copiar',
                            title:titulo,
                            titleAttr: 'Copiar',
                            className: 'btn btn-sm export barras',
                            exportOptions: {
                                columns: [ 0, 1, 2 ]
                            }
                        },
                        {
                            extend:    'pdfHtml5',
                            text:      '<i class="fa fa-file-pdf-o"></i>PDF',
                            title:titulo,
                            titleAttr: 'PDF',
                            className: 'btn btn-sm pdf',
                            exportOptions: {
                                columns: [ 0, 1, 2 ]
                            },
                            customize:function(doc) {

                                doc.styles.title = {
                                    color: '#4c8aa0',
                                    fontSize: '30',
                                    alignment: 'center'


                                }
                                doc.styles['td:nth-child(2)'] = {
                                    width: '100px',
                                    'max-width': '100px'
                                },
                                    doc.styles.tableHeader = {
                                        fillColor:'#4c8aa0',
                                        color:'white',
                                        alignment:'center'

                                    },
                                    doc.content.splice( 0, 0, {
                                        margin: [ 0, 0, 0, 0 ],
                                        alignment: 'center',
                                        image: 'data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/bannerColorim.png'))) }}'
                                    } );
                                doc.content[1].margin = [ 100, 0, 100, 0 ]
                            }
                        },
                        {
                            extend:    'excelHtml5',
                            text:      '<i class="fa fa-file-excel-o"></i>Excel',
                            title:titulo,
                            titleAttr: 'Excel',
                            className: 'btn btn-sm export excel',
                            exportOptions: {
                                columns: [ 0, 1, 2 ]
                            },
                        },
                        {
                            extend:    'csvHtml5',
                            text:      '<i class="fa fa-file-text-o"></i>CSV',
                            title:titulo,
                            titleAttr: 'CSV',
                            className: 'btn btn-sm export csv',
                            exportOptions: {
                                columns: [ 0, 1, 2 ]
                            }
                        },
                        {
                            extend:    'print',
                            text:      '<i class="fa fa-print"></i>Imprimir',
                            title:titulo,
                            titleAttr: 'Imprimir',
                            className: 'btn btn-sm export imprimir',
                            exportOptions: {
                                columns: [ 0, 1, 2 ]
                            }
                        },
                        {
                            extend:    'pageLength',
                            titleAttr: 'Registros a mostrar',
                            className: 'selectTable'
                        }
                    ]
                }
            });

            $('body').on('click', 'button.editButton', function () {
                var id = $(this).data('id');
                var nombre = $(this).data('nombre');
                $.get("{{ route('puestos.index') }}" +'/' + id +'/edit', function (data) {
                    $('#modal-container').modal('show');
                    $("#btn-save"). attr("id", "btn-edit");
                    $('#title-form').html("Editando ID: "+id+ " "+titulo);
                    $('#id').val(data.id);
                    $('#nombre').val(data.nombre);
                    $('#id').attr("disabled", true);
                })
            });
            $('#data-table').on('click', 'button.deleteButton', function () {
                var id = $(this).attr('id');
                Swal.fire({
                    title: 'Eliminar ID: ' + id+ ' '+titulo,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#239B56',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Confirmar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            data: {
                                _method: 'DELETE'
                            },
                            url: "{{ url('puestos')}}" + '/' + id,
                            success:function(res){
                                if(res.status=='error'){
                                    Swal.fire({
                                        title: 'Ocurrió algún problema!',
                                        text: 'Por Favor, inténtalo de nuevo.',
                                        icon: 'error',
                                        confirmButtonText: 'Ok'
                                    });
                                }else{
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'El ID: '+id+' Se Elimino Correctamente.',
                                        showConfirmButton: true,
                                        timer: 3000,
                                        didOpen: () => {
                                            timerInterval = setInterval(() => {
                                                Swal.getHtmlContainer().querySelector('strong')
                                                    .textContent = (Swal.getTimerLeft() / 1000)
                                                    .toFixed(0)
                                            }, 100)
                                        },
                                        willClose: () => {
                                            window.location.reload();
                                            clearInterval(timerInterval)
                                        }
                                    })
                                }
                            }
                        });
                    }
                })
            });

            function validateRow(){
                var id = $("#id").val();
                var bool = false;
                $.ajax({
                    url: "puestos/" + id,
                    type: 'GET',
                    async:false,
                    dataType: 'json',
                    data:{
                        id:id
                    },
                    success: function (data){
                        if(data.status == '200'){
                            bool = true;
                        }else if (data.status == '400'){
                            bool = false;
                        }
                    },
                });
                return  bool;
            }

            $('body').on('click', '#btn-edit', function () {
                var id = $("#id").val();
                var nombre = $("#nombre").val();
                var activo = 1;

                if(id.trim() == '' )
                {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Por Favor Ingrese El "ID".',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                    $('#inputID').focus();
                    return false;
                }else if(nombre.trim() == '' ){
                    Swal.fire({
                        title: 'Error!',
                        text: 'Por Favor Ingrese El "Nombre para el Puesto".',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                    $('#inputNombre').focus();
                    return false;
                }else{
                    //ajax
                    $.ajax({
                        type:"POST",
                        url: "{{route('puestos.index')}}",
                        data: {
                            id:id,
                            nombre:nombre,
                            activo:activo,
                        },
                        dataType: 'json',
                        success:function(res){
                            if(res.status=='error'){
                                Swal.fire({
                                    title: 'Ocurrió algún problema!',
                                    text: 'Por Favor, inténtalo de nuevo.',
                                    icon: 'error',
                                    confirmButtonText: 'Ok'
                                });
                            }else{
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Datos Actualizados ID: ' +id+ ' ' +titulo,
                                    showConfirmButton: true,
                                    timer: 3000,
                                    didOpen: () => {
                                        timerInterval = setInterval(() => {
                                            Swal.getHtmlContainer().querySelector('strong')
                                                .textContent = (Swal.getTimerLeft() / 1000)
                                                .toFixed(0)
                                        }, 100)
                                    },
                                    willClose: () => {
                                        window.location.reload();
                                        clearInterval(timerInterval)
                                    }
                                })
                                $('#id').val('');
                                $('#nombre').val('');
                                $("#btn-save").html('Submit');
                                $("#btn-save"). attr("disabled", false);
                            }
                            $('.submitBtn').removeAttr("disabled");
                            $('.modal-body').css('opacity', '');
                        }
                    });
                }
            });

            $('body').on('click', '#btn-save', function () {
                var id = $("#id").val();
                var nombre = $("#nombre").val();
                var activo = 1;
                var puesto =  validateRow();

                if(id.trim() == '' )
                {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Por Favor Ingrese El "ID".',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                    $('#inputID').focus();
                    return false;
                }else if(nombre.trim() == '' ){
                    Swal.fire({
                        title: 'Error!',
                        text: 'Por Favor Ingrese El "Puesto".',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                    $('#inputNombre').focus();
                    return false;
                }else{
                    if(puesto == true){
                        $("#btn-save").html('Please Wait...');
                        $("#btn-save"). attr("disabled", true);
                        Swal.fire({
                            position: 'top-end',
                            title: 'El  Puesto '+ id + ' Ya Existe!' ,
                            text: 'Se Sugiere Editarlo.',
                            icon: 'error',
                            confirmButtonText: 'Ok',
                            timer: 3000,
                            didOpen: () => {
                                timerInterval = setInterval(() => {
                                    Swal.getHtmlContainer().querySelector('strong')
                                        .textContent = (Swal.getTimerLeft() / 1000)
                                        .toFixed(0)
                                }, 100)
                            },
                            willClose: () => {
                                window.location.reload();
                                clearInterval(timerInterval)
                            }
                        });
                    }else {
                        $.ajax({
                            type:"POST",
                            url: "{{route('puestos.index')}}",
                            data: {
                                id:id,
                                nombre:nombre,
                                activo:activo,
                            },
                            dataType: 'json',
                            /*success: function(res){


                                console.log(res);
                            },*/
                            success:function(res){
                                if(res.status=='error'){
                                    Swal.fire({
                                        title: 'Ocurrió algún problema!',
                                        text: 'Por Favor, inténtalo de nuevo.',
                                        icon: 'error',
                                        confirmButtonText: 'Ok'
                                    });

                                }else{
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Los Datos Se Registraron Correctamente.',
                                        showConfirmButton: true,
                                        timer: 3000,
                                        didOpen: () => {
                                            timerInterval = setInterval(() => {
                                                Swal.getHtmlContainer().querySelector('strong')
                                                    .textContent = (Swal.getTimerLeft() / 1000)
                                                    .toFixed(0)
                                            }, 100)
                                        },
                                        willClose: () => {
                                            window.location.reload();
                                            clearInterval(timerInterval)
                                        }
                                    })
                                    $('#id').val('');
                                    $('#nombre').val('');
                                    $("#btn-save").html('Submit');
                                    $("#btn-save"). attr("disabled", false);
                                }
                                $('.submitBtn').removeAttr("disabled");
                                $('.modal-body').css('opacity', '');
                            }
                        });
                    }
                }
            });
        } );
    </script>
@stop
