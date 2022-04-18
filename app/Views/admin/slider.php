<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="#" class="btn btn-block btn-primary btn-flat" data-toggle="modal"
                        data-target="#modal-warning">Tambah
                        Slider</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Slider Show</li>
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
                            <h3 class="card-title">Table Gambar Slide</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>~</th>
                                        <th>Gambar</th>
                                        <th>Tanggal Upload</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- data goes here -->
                                    <?php foreach ($slider as $item) : ?>
                                    <tr>
                                        <td><?= $item['id_slider'] ?></td>
                                        <td><img width="100px"
                                                src="<?= base_url('admin/uploads/' . $item['gambar']) ?>"></td>
                                        <td><?= $item['tgl_upload'] ?></td>
                                        <td>
                                            <a href="<?= base_url('m-admin/slider/delete/' . $item['id_slider']) ?>"
                                                class="btn btn-flat btn-outline-danger">Delete</a>
                                        </td>
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
        <div class="modal fade" id="modal-warning">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-warning">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Gambar</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('m-admin/slider/store') ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-12 col-form-label">Gambar
                                    <code><?= $disable = ($count == 3) ? '*Slider Penuh silahkan hapus untuk menambah' : '' ?></code>
                                </label>
                                <input type="file" name="gambar" id="gambar" class="form-control"
                                    <?= $disable = ($count == 3) ? 'disabled' : '' ?>>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-outline-dark"
                                <?= $disable = ($count == 3) ? 'disabled' : '' ?>>Simpan Perubahan</button>
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