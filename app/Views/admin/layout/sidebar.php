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

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Profile Desa -->
                <li class="nav-item">
                    <a href="#" class="nav-link <?= $active = ($parentdir == 'Profil Desa') ? 'active' : '' ?>">
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
                    <a href="#" class="nav-link <?= $active = ($parentdir == 'Pemerintah Desa') ? 'active' : '' ?>">
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
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pemerintahan Desa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Pelayanan -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Pelayanan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pelayanan Administrasi Persuratan</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pelayanan Aspirasi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Berita
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