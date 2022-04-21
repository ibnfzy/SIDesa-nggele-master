<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="page-content" itemscope itemtype=" http://schema.org/Blog">
    <div class="container">
        <article class="page-article" itemprop="blogPost">
            <div class="submit-testimonials">
                <h1>Form Pelayanan Aspirasi</h1>
                <hr>
                <form action="<?= base_url('aspirasi/store') ?>" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik anda">
                    </div>
                    <div class="form-group">
                        <label for="aspirasi">Aspirasi</label>
                        <textarea class="form-control" id="aspirasi" name="aspirasi" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg float-right">Submit</button>
                </form>
            </div>
            <hr>
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