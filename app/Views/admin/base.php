<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIDesa Nggele | <?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini accent-orange control-sidebar-slide-open layout-fixed sidebar-open">
    <div class="wrapper">

        <!-- Navbar -->
        <?= $this->include('admin/layout/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('admin/layout/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content') ?>
        <!-- Main Footer -->
        <?= $this->include('admin/layout/footer') ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
</body>

</html>