<?php
// ceck if user authenticated user to show login page 
if (!empty($_SESSION['user'])) {
    header('location:index.php');
    die;
}