<div class="top-header" style="background-color: yellow;">
    <div class="container">
        <div class="top-header-left">
            <div class="top-header-block">
                <a style="color: black;" href="#" itemprop="email"><i class="fas fa-envelope"></i>
                    <?= $_SESSION['email'] ?></a>
            </div>
            <div class="top-header-block">
                <a style="color: black;" href="#" itemprop="telephone"><i class="fas fa-phone"></i>
                    <?= $_SESSION['kontak'] ?></a>
            </div>
        </div>
        <div class="top-header-right">
            <div class="social-block">
                <ul class="social-list">
                    <!-- <li><a style="color: black;" href=""><i class="fab fa-whatsapp"></i></a></li>
                    <li><a style="color: black;" href=""><i class="fab fa-facebook-square"></i></a></li>
                    <li><a style="color: black;" href=""><i class="fab fa-facebook-messenger"></i></a></li> -->
                </ul>
            </div>
            <div class="login-block">
                <a style="color: black;" href="<?= base_url('m-admin') ?>">Login Administrator</a>
            </div>
        </div>
    </div>
</div>