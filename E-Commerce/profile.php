<?php
$title = "Profile";
include "layout/header.php";
include_once "App/Http/Middleware/Auth.php";
if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST){
    $errors =[];
    if(empty($_POST['name'])){
        $errors['name'] = "<p class='text-danger font-weight-bold'>* Name Is Required</p>";
    }
    if(empty($_POST['email'])){
        $errors['email'] = "<p class='text-danger font-weight-bold'>* Email Is Required</p>";
    }
    if(empty($_POST['gender'])){
        $errors['gender'] = "<p class='text-danger font-weight-bold'>* Gender Is Required</p>";
    }
    if (empty($errors)){
        $_SESSION['user']['name'] = $_POST['name'];
        $_SESSION['user']['email'] = $_POST['email'];
        $_SESSION['user']['gender'] = $_POST['gender'];
        $success = "<div class='alert alert-success text-center'>Data Updated Successfully</div>";
    }
}
include 'layout/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center h1 text-dark mt-5">
            My Account
        </div>
        <div class="col-12">
            <?= $success ?? "" ?>
        </div>
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" value="<?= $_SESSION['user']['name'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                  <?= $errors['name'] ?? "" ?>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" value="<?= $_SESSION['user']['email'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                  <?= $errors['email'] ?? "" ?>
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select name="gender" id="dender" class="form-control">
                    <option <?= $_SESSION['user']['gender'] == 'm' ? 'selected' : '' ?> value="m">Male</option>
                    <option <?= $_SESSION['user']['gender'] == 'f' ? 'selected' : '' ?> value="f">Female</option>
                  </select>
                  <?= $errors['gender'] ?? "" ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "layout/footer.php";
include 'layout/scripts.php';
?>