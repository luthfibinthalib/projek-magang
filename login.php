<?php
session_start();
require 'functions.php';
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result =  mysqli_query($conn, "SELECT * FROM `users` WHERE username = '$username'");

    // cek username 
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csslogin.css">
    <title>Login</title>
</head>

<body style="background: #5984a6;">

    <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style:italic ">Username / Password salah</p>
        <?php endif ?>
        <form action="" method="post" class="login-email">
            <div class="input-group">

                <label for="username">Username :</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="input-group">
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2" required>
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn btn-info">Sign in</button>
            </div>
</body>

</html>