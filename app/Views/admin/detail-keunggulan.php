<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Keunggulan Desa</li>
                        <li class="breadcrumb-item active">Detail Keunggulan Desa</li>
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
                <div class="col-sm-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h2 class="card-title text-bold"><?= $keunggulan['judul_keunggulan'] ?></h2>

                            <div class="card-tools">
                                <div class="btn-group d-flex justify-content-center">
                                    <a href="<?= base_url('m-admin/keunggulan-desa') ?>"
                                        class="btn btn-outline-primary btn-block">Kembali</a>
                                    <a href="<?= base_url('m-admin/keunggulan-desa/edit/' . $keunggulan['id_keunggulan']) ?>"
                                        class="btn btn-flat btn-outline-info">Edit</a>
                                    <a href="<?= base_url('m-admin/keunggulan-desa/delete/' . $keunggulan['id_keunggulan']) ?>"
                                        class="btn btn-block btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h6>
                                    <span class="mailbox-read-time float-right">Diupload Tanggal
                                        <?= $keunggulan['tgl_upload'] ?></span>
                                </h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <!-- isi sejarah -->
                                <?= $keunggulan['isi_keunggulan'] ?>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->

                        <!-- /.card-footer -->
                        <div class="card-footer bg-white">
                            <h6>
                                <hr>
                                <span class="mailbox-read-time">Gambar Keunggulan</span>
                            </h6>
                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                <li>
                                    <span class="mailbox-attachment-icon has-img"><img
                                            src="<?= base_url('admin/uploads/' . $keunggulan['gambar']) ?>"
                                            alt="Attachment" width="100px"></span>

                                    <div class="mailbox-attachment-info row">
                                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i>
                                            <?= $keunggulan['gambar'] ?></a>
                                        <span class="mailbox-attachment-size clearfix mt-1">
                                            <span></span>
                                            <a href="<?= base_url('admin/uploads/' . $keunggulan['gambar']) ?>"
                                                class="btn btn-default btn-sm float-right"><i
                                                    class="fas fa-cloud-download-alt"></i></a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- /.card-footer -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>