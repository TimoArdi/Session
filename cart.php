<?php
session_start();
require 'inc/data/products.php';
require 'inc/head.php';
if (empty($_SESSION['name'])){
    header('Location: login.php');
}
if (!empty($_SESSION['name'])): ?>
<section class="cookies container-fluid">
    <div class="row">
        <h2 class="text-center">Mon panier :</h2>
        <?php
        foreach ($_SESSION['cart'] as $cartCookie):?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $cartCookie; ?>.jpg" alt="<?= $catalog[$cartCookie]['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?=$catalog[$cartCookie]['name']; ?></h3>
                        <p><?=$catalog[$cartCookie]['description']; ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach;?>
    </div>
</section>
<?php endif;?>
<?php require 'inc/foot.php'; ?>