<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="footer-first-section">
        <div class="container">
            <div class="box-wrap" itemprop="about">
                <header>
                    <h1>Kontak</h1>
                </header>

                <h4><a href="#"><i class="fas fa-phone"></i> <?= $_SESSION['kontak'] ?></a></h4>
                <h4><a href="#"><i class="fas fa-envelope"></i>
                        <?= $_SESSION['email'] ?></a></h4>
                <h4><a href="#"><i class="fas fa-map-marker-alt"></i><?= $_SESSION['alamat_kantor'] ?></a></h4>
            </div>

            <div class="box-wrap">
            </div>

            <div class="box-wrap">

            </div>

            <div class="box-wrap">

            </div>

        </div>
    </div>
    <!-- End of box-Wrap -->
    <div class="footer-second-section">
        <div class="container">
            <hr class="footer-line">
        </div>
    </div>
    <div class="footer-last-section">
        <div class="container">
            <p>Copyright 2021 &copy; JULTDEV<span> | </span> Theme designed and developed by <a href="#"> JULTDEV
                    Team</a></p>
        </div>
    </div>
</footer>