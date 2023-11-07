<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title> {{$title}} </title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">

        <link rel="stylesheet" href=" {{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href=" {{ asset('adminlte') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-booststrap-4.min.css">

        <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/datatablesbs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/datatablesresponsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/datatablesbuttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('adminlte')
        }}/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('adminlte')
        }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        @yield('css')
        </head>
        <body class="hold-transition sidebar-mini layout-fixed">
            