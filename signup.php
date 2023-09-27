<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/707c864a21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <section class="container">
        <form action="" method="post">
            <img src="assets/bg.jpg" alt="">
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
                <div class="input-field">
                    <label for="password2">Confirm Password *</label>
                    <input type="password" name="password2" placeholder="Input Password" autocomplete="OFF" required>
                </div>
                <button type="submit" name="signup">SIGNUP</button>
                <div class="link">
                    <a href="login.php">Sudah punya akun?</a>
                </div>
            </div>
        </form>
    </section>
</body>

</html>