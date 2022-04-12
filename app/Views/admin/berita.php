<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="<?= base_url('m-admin/berita/add') ?>" class="btn btn-block btn-primary btn-flat">Buat
                        Berita Baru</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Berita Desa</li>
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
                            <h3 class="card-title">Table Berita</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>~</th>
                                        <th>Thumbnail Berita</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Upload</th>
                                        <th>Jenis Berita</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- data goes here -->
                                    <?php foreach ($berita as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_berita'] ?></td>
                                        <td><img width="100px"
                                                src="<?= base_url('admin/uploads/' . $row['thumbnail_berita']) ?>">
                                        </td>
                                        <td><?= $row['jdl_berita'] ?></td>
                                        <td><?= $row['tgl_upload'] ?></td>
                                        <td><?= $row['jenis_berita'] ?></td>
                                        <td>
                                            <div class="btn-group d-flex justify-content-center"><a
                                                    href="<?= base_url('m-admin/berita/detail/' . $row['id_berita']) ?>"
                                                    class="btn btn-flat btn-outline-warning">Detail</a><a
                                                    href="<?= base_url('m-admin/berita/edit/' . $row['id_berita']) ?>"
                                                    class="btn btn-flat btn-outline-info">Edit</a><a
                                                    href="<?= base_url('m-admin/berita/delete/' . $row['id_berita']) ?>"
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