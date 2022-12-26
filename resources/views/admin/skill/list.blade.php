@extends('admin.layout.master')
@include('admin.partials.pageTitle', ['title' => 'List of skills'])

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">List Of Skills</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Skills</li>
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
                                        <a class="btn btn-success btn-sm" href="{{ route('skill.create') }}">Add new
                                            skill</a>
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
                                @if(count($skills) > 0)
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Meta name</th>
                                            <th>Meta value</th>
                                            <th>Author</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($skills as $skill)
                                            <tr>
                                                <td>{{ $skill->meta_name }}</td>
                                                <td>{{ $skill->meta_value }}</td>
                                                <td style="width: 90px">{!! $skill->user->name !!}</td>
                                                <td style="width: 90px">{{ $skill->position }}</td>
                                                <td style="width: 90px">{!! $skill->returnStatus($skill->status) !!}</td>
                                                <td style="width: 150px">
                                                    <div class="d-flex">
                                                        <a class="btn btn-warning btn-sm"
                                                           href="{{ route('skill.edit', $skill->id) }}">
                                                            Edit
                                                        </a>
                                                        <button class="btn btn-danger btn-sm ml-2 delete-modal"
                                                                data-toggle="modal" data-target="#delete-modal"
                                                                data-id="{{ $skill->id }}"
                                                                data-name="{{ $skill->meta_name }}"
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
                                        {{ $skills->links('admin.partials.admin-pagination') }}
                                    </div>
                                @else
                                    <p class="text-danger p-3">No skills found</p>
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
                    <h4 class="modal-title">Delete Skill</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#"
                      method="post" class="form-delete-modal">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p>Are you sure to delete skill "<span id="catIdInModal"></span>"?</p>
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
@endsection


@section('footerScripts')
    <script>
      $(document).on("click", ".delete-modal", function () {
        let skillId = $(this).data('id');
        let URL = "{{ request()->url() }}/" + skillId;
        let skillTitle = $(this).data('name');
        $(".form-delete-modal").attr('action', URL);
        $(".modal-body #catIdInModal").text(skillTitle);
      });

      $(".nav-item > a").each(function () {
        $(this).removeClass("active");
      });
      $("#menu-skill").addClass("active");

    </script>
@endsection
