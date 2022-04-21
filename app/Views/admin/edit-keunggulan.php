<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="<?= base_url('m-admin/keunggulan-desa') ?>"
                        class="btn btn-block btn-warning btn-flat">Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Keunggulan Desa</li>
                        <li class="breadcrumb-item active">Edit Keunggulan Desa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?= base_url('m-admin/keunggulan-desa/update/' . $keunggulan['id_keunggulan']) ?>"
                method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Upload Gambar</h3>
                            </div>
                            <div class="card-body">
                                <input type="file" name="gambar" id="gambar">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Form Input Data Admin</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Judul Keunggulan</label>
                                    <input type="text" name="judul" id="judul" class="form-control"
                                        value="<?= $keunggulan['judul_keunggulan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-control">
                                        <optgroup label="Pilihan Sebelumnya">
                                            <option selected value="<?= $keunggulan['jenis_keunggulan'] ?>">
                                                <?= $keunggulan['jenis_keunggulan'] ?></option>
                                        </optgroup>
                                        <option value="Pertanian">Pertanian</option>
                                        <option value="Laut">Laut</option>
                                        <option value="Infrastruktur">infrastruktur</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h2 class="card-title">Editor</h2>

                            <div class="card-tools">
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h6>
                                    <span class="mailbox-read-time float-right">Diupload pada tanggal
                                        <?= $keunggulan['tgl_upload'] ?></span>
                                </h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <!-- isi sejarah -->
                                <textarea name="editor" id="editor" cols="30"
                                    rows="10"><?= $keunggulan['isi_keunggulan'] ?></textarea>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2"><button class="btn btn-block btn-primary btn-flat"
                                        type="submit">Ubah</button></div>
                            </div>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>
            </form>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>