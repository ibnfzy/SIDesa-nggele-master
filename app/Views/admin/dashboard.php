<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang di SIDesa Nggele</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-secondary">
                        <div class="card-header border-0">
                            <div class="card-title text-bold">
                                <h3><i class="fas fa-info-circle"></i> Informasi SID</h3>
                            </div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            <h3><?= $penduduk ?></h3>

                                            <p>Penduduk</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-address-book"></i>
                                        </div>
                                        <a href="<?= base_url('m-admin/penduduk') ?>" class="small-box-footer">
                                            Buka <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="small-box bg-olive">
                                        <div class="inner">
                                            <h3><?= $berita ?></h3>

                                            <p>Berita</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-newspaper"></i>
                                        </div>
                                        <a href="<?= base_url('m-admin/berita') ?>" class="small-box-footer">
                                            Buka <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3><?= $keunggulan ?></h3>

                                            <p>Keunggulan</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-info"></i>
                                        </div>
                                        <a href="<?= base_url('m-admin/kenggulan-desa') ?>" class="small-box-footer">
                                            Buka <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3><?= $aspirasi ?></h3>

                                            <p>Pelayanan Aspirasi</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <a href="<?= base_url('m-admin/aspirasi') ?>" class="small-box-footer">
                                            Buka <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="small-box bg-lightblue">
                                        <div class="inner">
                                            <h3><?= $log ?></h3>

                                            <p>Arsip Surat</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-file-alt"></i>
                                        </div>
                                        <a href="<?= base_url('m-admin/arsip-surat') ?>" class="small-box-footer">
                                            Buka <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-warning card-outline">
                        <div class="card-body">
                            <div style="margin-left: 50px;"><img width="200"
                                    src="<?= base_url('admin/uploads/' . $gambar) ?>" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>