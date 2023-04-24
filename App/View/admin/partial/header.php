<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= asset('admin/admin_assets/css/all.min.css')?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= asset('admin/admin_assets/css/adminlte.min.css')?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= asset('admin/admin_assets/css/OverlayScrollbars.min.css')?>">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= url('logout')?>" class="nav-link">logout</a>
            </li>

        </ul>

    </nav>
    <!-- /.navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">