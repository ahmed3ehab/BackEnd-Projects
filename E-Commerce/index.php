<?php
$products = [
    [
        'id' => 1,
        'name' => 'laptop',
        'price' => [
            15000, 20000
        ],
        'image' => 'images/1.jfif'
    ],
    [
        'id' => 2,
        'name' => 'mobile',
        'price' => [
            12000, 10000
        ],
        'image' => 'images/2.jfif'
    ],
    [
        'id' => 3,
        'name' => 'tv',
        'price' => [
            8000, 6000
        ],
        'image' => 'images/3.jfif'
    ],
];
$title = "Prodcuts";
include "layout/header.php";
include "layout/navbar.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center h1 text-dark mt-5">
                Products
            </div>
            <?php foreach ($products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?= $product['image'] ?>" alt="" class="w-100">
                            <h4 class="card-title"><?= $product['name'] ?></h4>
                        </div>
                        <div class="card-footer text-muted">
                            <p class="card-text">
                                <?php foreach ($product['price'] as $price) {
                                    echo $price . 'EGP <br>';
                                } ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php 
    include "layout/footer.php";
    include "layout/scripts.php";
?>