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
                        <li class="breadcrumb-item active">Pemerintah Desa</li>
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
                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            <h2 class="card-title">Pemerintah Desa</h2>

                            <div class="card-tools">
                                <a href="#" class="btn btn-warning btn-block" data-toggle="modal"
                                    data-target="#modal-warning">Edit</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h6>
                                    <span class="mailbox-read-time float-right"><?= $pemerintahi['tgl_upload'] ?></span>
                                </h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <!-- isi sejarah -->
                                <?= $pemerintah['isi_pemerintah'] ?>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                        <div class="card-footer">
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="modal fade" id="modal-warning">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-warning">
                    <div class="modal-header">
                        <h4 class="modal-title">Pemerintah Desa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('m-admin/pemerintah/simpan/' . $pemerintah['id_pemerintah']) ?>"
                        method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <textarea name="editor" id="editor" cols="30"
                                rows="10"><?= $pemerintah['isi_pemerintah'] ?></textarea>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-outline-dark">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>