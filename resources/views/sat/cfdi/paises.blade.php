@extends('adminlte::page')

@section('title', 'País SAT')

@section('content_header')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
    <h1>
        Datos Catálogo País SAT.
    </h1>
    <div class="row">
        <div class="col-12 text-right">
            <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Add Post</a>
        </div>
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
    <div class="modal fade" id="post-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form name="userForm" class="form-horizontal">
                        <input type="hidden" name="post_id" id="post_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2">title</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                <span id="titleError" class="alert-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Description</label>
                            <div class="col-sm-12">
                        <textarea class="form-control" id="description" name="description" placeholder="Enter description" rows="4" cols="50">
                        </textarea>
                                <span id="descriptionError" class="alert-message"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="createPost()">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

@stop
@section('js')

            <script>
                $('#tablePaises').DataTable();

                function addPost() {
                    $("#post_id").val('');
                    $('#post-modal').modal('show');
                }

                function createPost() {
                    var title = $('#title').val();
                    var description = $('#description').val();
                    var id = $('#post_id').val();

                    let _url     = `/posts`;
                    let _token   = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        url: _url,
                        type: "POST",
                        data: {
                            id: id,
                            title: title,
                            description: description,
                            _token: _token
                        },
                        success: function(response) {
                            if(response.code == 200) {
                                if(id != ""){
                                    $("#row_"+id+" td:nth-child(2)").html(response.data.title);
                                    $("#row_"+id+" td:nth-child(3)").html(response.data.description);
                                } else {
                                    $('table tbody').prepend('<tr id="row_'+response.data.id+'"><td>'+response.data.id+'</td><td>'+response.data.title+'</td><td>'+response.data.description+'</td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
                                }
                                $('#title').val('');
                                $('#description').val('');

                                $('#post-modal').modal('hide');
                            }
                        },
                        error: function(response) {
                            $('#titleError').text(response.responseJSON.errors.title);
                            $('#descriptionError').text(response.responseJSON.errors.description);
                        }
                    });
                }

            </script>
@stop

