<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="page-content" itemscope itemtype=" http://schema.org/Blog">
    <div class="container">
        <article class="page-article" itemprop="blogPost">
            <h1 itemprop="about"><?= $title ?></h1>
            <span><a href="#">Diposting pada tanggal <?= $tgl_upload ?></a></span>
            <img width="250" itemprop="image" src="<?= base_url('admin/uploads/' . $gambar) ?>" alt="Image">
            <?= $isi ?>
            <div class="share-section">
                <span>Share Via<a href="https://www.facebook.com/sharer.php?u=<?= base_url('profil') ?>"><i
                            class="fab fa-facebook-f"></i><a
                            href="https://twitter.com/intent/tweet?url=<?= base_url('profil') ?>"><i
                                class="fab fa-twitter"></i></a></span>
            </div>
        </article>

        <aside>
            <!-- New Letter Ends -->
            <div class="recent-post">
                <h2>Berita terbaru</h2>
                <div class="post">
                    <?php foreach ($baru as $get) : ?>
                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img width="70" style="min-height: 90px; max-height: 90px;"
                                src="<?= base_url('admin/uploads/' . $get['thumbnail_berita']) ?>" alt="Post Images">
                        </div>
                        <a href="<?= base_url('berita/' . $get['id_berita']) ?>">
                            <div class="post-content">
                                <h3><?= $get['jdl_berita'] ?></h3>
                                <hr>
                                <p><?= $get['tgl_upload'] ?></p>
                            </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </aside>
    </div>
</div>

<?= $this->endSection() ?>