<?php
require 'function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $cek = mysqli_query($conn, "SELECT * FROM user_db WHERE username = '$username'");

    if (mysqli_num_rows($cek) === 1) {

        $nama = mysqli_fetch_assoc($cek);

        if (password_verify($password, $nama["password"])) {

            echo "
                <script>
                alert('Anjay login');
                </script>
                ";
        }
    } else {
        echo "
                <script>
                alert('Username atau Password salah!');
                </script>
                ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/707c864a21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <section class="container">
        <form action="" method="post">
            <div class="col">
                <img src="assets/bg.jpg">
            </div>
            <div class="col">
                <div class="caption">
                    <div class="title">
                        <h1>Hello! Friend!</h1>
                    </div>
                    <div class="input-field">
                        <p>Username*</p>
                        <input type="text" name="username" placeholder="Enter your Username" autocomplete="OFF" autofocus required>
                    </div>
                    <div class="input-field">
                        <p>Password*</p>
                        <input type="password" name="password" placeholder="Enter your Password" required>
                    </div>
                    <div class="cookie">
                        <input type="checkbox" name="ingatsaya" id="ingatsaya" class="check">
                        <p>Ingat saya</p>
                    </div>
                    <button type="submit" name="login">LOGIN</button>
                    <div class="register">
                        <a href="#">Lupa password?</a>
                        <a href="#">Tidak punya akun?</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>