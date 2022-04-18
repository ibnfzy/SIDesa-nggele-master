<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDesa Nggele | <?= $title ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.ico') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/all.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/all.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/lightbox.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/flexslider.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/owl.carousel.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/owl.theme.default.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/jquery.rateyo.css') ?>" />
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
    <script type="text/javascript" src="<?= base_url('js/lightbox.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/all.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/isotope.pkgd.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/owl.carousel.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/jquery.flexslider.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/jquery.rateyo.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/custom.js') ?>"></script>
</body>

</html>