<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') | {{ settings('app_name_short', 9) }}</title>

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
{{--  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  --}}
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ asset('vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('vendor/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('vendor/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.min.css')}}">
<!-- tostar -->
<link rel="stylesheet" href="{{ asset('vendor/flasher/flasher.min.css') }}">
{{--  <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.css') }}">  --}}
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/dist/css/custom.css') }}">

@stack('css')
