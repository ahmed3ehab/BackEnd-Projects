<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo "<h1>Method Not Allwed 405</h1>";
    exit;
}
define('VAT', 0.14);
switch($_POST['product']){
    case 'laptop':
        $price = 15000;
        $discount = 0.2;
        break;
    case 'mobile':
        $price = 12000;
        $discount = 0.1;
        break;
    case 'tv':
        $price = 10000;
        $discount = 0.05;
        break;
    default:
        $price = 250;
        $discount = 0;
}
switch($_POST['city']){
    case 'cairo':
        $delivery = 0;
        break;
    case 'alex':
        $price = 50;
        break;
    default:
        $delivery = 200;
}
$vatPrice = $price * VAT;
$piceAfterVat = $price + $vatPrice;
$discountValue = $discount * $piceAfterVat;
$priceAfterDiscount = $piceAfterVat - $discountValue;
$totalPrice = $priceAfterDiscount + $delivery;
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Invoice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-danger h1">
                InVoice
            </div>
            <div class="col-4 offset-4 mt-5">
                <ul class="alert alert-success">
                    <li>Name : <?= $_POST['name'] ?></li>
                    <li>Phone : <?= $_POST['phone'] ?></li>
                    <li>City : <?= $_POST['city'] ?></li>
                    <li>Product : <?= $_POST['product'] ?></li>
                    <li>Delivery Tax : <?= $delivery ?></li>
                    <li>Price : <?= $price ?> EGP</li>
                    <li>VAT : <?= VAT * 100 ?> %</li>
                    <li>VAT Price: <?= $vatPrice ?> EGP</li>
                    <li>Price After VAT: <?= $piceAfterVat ?> EGP</li>
                    <li>Discount : <?= $discount * 100 ?> %</li>
                    <li>Discount Value : <?= $discountValue ?> EGP</li>
                    <li>Price After Discount : <?= $priceAfterDiscount ?> EGP</li>
                    <li>Total Price : <?= $totalPrice ?> EGP</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>