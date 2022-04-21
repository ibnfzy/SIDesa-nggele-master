<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="<?= base_url('m-admin/berita') ?>" class="btn btn-block btn-warning btn-flat">Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Berita Desa</li>
                        <li class="breadcrumb-item active">Edit Berita Desa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?= base_url('m-admin/berita/update/' . $berita['id_berita']) ?>" method="post"
                enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Upload Thumbnail</h3>
                            </div>
                            <div class="card-body">
                                <input type="file" name="gambar" id="gambar">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Form Input Detail Berita</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Judul Berita</label>
                                    <input type="text" name="judul" id="judul" class="form-control"
                                        value="<?= $berita['jdl_berita'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-control">
                                        <optgroup label="Pilihan Sebelumnya">
                                            <option selected value="<?= $berita['jenis_berita'] ?>">
                                                <?= $berita['jenis_berita'] ?></option>
                                        </optgroup>
                                        <option value="Pengumuman">Pengumuman</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Pemerintah">Pemerintah</option>
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
                                        <?= $berita['tgl_upload'] ?></span>
                                </h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <!-- isi sejarah -->
                                <textarea name="editor" id="editor" cols="30"
                                    rows="10"><?= $berita['isi_berita'] ?></textarea>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2"><button class="btn btn-block btn-primary btn-flat"
                                        type="submit">Simpan</button></div>
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