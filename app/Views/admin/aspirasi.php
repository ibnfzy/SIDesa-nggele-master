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
                        <li class="breadcrumb-item active">Layanan Aspirasi</li>
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
                            <h3 class="card-title">Table Layanan Aspirasi</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>~</th>
                                        <th>NIK</th>
                                        <th>Tanggal Kirim</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- data goes here -->
                                    <?php foreach ($aspirasi as $item) : ?>
                                    <tr>
                                        <td><?= $item['id_aspirasi'] ?></td>
                                        <td><?= $item['NIK'] ?></td>
                                        <td><?= $item['tgl_kirim'] ?></td>
                                        <td>

                                            <div class="btn-group d-flex justify-content-center"><a
                                                    href="<?= base_url('m-admin/aspirasi/detail/' . $item['id_aspirasi']) ?>"
                                                    class="btn btn-flat btn-outline-info">Detail</a><a
                                                    href="<?= base_url('m-admin/aspirasi/delete/' . $item['id_aspirasi']) ?>"
                                                    class="btn btn-flat btn-outline-danger">Delete</a></div>
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