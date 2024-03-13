<!doctype html>
<html lang="en">
  <head>
    <title>Buy</title>
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
                Buy
            </div>
            <div class="col-6 offset-3">
                <form action="invoice.php" method="post">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">Phone</label>
                      <input type="number" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="prodcut">Product</label>
                        <select name="product" class="form-control" id="product">
                            <option value="laptop">Laptop</option>
                            <option value="mobile">Mobile</option>
                            <option value="tv">TV</option>
                            <option value="tshirt">Tshirt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" class="form-control" id="city">
                            <option value="cairo">Cairo</option>
                            <option value="alex">Alex</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger btn-sm">Buy Now</button>
                    </div>
                </form>
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