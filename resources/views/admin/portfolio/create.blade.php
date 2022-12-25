@extends('admin.layout.master')
@include('admin.partials.pageTitle', ['title' => 'Create new portfolio'])
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                            <li class="breadcrumb-item active">New Portfolio</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Add new portfolio</h3>
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
                <form class="form-horizontal" method="post" action="{{ route('portfolio.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Left side panel -->
                            <div class="col-sm-12 col-md-8 ">
                                <div class="form-group row">
                                    <label for="inputTitle" class="col-sm-2 col-form-label">Title:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="inputTitle"
                                               id="inputTitle"
                                               placeholder="Title"
                                               value="{{ old('inputTitle') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="summernote" class="col-sm-2 col-form-label">Project description:</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" name="inputBody">{{ old('inputBody') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-2 col-form-label">
                                        Category:
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="custom-select form-control" name="category_id"
                                                id="category_id">
                                            @foreach($cats as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- Right side panel -->
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="url" class="col-form-label pt-0">
                                        Site URL:
                                    </label>
                                    <div>
                                        <input name="url" id="url" class="form-control" type="text"
                                               placeholder="Enter customer URL link" value="{{ old('url') }}"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="customer_name" class="col-form-label pt-0">
                                        Customer name:
                                    </label>
                                    <div>
                                        <input name="customer_name" id="customer_name" class="form-control"
                                               type="text" placeholder="Enter customer name"
                                               value="{{ old('customer_name') }}"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="start_date" class="col-form-label pt-0">
                                        Start date project:
                                    </label>

                                    <div class="input-group date" id="start_date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                               data-target="#start_date" name="start_date" id="start_date"
                                               value="{{ old('start_date') }}"/>
                                        <div class="input-group-append" data-target="#start_date"
                                             data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="end_date" class="col-form-label pt-0">
                                        End date project:
                                    </label>
                                    <div class="input-group date" id="end_date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                               data-target="#end_date" name="end_date" id="end_date"
                                               value="{{ old('end_date') }}"/>
                                        <div class="input-group-append" data-target="#end_date"
                                             data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image" class="col-form-label pt-0">
                                        Image:
                                    </label>
                                    <div>
                                        <input name="image" id="image" class="form-control" type="text"
                                               placeholder="Copy the url of your image" value="{{ old('image') }}"/>
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
                                                   id="checkBoxActive" name="checkBoxActive">
                                            <label class="form-check-label custom-control-label"
                                                   for="checkBoxActive">Publish</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100">
                                <button type="submit" class="btn btn-info">Save</button>
                                <a href="{{ route('portfolio.index') }}"
                                   class="btn btn-default float-right">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
    {{--    </div>--}}
@stop

@section('headerStyles')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('footerScripts')
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script>
      $(document).ready(function () {
        const FMButton = function (context) {
          const ui = $.summernote.ui;
          const button = ui.button({
            contents: '<i class="note-icon-picture"></i> ',
            tooltip: 'File Manager',
            click: function () {
              window.open('/file-manager/summernote', 'fm', 'width=1100,height=600');
            }
          });
          return button.render();
        };
        $('#summernote').summernote({
          height: 300,
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['fm-button', ['fm']],
            ['view', ['fullscreen', 'codeview', 'help']],
          ],
          buttons: {
            fm: FMButton
          }
        });

        //Date picker
        $('#start_date').datetimepicker({
          format: 'L'
        });
        $('#end_date').datetimepicker({
          format: 'L'
        });
      });

      function fmSetLink(url) {
        $('#summernote').summernote('insertImage', url);
      };

      $(".nav-item > a").each(function () {
        $(this).removeClass("active");
      });
      $('#menu-portfolio').addClass('active');
    </script>
@endsection
