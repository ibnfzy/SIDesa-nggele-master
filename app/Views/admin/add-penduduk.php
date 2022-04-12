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
                        <li class="breadcrumb-item active">Add Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?= base_url('m-admin/penduduk/store') ?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Data Penduduk</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fullname">NIK</label>
                                    <input type="text" name="nik" id="nik" class="form-control" maxlength="16" required>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Tanggal Lahir</label>
                                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                                        <input name="tanggal_lahir" id="tanggal_lahir" type="text"
                                            class="form-control datetimepicker-input" data-target="#timepicker"
                                            required />
                                        <div class="input-group-append" data-target="#timepicker"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Agama</label>
                                    <select name="agama" id="agama" class="form-control" required>
                                        <option value="">Pilih</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="fullname">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="fullname">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="fullname">RT</label>
                                            <input type="number" name="rt" id="rt" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="fullname">RW</label>
                                            <input type="number" name="rw" id="rw" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="fullname">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="fullname">Pekerjaan</label>
                                    <select name="pekerjaan" id="pekerjaan" class="form-control select2" required>
                                        <option value="">Pilih Pekerjaan</option>
                                        <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                        <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                        <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                        <option value="PENSIUNAN">PENSIUNAN</option>
                                        <option value="PEGAWAI NEGERI SIPIL (PNS)">PEGAWAI NEGERI SIPIL (PNS)</option>
                                        <option value="TENTARA NASIONAL INDONESIA (TNI)">TENTARA NASIONAL INDONESIA
                                            (TNI)</option>
                                        <option value="KEPOLISIAN RI (POLRI)">KEPOLISIAN RI (POLRI)</option>
                                        <option value="PERDAGANGAN">PERDAGANGAN</option>
                                        <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                        <option value="PETERNAK">PETERNAK</option>
                                        <option value="NELAYAN/PERIKANAN">NELAYAN/PERIKANAN</option>
                                        <option value="INDUSTRI">INDUSTRI</option>
                                        <option value="KONSTRUKSI">KONSTRUKSI</option>
                                        <option value="TRANSPORTASI">TRANSPORTASI</option>
                                        <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                        <option value="KARYAWAN BUMN">KARYAWAN BUMN</option>
                                        <option value="KARYAWAN BUMD">KARYAWAN BUMD</option>
                                        <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                        <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                        <option value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                        <option value="BURUH NELAYAN/PERIKANAN">BURUH NELAYAN/PERIKANAN</option>
                                        <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                        <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                        <option value="TUKANG CUKUR">TUKANG CUKUR</option>
                                        <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                        <option value="TUKANG BATU">TUKANG BATU</option>
                                        <option value="TUKANG KAYU">TUKANG KAYU</option>
                                        <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                        <option value="TUKANG LAS/PANDAI BESI">TUKANG LAS/PANDAI BESI</option>
                                        <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                        <option value="TUKANG GIGI">TUKANG GIGI</option>
                                        <option value="PENATA RIAS">PENATA RIAS</option>
                                        <option value="PENATA BUSANA">PENATA BUSANA</option>
                                        <option value="PENATA RAMBUT">PENATA RAMBUT</option>
                                        <option value="MEKANIK">MEKANIK</option>
                                        <option value="SENIMAN">SENIMAN</option>
                                        <option value="TABIB">TABIB</option>
                                        <option value="PARAJI">PARAJI</option>
                                        <option value="PERANCANG BUSANA">PERANCANG BUSANA</option>
                                        <option value="PENTERJEMAH">PENTERJEMAH</option>
                                        <option value="IMAM MASJID">IMAM MASJID</option>
                                        <option value="PENDETA">PENDETA</option>
                                        <option value="PASTOR">PASTOR</option>
                                        <option value="WARTAWAN">WARTAWAN</option>
                                        <option value="USTADZ/MUBALIGH">USTADZ/MUBALIGH</option>
                                        <option value="JURU MASAK">JURU MASAK</option>
                                        <option value="PROMOTOR ACARA">PROMOTOR ACARA</option>
                                        <option value="ANGGOTA DPR-RI">ANGGOTA DPR-RI</option>
                                        <option value="ANGGOTA DPD">ANGGOTA DPD</option>
                                        <option value="ANGGOTA BPK">ANGGOTA BPK</option>
                                        <option value="PRESIDEN">PRESIDEN</option>
                                        <option value="WAKIL PRESIDEN">WAKIL PRESIDEN</option>
                                        <option value="ANGGOTA MAHKAMAH KONSTITUSI">ANGGOTA MAHKAMAH KONSTITUSI</option>
                                        <option value="ANGGOTA KABINET KEMENTERIAN">ANGGOTA KABINET KEMENTERIAN</option>
                                        <option value="DUTA BESAR">DUTA BESAR</option>
                                        <option value="GUBERNUR">GUBERNUR</option>
                                        <option value="WAKIL GUBERNUR">WAKIL GUBERNUR</option>
                                        <option value="BUPATI">BUPATI</option>
                                        <option value="WAKIL BUPATI">WAKIL BUPATI</option>
                                        <option value="WALIKOTA">WALIKOTA</option>
                                        <option value="WAKIL WALIKOTA">WAKIL WALIKOTA</option>
                                        <option value="ANGGOTA DPRD PROVINSI">ANGGOTA DPRD PROVINSI</option>
                                        <option value="ANGGOTA DPRD KABUPATEN/KOTA">ANGGOTA DPRD KABUPATEN/KOTA</option>
                                        <option value="DOSEN">DOSEN</option>
                                        <option value="GURU">GURU</option>
                                        <option value="PILOT">PILOT</option>
                                        <option value="PENGACARA">PENGACARA</option>
                                        <option value="NOTARIS">NOTARIS</option>
                                        <option value="ARSITEK">ARSITEK</option>
                                        <option value="AKUNTAN">AKUNTAN</option>
                                        <option value="KONSULTAN">KONSULTAN</option>
                                        <option value="DOKTER">DOKTER</option>
                                        <option value="BIDAN">BIDAN</option>
                                        <option value="PERAWAT">PERAWAT</option>
                                        <option value="APOTEKER">APOTEKER</option>
                                        <option value="PSIKIATER/PSIKOLOG">PSIKIATER/PSIKOLOG</option>
                                        <option value="PENYIAR TELEVISI">PENYIAR TELEVISI</option>
                                        <option value="PENYIAR TELEVISI">PENYIAR RADIO</option>
                                        <option value="PELAUT">PELAUT</option>
                                        <option value="PENELITI">PENELITI</option>
                                        <option value="SOPIR">SOPIR</option>
                                        <option value="PIALANG">PIALANG</option>
                                        <option value="PARANORMAL">PARANORMAL</option>
                                        <option value="PEDAGANG">PEDAGANG</option>
                                        <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                        <option value="KEPALA DESA">KEPALA DESA</option>
                                        <option value="BIARAWATI">BIARAWATI</option>
                                        <option value="WIRASWASTA">WIRASWASTA</option>
                                        <option value="LAINNYA">LAINNYA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="fullname">Status Pernikahan</label>
                                    <select name="status_pernikahan" id="status_pernikahan" class="form-control"
                                        required>
                                        <option value="">Pilih Status Pernikahan</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="fullname">Golongan Darah</label>
                                    <select name="goldar" id="goldar" class="form-control" required>
                                        <option value="">Pilih Golongan Darah</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="TIDAK TAHU">TIDAK TAHU</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="fullname">Kewarganegaraan</label>
                                    <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                            </div>
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
            </form>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>