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
    <link rel="stylesheet" href="<?= base_url('admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet"
        href="<?= base_url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/toastr/toastr.min.css') ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/summernote/summernote-bs4.min.css') ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/select2/css/select2.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('admin/dist/css/adminlte.min.css') ?>">
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
    <script src="<?= base_url('admin/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Moment.js -->
    <script src="<?= base_url('admin/plugins/moment/moment.min.js') ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('admin/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jszip/jszip.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/pdfmake/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/pdfmake/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
    <!-- Toastr -->
    <script src="<?= base_url('admin/plugins/toastr/toastr.min.js') ?>"></script>
    <!-- Summernote -->
    <script src="<?= base_url('admin/plugins/summernote/summernote-bs4.min.js') ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>">
    </script>
    <!-- Select2 -->
    <script src="<?= base_url('admin/plugins/select2/js/select2.full.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('admin/dist/js/adminlte.min.js') ?>"></script>

    <!-- Memanggil Notifikasi Toastr -->
    <?php
    if (session()->getFlashdata('message')) {
        echo '<script>toastr["' .
            session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('message') . '")</script>';
    }
    ?>

    <!-- Script tambahan untuk Toastr -->
    <script>
    // toastr["error"]("Error saat memasukkan file", "Error") success, info, warning, error

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>

    <!-- Memanggil Script JS tambahan untuk DataTables -->
    <?= $retVal = (isset($js)) ? $this->include($js) : ''; ?>
</body>

</html>