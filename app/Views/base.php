<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDesa Nggele | <?= $title ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.ico') ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/all.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/all.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/lightbox.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/flexslider.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/owl.carousel.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/owl.theme.default.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/jquery.rateyo.css') ?>" />
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/toastr/toastr.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('inner-page-style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('style.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>

<body>
    <div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
        <header class="site-header">
            <!-- Top Header -->
            <?= $this->include('layout/top-header') ?>
            <!-- Top header Close -->
            <?= $this->include('layout/nav') ?>
        </header>
        <?= $this->renderSection('content') ?>
        <!-- End of Query Section -->
        <?= $this->include('layout/footer') ?>

    </div>
    <script type="text/javascript" src="<?= base_url('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?= base_url('js/lightbox.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/all.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/isotope.pkgd.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/owl.carousel.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/jquery.flexslider.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/jquery.rateyo.js') ?>"></script>
    <!-- Toastr -->
    <script src="<?= base_url('admin/plugins/toastr/toastr.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/custom.js') ?>"></script>

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
</body>

</html>