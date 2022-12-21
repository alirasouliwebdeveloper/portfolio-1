@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit category: {{ $cat->title }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
                            <li class="breadcrumb-item active">Edit category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="content">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Edit category</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger m-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <!-- /.card-header -->
                <form class="form-horizontal" method="post" action="{{ route('category.update', $cat->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="row">
                            <!-- form start -->
                            <div class="col-sm-8">
                                <div class="form-group row">
                                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="inputTitle" id="inputTitle"
                                               placeholder="Title" value="{{ $cat->title }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputBody" class="col-sm-2 col-form-label">Body</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="inputBody" id="inputBody"
                                               placeholder="Body" value="{{ $cat->body }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="CategoryType" class="col-sm-2 col-form-label">
                                        Type Category
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="custom-select form-control" name="CategoryType"
                                                id="CategoryType">
                                            <option {{ $cat->type == 'Post' ? 'selected="selected"' : '' }} value="Post">
                                                Post
                                            </option>
                                            <option {{ $cat->type == 'Portfolio' ? 'selected="selected"' : '' }} value="Portfolio">
                                                Portfolio
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10 custom-control custom-switch">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input custom-control-input"
                                                   id="checkBoxActive"
                                                   name="checkBoxActive" {{ $cat->status == 1 ? 'checked="checked"' : '' }}>
                                            <label class="form-check-label custom-control-label" for="checkBoxActive">
                                                Publish
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info">Edit</button>
                                    <a href="{{ route('category.index') }}"
                                       class="btn btn-default float-right">Cancel</a>
                                </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- /.card -->
    </div>
@endsection
