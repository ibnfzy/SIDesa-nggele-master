<?= $this->extend('admin/base') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="<?= base_url('m-admin/penduduk') ?>" class="btn btn-block btn-primary btn-flat">Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Table Penduduk</li>
                        <li class="breadcrumb-item active">Detail Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Data Penduduk</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fullname">NIK</label>
                                    <input type="text" name="nik" id="nik" class="form-control" maxlength="16"
                                        value="<?= $penduduk['NIK'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Tanggal Lahir</label>
                                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                                        <input value="<?= $penduduk['tanggal_lahir'] ?>" name="tanggal_lahir"
                                            id="tanggal_lahir" type="text" class="form-control datetimepicker-input"
                                            data-target="#timepicker" disabled />
                                        <div class="input-group-append" data-target="#timepicker"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Agama</label>
                                    <select name="agama" id="agama" class="form-control" disabled>
                                        <option value="">Pilih</option>
                                        <option value="Islam"
                                            <?= $select = ($penduduk['agama'] == 'Islam') ? 'Selected' : ''; ?>>Islam
                                        </option>
                                        <option value="Kristen"
                                            <?= $select = ($penduduk['agama'] == 'Kristen') ? 'Selected' : ''; ?>>
                                            Kristen</option>
                                        <option value="Katolik"
                                            <?= $select = ($penduduk['agama'] == 'Katolik') ? 'Selected' : ''; ?>>
                                            Katolik</option>
                                        <option value="Hindu"
                                            <?= $select = ($penduduk['agama'] == 'Hindu') ? 'Selected' : ''; ?>>Hindu
                                        </option>
                                        <option value="Buddha"
                                            <?= $select = ($penduduk['agama'] == 'Buddha') ? 'Selected' : ''; ?>>Buddha
                                        </option>
                                        <option value="Konghucu"
                                            <?= $select = ($penduduk['agama'] == 'Konghucu') ? 'Selected' : ''; ?>>
                                            Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="fullname">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        value="<?= $penduduk['nama'] ?>" disabled>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="fullname">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                class="form-control" value="<?= $penduduk['tempat_lahir'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="fullname">RT</label>
                                            <input type="number" name="rt" id="rt" class="form-control" disabled
                                                value="<?= $penduduk['rt'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="fullname">RW</label>
                                            <input type="number" name="rw" id="rw" class="form-control" disabled
                                                value="<?= $penduduk['rw'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" disabled
                                        value="<?= $penduduk['alamat'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="fullname">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" disabled>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki"
                                            <?= $selected = ($penduduk['jenis_kelamin'] == 'Laki-laki') ? 'Selected' : ''; ?>>
                                            Laki-laki</option>
                                        <option value="Perempuan"
                                            <?= $selected = ($penduduk['jenis_kelamin'] == 'Perempuan') ? 'Selected' : ''; ?>>
                                            Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="fullname">Pekerjaan</label>
                                    <select name="pekerjaan" id="pekerjaan" disabled class="form-control select2">
                                        <option value="" selected><?= $penduduk['pekerjaan'] ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="fullname">Status Pernikahan</label>
                                    <select name="status_pernikahan" id="status_pernikahan" disabled
                                        class="form-control">
                                        <option value="" selected><?= $penduduk['status_pernikahan'] ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="fullname">Golongan Darah</label>
                                    <select name="goldar" id="goldar" disabled class="form-control">
                                        <option value="" selected><?= $penduduk['goldar'] ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="fullname">Kewarganegaraan</label>
                                    <select name="kewarganegaraan" id="kewarganegaraan" disabled class="form-control">
                                        <option value="" selected><?= $penduduk['kewarganegaraan'] ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-10"></div>
                            <div class="col-2"></div>
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