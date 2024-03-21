<?php
$users = [
    [
        'id' => 1,
        'name' => 'esraa',
        'email' => 'esraa@gmail.com',
        'password' => 123456,
        'gender' => 'f',
    ],
    [
        'id' => 2,
        'name' => 'fatma',
        'email' => 'fatma@gmail.com',
        'password' => 123456,
        'gender' => 'f',
    ],
    [
        'id' => 3,
        'name' => 'ahmed',
        'email' => 'ahmed@gmail.com',
        'password' => 123456,
        'gender' => 'm',
    ]
];
$title = "login";
include_once "layout/header.php";
include_once "App/Http/Middleware/Guest.php";
include_once "layout/navbar.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST)) {
    $error = [];
    if (empty($_POST['email'])) {
        $error['email'] = "<p class='text-danger font-weight-bold'>* Email Is Required</p>";
    }
    if (empty($_POST['password'])) {
        $error['password'] = "<p class='text-danger font-weight-bold'>* Password Is Required</p>";
    }
    if (empty($error)) {
        foreach ($users as $user) {
            if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
                $_SESSION['user'] = $user;
                header('location:index.php');
                die;
            }
        }
        $error['email-password'] = "<p class='text-danger font-weight-bold'>* Wrong Email or Password</p>";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center h1 text-dark mt-5">
            Login
        </div>
        <div class="col-4 offset-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" value="<?= $_POST['email'] ?? "" ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    <?= $error['email'] ?? "" ?>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                    <?= $error['password'] ?? "" ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark">Login</button>
                </div>
            </form>
            <?= $error['email-password'] ?? "" ?>
        </div>
    </div>
</div>
<?php
include_once "layout/footer.php";
include_once "layout/scripts.php";
?>