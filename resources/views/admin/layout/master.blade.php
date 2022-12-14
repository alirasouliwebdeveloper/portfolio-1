<!DOCTYPE html>
<html lang="en">
@include('admin.partials.header')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.partials.navbar')
    @include('admin.partials.sidebar')
    @yield('content')
    @include('admin.partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
@yield('footerScripts')
</body>
</html>
