@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">List Of Categories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{--                                <h3 class="card-title">List Of Categories</h3>--}}
                                <div class="card-tools">
                                    <div class="input-group input-group-sm">
                                        <a class="btn btn-success btn-sm" href="{{ route('category.create') }}">Add new
                                            category</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(count($categories) > 0)
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $cat)
                                            <tr>
                                                <td>{{ $cat->title }}</td>
                                                <td>{{ $cat->body }}</td>
                                                <td>{{ $cat->slug }}</td>
                                                <td style="width: 90px">{!! $cat->returnStatus($cat->status) !!}</td>
                                                <td style="width: 90px">{!! $cat->returnLabel($cat->type) !!}</td>
                                                <td style="width: 150px">
                                                    <div class="d-flex">
                                                        <a class="btn btn-warning btn-sm"
                                                           href="{{ route('category.edit', $cat->id) }}">
                                                            Edit
                                                        </a>
                                                        <button class="btn btn-danger btn-sm ml-2 delete-modal"
                                                                data-toggle="modal" data-target="#delete-modal"
                                                                data-id="{{ $cat->id }}" data-name="{{ $cat->title }}"
                                                                type="button">
                                                            Delete
                                                        </button>

                                                    </div>


                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="card-footer clearfix">
                                        {{ $categories->links('admin.partials.admin-pagination') }}
                                    </div>
                                @else
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#"
                      method="post" class="form-delete-modal">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p>Are you sure to delete category "<span id="catIdInModal"></span>"?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop

@section('footerScripts')
    <script>
      $(document).on("click", ".delete-modal", function () {
        let categoryId = $(this).data('id');
        let URL = "{{ request()->url() }}/" + categoryId;
        let categoryTitle = $(this).data('name');
        $(".form-delete-modal").attr('action', URL);
        $(".modal-body #catIdInModal").text(categoryTitle);
      });
    </script>
@endsection
