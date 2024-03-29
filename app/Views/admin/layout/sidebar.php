<aside class="main-sidebar sidebar-dark-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('m-admin') ?>" class="brand-link" style="background-color: #f9dd07; color: black;">
        <img src="<?= $logo = (isset($_SESSION['logo'])) ? base_url('admin/uploads/' . $_SESSION['logo']) : base_url('admin/dist/img/logodesa.png') ?>"
            alt="Desa Nggele Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Desa Nggele</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $gambar = ($_SESSION['gambar'] != null) ? base_url('admin/uploads/' . $_SESSION['gambar']) : base_url('admin/dist/img/avatar5.png')  ?>"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION['fullname'] ?></a>
            </div>
        </div>
        <?php if (isset($parentdir)) {
            $dir = $parentdir;
        } else {
            $dir = '';
        } ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link <?= $active = ($dir == 'Kependudukan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Kependudukan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/penduduk') ?>"
                                class="nav-link <?= $active = ($title == 'Table Penduduk') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penduduk</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Profile Desa -->
                <li class="nav-item">
                    <a href="#" class="nav-link <?= $active = ($dir == 'Profil Desa') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Profile Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/profil-desa/1') ?>"
                                class="nav-link <?= $active = ($title == 'Profil Desa') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/sejarah-desa/1') ?>"
                                class="nav-link <?= $active = ($title == 'Sejarah Desa') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sejarah Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/peta-desa/1') ?>"
                                class="nav-link <?= $active = ($title == 'Peta Desa') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Peta Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/keunggulan-desa/') ?>"
                                class="nav-link <?= $active = ($title == 'Keunggulan Desa') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Keunggulan Desa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Pemerintahan Desa -->
                <li class="nav-item">
                    <a href="#" class="nav-link <?= $active = ($dir == 'Pemerintah Desa') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Pemerintahan Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/visimisi/1') ?>"
                                class="nav-link <?= $active = ($title == 'Visi & Misi Desa') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi & Misi</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/pemerintah/1') ?>"
                                class="nav-link <?= $active = ($title == 'Pemerintah Desa') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pemerintahan Desa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Pelayanan -->
                <li class="nav-item">
                    <a href="#" class="nav-link <?= $active = ($dir == 'Pelayanan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Pelayanan Surat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/pelayanan-surat') ?>"
                                class="nav-link <?= $active = ($title == 'Table Surat') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Format Surat</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('m-admin/arsip-surat') ?>"
                                class="nav-link <?= $active = ($title == 'Pelayanan Surat') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Arsip Surat</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('m-admin/aspirasi') ?>"
                        class="nav-link <?= $active = ($title == 'Pelayanan Aspirasi') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Pelayanan Aspirasi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('m-admin/berita') ?>"
                        class="nav-link <?= $active = ($title == 'Berita Desa') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('m-admin/slider') ?>"
                        class="nav-link <?= $active = ($title == 'Table Slider') ? 'active' : '' ?>">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Slide Show
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('m-admin/admin') ?>"
                        class="nav-link <?= $active = ($title == 'Admin') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>