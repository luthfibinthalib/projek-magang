<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('user baru berhasil ditambahkan! ');
            </script>";
    } else
        echo mysqli_error($conn);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="csslogin.css">
    <title>Registrasi</title>
</head>

<body style="background: #3ab5c5;">

    <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
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
                <button type="submit" name="register" class="btn">Sign up</button>
            </div>
            <!-- <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
 -->

        </form>
    </div>
</body>

</html>