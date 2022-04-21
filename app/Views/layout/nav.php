<div class="main-header">
    <div class="container">
        <div class="logo-wrap" itemprop="logo">
            <img width="60" src="<?= base_url('admin/uploads/' . $_SESSION['logo']) ?>" alt="Logo Image">
            <!-- <h1>Education</h1> -->
        </div>
        <div class="nav-wrap">
            <nav class="nav-desktop">
                <ul class="menu-list">
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li class="menu-parent">Profile Desa
                        <ul class="sub-menu">
                            <li><a href="<?= base_url('profil') ?>">Profile Desa</a></li>
                            <li><a href="<?= base_url('sejarah') ?>">Sejarah Desa</a></li>
                            <li><a href="<?= base_url('peta') ?>">Peta Desa</a></li>
                            <li><a href="<?= base_url('keunggulan') ?>">Keunggulan Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-parent">Pemerintahan Desa
                        <ul class="sub-menu">
                            <li><a href="<?= base_url('visi-misi') ?>">Visi & Misi</a></li>
                            <li><a href="<?= base_url('pemerintah') ?>">Pemerintahan Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-parent">Pelayanan
                        <ul class="sub-menu">
                            <li><a href="<?= base_url('aspirasi') ?>">Pelayanan Aspirasi</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('berita') ?>">Berita</a></li>
                </ul>
            </nav>
            <div id="bar">
                <i class="fas fa-bars"></i>
            </div>
            <div id="close">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
</div>