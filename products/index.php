<?php
$products =[
    [
        'id' => 1,
        'name' => 'laptop',
        'price' => [
            15000, 20000
        ],
        'image' => '1.jfif'
    ],
    [
        'id' => 2,
        'name' => 'mobile',
        'price' => [
            12000, 10000
        ],
        'image' => '2.jfif'
    ],
    [
        'id' => 3,
        'name' => 'tv',
        'price' => [
            8000, 6000
        ],
        'image' => '3.jfif'
    ],
]
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Prodeucts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center display-3 text-dark mt-5">Prodeucts</div>
            <?php foreach($products as $product) { ?>
            <div class="col-14">
                <div class="card">
                    <div class="card-body">
                        <img src="<?=$product['image']?>" alt="" class="w-100">
                        <h4 class="card-title"><?=$product['name']?></h4>
                    </div>
                    <div class="card-footer text-muted">
                        <p class="card-text">
                            <?php foreach($product['price'] as $price) {
                                echo $price . 'EGP <br>';
                            }?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>