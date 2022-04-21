<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="<?= base_url('m-admin/pelayanan-surat') ?>"
                        class="btn btn-block btn-primary btn-flat">Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Pelayanan Surat</li>
                        <li class="breadcrumb-item active">Buat Surat</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?= base_url('m-admin/pelayanan-surat/log/' . $surat['id_surat']) ?>" method="post"
                enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Buat Surat</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="fullname">Penduduk</label>
                                    <select name="penduduk" id="penduduk" class="form-control select2" required>
                                        <?php foreach ($penduduk as $item) : ?>
                                        <option value="<?= $item['NIK'] ?>">
                                            <?= $item['NIK'] . ' - ' . $item['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Nama Surat</label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        value="<?= $surat['nama_surat'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Kode Surat</label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        value="<?= $surat['kode_surat'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-10"></div>
                            <div class="col-2"><button class="btn btn-block btn-primary btn-flat"
                                    type="submit">Buat</button></div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>