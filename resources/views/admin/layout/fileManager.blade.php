@extends('admin.layout.master')
@include('admin.partials.pageTitle', ['title' => 'File manager'])

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">File Manager</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">File Manager</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content" id="fm-main-block">
            <div id="fm"></div>
        </div>
    </div>

@endsection

@section('headerStyles')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('footerScripts')
    <!-- File manager -->
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // set fm height
        document.getElementById('fm-main-block').setAttribute('style', 'height:' + (window.innerHeight - 150) + 'px');

        // Add callback to file manager
        fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
          window.opener.fmSetLink(fileUrl);
          window.close();
        });
      });

      $(".nav-item > a").each(function () {
        $(this).removeClass("active");
      });
      $('#menu-gallery').addClass('active');
    </script>
@endsection
