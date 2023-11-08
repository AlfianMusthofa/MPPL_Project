<?php
require 'function.php';
$cart = mysqli_query($conn, "SELECT * FROM cart");
$jumlahData = count(query("SELECT * FROM cart"));
$totalHarga = 0;
foreach ($cart as $item) {
    $totalHarga += $item['productPrice'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/shipment.css">
</head>

<body>
    <section class="header">
        <div class="logo">
            <a href="index.php">OurShop</a>
        </div>
    </section>
    <div class="title">
        <h3>Chekout</h3>
    </div>
    <section class="row">
        <div class="col">
            <p class="alamat">Alamat Pengiriman</p>
            <div class="address">
                <p class="name">Fadil Taufiqurohmat (Rumah)</p>
                <p class="phone">08123456789</p>
                <p class="sub-address">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, iste.</p>
            </div>
            <div class="product">
                <?php foreach ($cart as $product) : ?>
                    <div class="card">
                        <div class="shop-info">
                            <div class="shop-name">
                                <img src="assets/badge_os.png" alt="">
                                <p class="shopName"><?= $product["shopName"] ?></p>
                            </div>
                            <p class="shopAddress"><?= $product['shopAddress'] ?></p>
                        </div>
                        <div class="product-row">
                            <div class="pro-col">
                                <img src="assets/MPPL/<?= $product['productImage'] ?>" alt="">
                            </div>
                            <div class="pro-col">
                                <p class="productName"><?= $product['productName'] ?></p>
                                <p class="productPrice">IDR <?= number_format($product["productPrice"], 0, ',', '.'); ?></p>
                            </div>
                        </div>
                        <div class="total">
                            <p>Subtotal</p>
                            <p class="price">IDR <?= number_format($product["productPrice"], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col">
            <div class="box">
                <h4>Ringkasan Belanja</h4>
                <div class="sub-box">
                    <div class="total-harga">
                        <p>Total Harga(Rp)</p>
                        <p>Rp.222.000</p>
                    </div>
                    <div class="total-harga">
                        <p>Total Ongkos Kirim</p>
                        <p>Rp.222.000</p>
                    </div>
                    <div class="total-harga">
                        <p>Asuransi Pengiriman</p>
                        <p>Rp.222.000</p>
                    </div>
                    <div class="total-harga">
                        <p>Biaya Jasa Aplikasi</p>
                        <p>Rp.222.000</p>
                    </div>
                </div>
                <div class="total-price">
                    <h3>Total Belanja</h3>
                    <h3>Rp 200.000</h3>
                </div>
                <div class="cta">
                    <button type="submit">Pilih Pembayaran</button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>