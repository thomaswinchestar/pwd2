<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: index.php");
        exit();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <m                              eta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="max-width: 800px">
        <h1 class="h3 mt-4 mb-3">Profile</h1>
        <ul class="list-group mb-4">
            <li class="list-group-item">Name: Alice</li>
            <li class="list-group-item">Email: alice@gmail.com</li>
            <li class="list-group-item">Phone: 2343563534</li>
            <li class="list-group-item">Address: Some Address</li>
        </ul>
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>