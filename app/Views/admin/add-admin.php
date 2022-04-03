<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="<?= base_url('m-admin/admin') ?>" class="btn btn-block btn-primary btn-flat">Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Table Admin</li>
                        <li class="breadcrumb-item active">Add Data Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?= base_url('m-admin/admin/store') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Upload Gambar</h3>
                            </div>
                            <div class="card-body">
                                <input type="file" name="gambar" id="gambar">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-blue">
                            <div class="card-header">
                                <h3 class="card-title">Form Input Data Admin</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Fullname</label>
                                    <input type="text" name="fullname" id="fullname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-control">
                                        <option value="pegawai">Pegawai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="confirm">Konfirmasi Password</label>
                                    <input type="password" name="confirm" id="confirm" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-10"></div>
                                    <div class="col-2"><button class="btn btn-block btn-primary btn-flat"
                                            type="submit">Simpan</button></div>
                                </div>
                            </div>
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