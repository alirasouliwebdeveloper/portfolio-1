@extends('admin.layout.master')
@include('admin.partials.pageTitle', ['title' => 'Edit skill "' . $skill->meta_name. '""' ])

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
                            <li class="breadcrumb-item"><a href="{{ route('skill.index') }}">Skill</a></li>
                            <li class="breadcrumb-item active">Edit skill: <b>{{ $skill->meta_name }}</b></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="content">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Add new category</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <!-- /.card-header -->
                <form class="form-horizontal" method="post" action="{{ route('skill.update', $skill->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="row">
                            <!-- form start -->
                            <div class="col-sm-8">
                                <div class="form-group row">
                                    <label for="meta_name" class="col-sm-2 col-form-label">Meta name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_name" id="meta_name"
                                               placeholder="Meta name" value="{{ $skill->meta_name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="meta_value" class="col-sm-2 col-form-label">Meta value:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_value" id="meta_value"
                                               placeholder="Meta value %" value="{{ $skill->meta_value }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-sm-2 col-form-label">Image:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="image" id="image"
                                               placeholder="Image" value="{{ $skill->image }}">
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="position" class="col-form-label pt-0">
                                        Position:
                                    </label>
                                    <div>
                                        <input name="position" id="position" class="form-control" type="text"
                                               placeholder="Position" value="{{ $skill->position }}"
                                               maxlength="2"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="w-100">
                                <div class="form-group row">
                                    <div class="col-sm-10 custom-control custom-switch">
                                        <div class="form-check">
                                            <input type="checkbox"
                                                   class="form-check-input custom-control-input"
                                                   id="checkBoxActive" name="checkBoxActive"
                                                {{ $skill->status == 1  ? "checked='checked'" : '' }}
                                            >
                                            <label class="form-check-label custom-control-label"
                                                   for="checkBoxActive">Publish</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100">
                                <button type="submit" class="btn btn-info">Save</button>
                                <a href="{{ route('skill.index') }}"
                                   class="btn btn-default float-right">Cancel</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- /.card -->
    </div>
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
