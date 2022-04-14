<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="#" class="btn btn-block btn-primary btn-flat" data-toggle="modal"
                        data-target="#modal-tambah">Tambah
                        Surat Baru</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Surat - Surat</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table Surat - surat</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>~</th>
                                        <th>Action</th>
                                        <th>Kode Surat</th>
                                        <th>Nama Surat</th>
                                        <th>URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- data goes here -->
                                    <?php foreach ($surat as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_surat'] ?></td>
                                        <td>
                                            <div class="btn-group d-flex justify-content-center"><a
                                                    href="<?= base_url('m-admin/pelayanan-surat/create/' . $row['id_surat']) ?>"
                                                    class="btn btn-flat btn-outline-warning">Buat Surat</a><a href="#"
                                                    class="btn btn-flat btn-outline-info">Edit</a><a
                                                    href="<?= base_url('m-admin/pelayanan-surat/delete/' . $row['id_surat']) ?>"
                                                    class="btn btn-flat btn-outline-danger">Delete</a>
                                            </div>
                                        </td>
                                        <td><?= $row['kode_surat'] ?></td>
                                        <td><?= $row['nama_surat'] ?></td>
                                        <td><?= $row['url_surat'] ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="modal fade" id="modal-tambah">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-warning">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Surat Baru</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('m-admin/pelayanan-surat/store') ?>"
                        method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Kode Surat</label>
                                <input class="form-control" type="text" name="kode_surat" id="kode_surat">
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Nama Surat</label>
                                <input class="form-control" type="text" name="nama_surat" id="nama_surat">
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">URL</label>
                                <input class="form-control" type="text" name="url" id="url">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-outline-dark">Tambah Surat</button>
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