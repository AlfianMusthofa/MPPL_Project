<?php
require 'function.php';
$cart = mysqli_query($conn, "SELECT * FROM cart");
$totalHarga = 0;
$ongkosKirim = 30000;
$asuransi = 5000;
$biayaJasa = 2500;
foreach ($cart as $item) {
    $totalHarga += $item['productPrice'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran AltairShop</title>
    <script src="https://kit.fontawesome.com/707c864a21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/payment.css">
    <script src="js/payment.js" defer></script>
</head>

<body>
    <section class="header">
        <div class="logo">
            <a href="#">Toko<span>Shop</span></a>
        </div>
        <div class="navlink">
            <a href="#" id="searchButton"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
        </div>
        <form action="" method="post" class="form">
            <input type="search" name="keyword" id="searchbox" placeholder="Mau cari apa?" autocomplete="off">
            <button type="submit" name="submit">Cari</button>
        </form>
    </section>
    <section class="container">
        <div class="title">
            <p>Selesaikan pembayaran dalam</p>
            <h4 id="countdown">23:59:59</h4>
            <p class="sc">Batas akhir pembayaran</p>
            <p class="date" id="currentDate">Minggu, 12 Desember 2023</p>
        </div>
        <div class="box">
            <div class="method">
                <p>Indomaret / Ceriamart</p>
                <img src="assets/Logo_Indomaret.png" alt="">
            </div>
            <div class="sub-box">
                <div class="code">
                    <div class="payment-code">
                        <p>Kode Pembayaran</p>
                        <h4>TDR-3000</h4>
                    </div>
                    <div class="copy">
                        <button type="button">Salin <i class="fa-solid fa-copy"></i></button>
                    </div>
                </div>
                <div class="total">
                    <div class="sub-total">
                        <p>Total Pembayaran</p>
                        <h4>IDR <?= number_format($totalHarga + $asuransi + $biayaJasa + $ongkosKirim, 0, ',', '.') ?></h4>
                    </div>
                    <div class="cta">
                        <a href="#">Lihat detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttons">
            <a href="#">Cek Status Pembayaran</a>
            <a href="index.php">Belanja Lagi</a>
        </div>
    </section>
</body>

</html>