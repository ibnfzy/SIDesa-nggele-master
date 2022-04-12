<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="<?= base_url('m-admin/penduduk/add') ?>" class="btn btn-block btn-primary btn-flat">Tambah
                        Penduduk Baru</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Penduduk</li>
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
                            <h3 class="card-title">Table Penduduk</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>~</th>
                                        <th>Action</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Golangan Darah</th>
                                        <th>Alamat</th>
                                        <th>RT/RW</th>
                                        <th>Agama</th>
                                        <th>Status Pernikahan</th>
                                        <th>Pekerjaan</th>
                                        <th>Kewarganegaraan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- data goes here -->
                                    <?php foreach ($penduduk as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_penduduk'] ?></td>
                                        <td>
                                            <div class="btn-group d-flex justify-content-center"><a
                                                    href="<?= base_url('m-admin/penduduk/detail/' . $row['id_penduduk']) ?>"
                                                    class="btn btn-flat btn-outline-warning">Detail</a><a
                                                    href="<?= base_url('m-admin/penduduk/edit/' . $row['id_penduduk']) ?>"
                                                    class="btn btn-flat btn-outline-info">Edit</a><a
                                                    href="<?= base_url('m-admin/penduduk/delete/' . $row['id_penduduk']) ?>"
                                                    class="btn btn-flat btn-outline-danger">Delete</a>
                                            </div>
                                        </td>
                                        <td><?= $row['NIK'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['tempat_lahir'] . ', ' . $row['tanggal_lahir'] ?></td>
                                        <td><?= $row['jenis_kelamin'] ?></td>
                                        <td><?= $row['goldar'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td><?= $row['rt'] . '/' . $row['rw'] ?></td>
                                        <td><?= $row['agama'] ?></td>
                                        <td><?= $row['status_pernikahan'] ?></td>
                                        <td><?= $row['pekerjaan'] ?></td>
                                        <td><?= $row['kewarganegaraan'] ?></td>
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