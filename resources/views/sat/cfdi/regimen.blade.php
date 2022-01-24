@extends('adminlte::page')
@section('title', 'Régimen Fiscal SAT')
@section('css')
@endsection
@section('content_header')
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <h3 class="titulo-tabla">Datos Catálogo Régimen Fiscal SAT.</h3>
                <table id="ejemplo" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="modal-create-regimen">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Registro Régimen Fiscal SAT</h4>
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
                            <label for="inputNombre">Régimen Fiscal</label>
                            <input type="text" class="form-control" id="inputNombre" placeholder="Ingrese el Régimen Fiscal"/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-outline-success submitBtn" onclick="submitRegimenForm()">Guardar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
@section('js')
    <script>
        var idioma=
            {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "NingÃºn dato disponible en esta tabla",
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
                    "sLast":     "Ãšltimo",
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
            var table = $('#ejemplo').DataTable( {
                "ajax": "reload( null, false )",
                "ajax": "{{route('datatable.SatRegimenFiscalCatalogoController')}}",
                "columns":[
                    {data : 'id'},
                    {data : 'nombre'},
                    {"defaultContent": "<button type='button' class='btn btn-primary'><i class='fa fa-pencil'></i> Editar<br></button>" +
                            "<button type='button' class='btn btn-danger'><i class='fa fa-trash'></i> Borrar<br></button"}
                ],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "responsive": true,
                "autoWidth": true,
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
                            className: 'btn btn-app  nuevo',
                            titleAttr: 'Nuevo',
                            attr:  {
                                "data-toggle": "modal",
                                "data-target": "#modal-create-regimen"
                            },
                        },
                        {
                            extend:    'copyHtml5',
                            text:      '<i class="fa fa-clipboard"></i>Copiar',
                            title:'Catálogo Régimen Fiscal SAT',
                            titleAttr: 'Copiar',
                            className: 'btn btn-app export barras',
                            exportOptions: {
                                columns: [ 0, 1 ]
                            }
                        },

                        {
                            extend:    'pdfHtml5',

                            text:      '<i class="fa fa-file-pdf-o"></i>PDF',
                            title:'Catálogo Régimen Fiscal SAT',
                            titleAttr: 'PDF',
                            className: 'btn btn-app pdf',
                            exportOptions: {
                                columns: [ 0, 1 ]
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
                            title:'Catálogo Régimen Fiscal SAT',
                            titleAttr: 'Excel',
                            className: 'btn btn-app export excel',
                            exportOptions: {
                                columns: [ 0, 1 ]
                            },
                        },
                        {
                            extend:    'csvHtml5',
                            text:      '<i class="fa fa-file-text-o"></i>CSV',
                            title:'Catálogo Régimen Fiscal SAT',
                            titleAttr: 'CSV',
                            className: 'btn btn-app export csv',
                            exportOptions: {
                                columns: [ 0, 1 ]
                            }
                        },
                        {
                            extend:    'print',
                            text:      '<i class="fa fa-print"></i>Imprimir',
                            title:'Catálogo Régimen Fiscal SAT.',
                            titleAttr: 'Imprimir',
                            className: 'btn btn-app export imprimir',
                            exportOptions: {
                                columns: [ 0, 1 ]
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
        } );
    </script>
    <script>
        function submitRegimenForm(){
            var id = $('#inputID').val();
            var nombre = $('#inputNombre').val();
            var token = '{{csrf_token()}}';
            var data={id:id,nombre:nombre,_token:token};
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
                    text: 'Por Favor Ingrese El "Régimen Fiscal".',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
                $('#inputNombre').focus();
                return false;
            }else{
                $.ajax({
                    type:'POST',
                    url:"{{route('regimenFiscalSat.store')}}",
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
                            Swal.fire({
                                title: 'Ocurrió algún problema!',
                                text: 'Por Favor, inténtalo de nuevo.',
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            });
                        }
                        $('.submitBtn').removeAttr("disabled");
                        $('.modal-body').css('opacity', '');
                    }
                });
            }
        }
    </script>
@endsection
