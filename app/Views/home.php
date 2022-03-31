<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="banner">
    <div class="owl-four owl-carousel" itemprop="image">
        <img src="images/page-banner.jpg" alt="Image of Bannner">
        <img src="images/page-banner2.jpg" alt="Image of Bannner">
        <img src="images/page-banner3.jpg" alt="Image of Bannner">
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
            <div class="news-wrap" itemprop="event">
                <div class="news-img-wrap" itemprop="image">
                    <img src="images/latest-new-img.jpg" alt="Latest News Images">
                </div>
                <div class="news-detail" itemprop="description">
                    <a href="">
                        <h1>Orientation Programme for new Students.</h1>
                    </a>
                    <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

                    <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students..
                        Orientatin Programmes for new Students</p>
                </div>
            </div>

            <div class="news-wrap" itemprop="event">
                <div class="news-img-wrap" itemprop="image">
                    <img src="images/latest-new-img.jpg" alt="Latest News Images">
                </div>
                <div class="news-detail" itemprop="description">
                    <a href="">
                        <h1>Orientation Programme for new Students.</h1>
                    </a>
                    <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

                    <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students..
                        Orientatin Programmes for new Students</p>
                </div>
            </div>

            <div class="news-wrap" itemprop="event">
                <div class="news-img-wrap" itemprop="image">
                    <img src="images/latest-new-img.jpg" alt="Latest News Images">
                </div>
                <div class="news-detail" itemprop="description">
                    <a href="">
                        <h1>Orientation Programme for new Students.</h1>
                    </a>
                    <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

                    <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students..
                        Orientatin Programmes for new Students</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>