<?php 
// ceck if user guest
if (empty($_SESSION['user'])) {
    // prevent guest user to show login page 
    header('location:login.php');
    die;
}