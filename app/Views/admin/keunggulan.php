<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="<?= base_url('m-admin/keunggulan-desa/add') ?>"
                        class="btn btn-block btn-primary btn-flat">Tambah
                        Keunggulan</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Keunggulan Desa</li>
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
                            <h3 class="card-title">Table Keunggulan Desa</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>~</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Tanggal Upload</th>
                                        <th>Jenis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- data goes here -->
                                    <?php foreach ($keunggulan as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_keunggulan'] ?></td>
                                        <td><img width="100px" src="<?= base_url('admin/uploads/' . $row['gambar']) ?>">
                                        </td>
                                        <td><?= $row['judul_keunggulan'] ?></td>
                                        <td><?= $row['tgl_upload'] ?></td>
                                        <td><?= $row['jenis_keunggulan'] ?></td>
                                        <td>
                                            <div class="btn-group d-flex justify-content-center"><a
                                                    href="<?= base_url('m-admin/keunggulan-desa/detail/' . $row['id_keunggulan']) ?>"
                                                    class="btn btn-flat btn-outline-warning">Detail</a><a
                                                    href="<?= base_url('m-admin/keunggulan-desa/edit/' . $row['id_keunggulan']) ?>"
                                                    class="btn btn-flat btn-outline-info">Edit</a><a
                                                    href="<?= base_url('m-admin/keunggulan-desa/delete/' . $row['id_keunggulan']) ?>"
                                                    class="btn btn-flat btn-outline-danger">Delete</a>
                                            </div>
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
    </div>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>