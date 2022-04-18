<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="banner">
    <div class="owl-four owl-carousel" itemprop="image">
        <?php foreach ($slider as $item) : ?>
        <img width="1366px" src="<?= base_url('admin/uploads/' . $item['gambar']) ?>" alt="Image of Bannner">
        <?php endforeach ?>
    </div>
    <div class="container" itemprop="description">
        <h1>Selamat Datang</h1>
        <h3>di Website Resmi Desa Nggele</h3>
    </div>
    <div id="owl-four-nav" class="owl-nav"></div>
</div>
<!-- Closed WhyUs section -->
<!-- End of Others talk -->
<section class="page-heading">
    <div class="container">
        <h2>latest news</h2>
    </div>
</section>
<section class="latest-news">
    <div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
        <div class="owl-two owl-carousel">
            <?php foreach ($berita as $item) : ?>
            <div class="news-wrap" itemprop="event">
                <div class="news-img-wrap" itemprop="image">
                    <img width="377px" src="<?= base_url('admin/uploads/' . $item['thumbnail_berita']) ?>"
                        alt="Latest News Images">
                </div>
                <div class="news-detail" itemprop="description">
                    <a href="">
                        <h1><?= $item['jdl_berita'] ?></h1>
                    </a>
                    <h2 itemprop="startDate"><?= $item['tgl_upload'] ?></h2>

                    <hr>
                    <br>

                    <p>Kategori - <?= $item['jenis_berita'] ?></p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>