@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Show all posts</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Posts</li>
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
                                <h3 class="card-title">All posts are here</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm">
                                        <a class="btn btn-success btn-sm" href="{{ route('posts.create') }}">Add new
                                            Post</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                @if(count($posts) > 0)
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Row</th>
                                            <th>Title</th>
                                            <th>Counts</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td style="width: 70px">{{ $loop->iteration }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td style="width: 90px">{{ $post->counts }}</td>
                                                <td style="width: 150px">{{ $post->user->name }}</td>
                                                <td style="width: 150px">{{ $post->category->title }}</td>
                                                <td style="width: 90px">{!! $post->returnStatus($post->status) !!}</td>
                                                <td style="width: 150px">
                                                    <div class="d-flex">
                                                        <a class="btn btn-warning btn-sm"
                                                           href="{{ route('posts.edit', $post->id) }}">
                                                            Edit
                                                        </a>
                                                        <button class="btn btn-danger btn-sm ml-2 delete-modal"
                                                                data-toggle="modal" data-target="#delete-modal"
                                                                data-id="{{ $post->id }}" data-name="{{ $post->title }}"
                                                                type="button">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="text-danger p-3">No posts found</p>
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
                        <p>Are you sure to delete post "<span id="catIdInModal"></span>"?</p>
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
        let postId = $(this).data('id');
        let URL = "{{ request()->url() }}/" + postId;
        let postTitle = $(this).data('name');
        $(".form-delete-modal").attr('action', URL);
        $(".modal-body #catIdInModal").text(postTitle);
      });
    </script>
@endsection
