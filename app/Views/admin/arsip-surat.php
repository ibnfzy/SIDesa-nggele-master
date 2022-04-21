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
                        <li class="breadcrumb-item active">Arsip Surat</li>
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
                            <h3 class="card-title">Table Arsip Surat</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>~</th>
                                        <th>Action</th>
                                        <th>Nomor Surat</th>
                                        <th>NIK Penduduk</th>
                                        <th>Status Ambil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- data goes here -->
                                    <?php foreach ($log as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_log_surat'] ?></td>
                                        <td>
                                            <div class="btn-group d-flex justify-content-center"><a
                                                    rel="noreferrer noopener" target="_blank"
                                                    href="<?= base_url('m-admin/arsip-surat/download/' . $row['id_log_surat']) ?>"
                                                    class="btn btn-flat btn-outline-info">Download</a><a
                                                    href="<?= base_url('m-admin/arsip-surat/delete/' . $row['id_log_surat']) ?>"
                                                    class="btn btn-flat btn-outline-danger">Delete</a>
                                            </div>
                                        </td>
                                        <td><?= $row['no_surat'] ?></td>
                                        <td><?= $row['nik_penduduk'] ?></td>
                                        <td><?= $row['status_pengambilan'] ?></td>
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