@extends('adminlte::page')

@section('title', 'Carga de XML Sifei')

@section('content_header')
    <h1>
        Carga XML para Sellado
    </h1>
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 offset-md-1">
                    <!-- general form elements -->
                    <div class="card card-orange">
                        <div class="card-header">
                            <h3 class="card-title">Carga el XML Para Procesar el Sellado</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="was-validated" action="{{route('selladoSifei')}}" method="POST">
                        @csrf
                        <!-- /.card-body -->
                            <div class="card card-olive">
                                <div class="card-header">
                                    <h3 class="card-title">XML:</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <section id="registro" class="custom-control custom-checkbox mb-3">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="col-sm-10">
                                                            <input name="xml" id="xml" type="file" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="submit" type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@stop
@section('css')
@stop
@section('js')
    <script>
        $(document).ready(function() {
            $("#submit"). attr("disabled", true);
            $("#xml").change(function ()
            {
                var archivo = $("#xml").val();
                extensionesPermitidas = new Array(".xml");
                miError = "";
                if (!archivo){}
                else
                {
                    extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
                    permitida = false;
                    for (var i = 0; i < extensionesPermitidas.length; i++)
                    {
                        if (extensionesPermitidas[i] == extension)
                        {
                            permitida = true;
                            $("#submit"). attr("disabled", false);
                            break;

                        }
                    }
                    if (!permitida)
                    {
                        //alert("Comprueba la extensión de los archivos a subir. \nSólo se pueden subir archivos con extension: " + extensionesPermitidas.join());
                        Swal.fire({
                            title: 'Error!',
                            text: 'Sólo se pueden subir archivos con extension: "' + extensionesPermitidas.join()+'"',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                        $("#submit"). attr("disabled", true);
                        //window.location.href = "{{route('selladoSifei')}}";
                    }
                }
            });
        } );
    </script>
@stop
