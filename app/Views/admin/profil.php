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
                        <li class="breadcrumb-item active">Profil Desa</li>
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
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-warning card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="<?= base_url('admin/uploads/' . $profil['gambar']) ?>"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Desa Nggele</h3>

                            <a href="#" class="btn btn-warning btn-block" data-toggle="modal"
                                data-target="#modal-warning"><b>Edit Logo</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Desa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Kontak</strong>

                            <p class="text-muted">
                                <?= $profil['kontak'] ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat Kantor Desa</strong>

                            <p class="text-muted"><?= $profil['alamat_kantor'] ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Profil Desa</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Edit Profil
                                        Desa</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit
                                        Informasi Desa</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div>
                                        <!-- Isi Profile -->
                                        <?= $profil['isi_profile'] ?>
                                    </div>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <form
                                        action="<?= base_url('m-admin/profil-desa/simpan/' . $profil['id_profile']) ?>"
                                        method="post" enctype="multipart/form-data">
                                        <textarea name="editor" id="editor" cols="100"
                                            rows="10"><?= $profil['isi_profile'] ?></textarea>

                                        <div class="row">
                                            <div class="col-sm-10">
                                                <hr>
                                            </div>
                                            <div class="col-sm-2"><button class="btn btn-warning btn-block"
                                                    type="submit">Simpan</button></div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal"
                                        action="<?= base_url('m-admin/profil-desa/simpan-informasi/' . $profil['id_profile']) ?>"
                                        method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Kontak</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kontak" name="kontak"
                                                    placeholder="Kontak" value="<?= $profil['kontak'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Alamat Kantor
                                                Desa</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    placeholder="Alamat Kantor Desa"
                                                    value="<?= $profil['alamat_kantor'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <hr>
                                            </div>
                                            <div class="col-sm-2"><button class="btn btn-warning btn-block"
                                                    type="submit">Simpan</button></div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="modal fade" id="modal-warning">
            <div class="modal-dialog">
                <div class="modal-content bg-warning">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Logo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('m-admin/profil-desa/simpan-logo/' . $profil['id_profile']) ?>"
                        method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="file" name="gambar" id="gambar">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-outline-dark">Simpan Perubahan</button>
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