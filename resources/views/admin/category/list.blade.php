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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $cat)
                                            <tr>
                                                <td>{{ $cat->title }}</td>
                                                <td>{{ $cat->body }}</td>
                                                <td>{{ $cat->slug }}</td>
                                                <td>{{ $cat->status }}</td>
                                                <td>{{ $cat->type }}</td>
{{--                                                <td><span class="tag tag-success">Approved</span></td>--}}
{{--                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback--}}
{{--                                                    doner.--}}
{{--                                                </td>--}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
@stop
