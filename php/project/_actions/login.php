<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if ($email === 'admin@gmail.com' and $password === '123456') {
    $_SESSION['user'] = ['username' => 'Admin'];
    header('location: ../profile.php');
} else {
    header('location: ../index.php?incorrect=1');
}