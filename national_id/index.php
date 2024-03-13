<?php
if($_POST){
    if($_POST['id'] == 11111){
        $message = "<div class='alert alert-success'>
            <ul>
                <li><b>Name</b>: Aya Ahmed</li>
                <li><b>Phone</b>: 011111</li>
                <li><b>City</b>: Cairo, Egypt</li>
                <li><b>Gender</b>: Female</li>
                <li><b>Age</b>: 25</li>
            </ul>
        </div>";
    }
    elseif($_POST['id'] == 22222){
        $message = "<div class='alert alert-success'>
            <ul>
                <li><b>Name</b>: Ahmed Hussen</li>
                <li><b>Phone</b>: 022222</li>
                <li><b>City</b>: Giza, Egypt</li>
                <li><b>Gender</b>: Male</li>
                <li><b>Age</b>: 30</li>
            </ul>
        </div>";
    }
    elseif($_POST['id'] == 33333){
        $message = "<div class='alert alert-success'>
            <ul>
                <li><b>Name</b>: Omar Osama</li>
                <li><b>Phone</b>: 033333</li>
                <li><b>City</b>: Alex, Egypt</li>
                <li><b>Gender</b>: Male</li>
                <li><b>Age</b>: 27</li>
            </ul>
        </div>";
    }
    else{
        $message = "<div class='alert alert-danger'>User Not Found</div>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>National ID</title>
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
                National ID
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="form-group">
                      <label for="">National ID</label>
                      <input type="number" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger btn-sm">Submite</button>
                    </div>
                </form>
                <?php echo $message ?? ""; ?>
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