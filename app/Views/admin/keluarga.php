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
                        Keluarga Baru</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Keluarga</li>
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
                            <h3 class="card-title">Table Keluarga</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>~</th>
                                        <th>Action</th>
                                        <th>No KK</th>
                                        <th>Nama Kepala Keluarga</th>
                                        <th>Alamat</th>
                                        <th>RT/RW</th>
                                        <th>Kecamatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- data goes here -->
                                    <?php foreach ($keluarga as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_keluarga'] ?></td>
                                        <td>
                                            <div class="btn-group d-flex justify-content-center"><a href=""
                                                    class="btn btn-flat btn-outline-warning">Detail</a><a href=""
                                                    class="btn btn-flat btn-outline-primary">Tambah Anggota
                                                    Keluarga</a><a href=""
                                                    class="btn btn-flat btn-outline-info">Edit</a><a href=""
                                                    class="btn btn-flat btn-outline-danger">Delete</a>
                                            </div>
                                        </td>
                                        <td><?= $row['no_kk'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td><?= $row['rt'] . '/' . $row['rw'] ?></td>
                                        <td><?= $row['kecamatan'] ?></td>
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
                        <h4 class="modal-title">Pilih Kepala Keluarga</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <select name="kepala_keluarga" id="kepala_keluarga" class="form-control select2">
                                <?php foreach ($kepala_keluarga as $row) : ?>
                                <option value="<?= $row['id_penduduk'] ?>"><?= $row['NIK'] . ' - ' . $row['nama'] ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-outline-dark">Proses</button>
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