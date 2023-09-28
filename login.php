<?php
require 'function.php';
// session_start();

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $cek = mysqli_query($conn, "SELECT * FROM user_db WHERE username = '$username'");

    if (mysqli_num_rows($cek) === 1) {

        $nama = mysqli_fetch_assoc($cek);

        if (password_verify($password, $nama["password"])) {

            // $_SESSION["login"] = true;
            header("Location: index2.php");
            exit;
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
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section class="container">
        <form action="" method="post">
            <img src="assets/indonesia (2).jpg" alt="">
            <div class="content">
                <div class="title">
                    <h3>Hello Friend</h3>
                </div>
                <div class="input-field">
                    <label for="username">Username *</label>
                    <input type="text" name="username" placeholder="Input Username" autocomplete="OFF" autofocus required>
                </div>
                <div class="input-field">
                    <label for="password">Password *</label>
                    <input type="password" name="password" placeholder="Input Password" autocomplete="OFF" required>
                </div>
                <div class="cookie">
                    <input type="checkbox" name="ingatsaya" id="">
                    <p>Ingat saya</p>
                </div>
                <button type="submit" name="login">LOGIN</button>
                <div class="link">
                    <a href="#">Lupa password</a>
                    <a href="signup.php">Belum punya akun?</a>
                </div>
                <div class="cp">
                    <p>Image from Unsplash</p>
                </div>
            </div>
        </form>
    </section>
</body>

</html>