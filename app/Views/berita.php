<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="page-content">
    <div class="container">
        <div class="grid-container" itemscope itemtype=" http://schema.org/Event">
            <?php foreach ($berita as $item) : ?>
            <div class="grid-box-wrap">
                <div class="grid-img" itemprop="image">
                    <img width="370" style="min-height: 244px; max-height: 244px;"
                        src="<?= base_url('admin/uploads/' . $item['thumbnail_berita']) ?>" alt="travel images">
                </div>
                <div class="grid-body">
                    <h4 itemprop="date"><?= $item['tgl_upload'] ?></h4>
                    <hr>
                    <h1 itemprop="name"><?= $item['jdl_berita'] ?></h1>
                    <br>
                    <p itemprop="description"></p>

                    <a href="<?= base_url('berita/' . $item['id_berita']) ?>">Baca Berita <i
                            class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
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
        <!-- Pagination -->
        <?= $pager->links('berita', 'berita_page') ?>

    </div>
</div>

<?= $this->endSection() ?>