<?php
require 'function.php';
$id = $_GET["id"];
$products = query("SELECT product.id, productName, productPrice, productImage, productStar, productRating, productSold, product.Description, shop.shopName, shop.shopImage, shop.shopAddress, etalase.type FROM product JOIN shop ON product.shopID = shop.id JOIN etalase ON product.etalaseID = etalase.id WHERE product.id = $id")[0];

if (isset($_POST["toCart"])) {

    $gambar = $_POST["gambar"];
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
    $shopName = $_POST["shopName"];
    $shopAddress = $_POST["shopAddress"];

    if (tambahKeranjang($_POST) > 0) {
        echo "
                <script>
                    alert('Sukses ditambahkan!');
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
    <title>Document</title>
    <link rel="stylesheet" href="css/productPage.css">
    <script src="https://kit.fontawesome.com/707c864a21.js" crossorigin="anonymous"></script>
    <script src="js/pPage.js" defer></script>
</head>

<body>
    <section class="header">
        <div class="logo">
            <a href="index.php">OurShop</a>
        </div>
        <div class="navlink">
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </section>
    <section class="container">
        <form action="" method="post">
            <div class="image">
                <img src="assets/<?= $products["productImage"] ?>" alt="" class="jumbo">
                <input type="hidden" name="gambar" value="<?= $products["productImage"] ?>">
                <div class="row-image">
                    <img src="assets/indonesia (1).jpg" alt="" class="thumb">
                    <img src="assets/indonesia (2).jpg" alt="" class="thumb">
                </div>
            </div>
            <div class="col">
                <div class="productName">
                    <h4><?= $products["productName"] ?></h4>
                    <input type="hidden" name="productName" value="<?= $products["productName"] ?>">
                </div>
                <div class="productSold">
                    <div class="sold">
                        <p>Terjual <span><?= $products["productSold"] ?></span></p>
                    </div>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <div class="review">
                            <p><?= $products["productStar"] ?> <span><?= $products["productRating"] ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="price">
                    <h3><?= $products["productPrice"] ?></h3>
                    <input type="hidden" name="productPrice" value="<?= $products["productPrice"] ?>">
                </div>
                <div class="detail">
                    <div class="title">
                        <p>Detail</p>
                    </div>
                    <div class="content">
                        <p>Kondisi: <span>Baru</span></p>
                        <p>Min. Pemesanan: <span>1 Buah</span></p>
                        <p>Etalase: <span><?= $products["type"] ?></span></p>
                    </div>
                    <div class="description">
                        <p><?= $products["Description"] ?></p>
                    </div>
                </div>
                <div class="shopContainer">
                    <img src="assets/<?= $products["shopImage"] ?>" alt="">
                    <div class="shop-container">
                        <div class="row">
                            <div class="shop-content">
                                <h4><?= $products["shopName"] ?></h4>
                                <input type="hidden" name="shopName" value="<?= $products["shopName"] ?>">
                                <p class="online">Online kemarin</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <div class="review">
                                    <p>4.8 <span>rata-rata ulasan</span></p>
                                </div>
                            </div>
                            <div class="process">
                                <i class="fa-regular fa-clock"></i>
                                <div class="sub-process">
                                    <p>9 jam <span>pesanan diproses</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pengiriman">
                    <div class="title">
                        <p>Pengiriman</p>
                    </div>
                    <div class="location">
                        <div class="logo">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <p>Dikirim dari <span><?= $products["shopAddress"] ?></span></p>
                        <input type="hidden" name="shopAddress" value="<?= $products["shopAddress"] ?>">
                    </div>
                    <div class="package">
                        <div class="col">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="col">
                            <p class="ongkir">Ongkir reguler 9rb - 13 rb</p>
                            <p class="time">Estimasi tiba 1 - 6 Okt</p>
                            <div class="kurir">
                                <div class="col">
                                    <p class="kurir-title">Kurir lainnya:</p>
                                    <p class="instant">instant</p>
                                    <p class="cod">cod</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo">
                    <div class="title">
                        <p>Promo</p>
                    </div>
                    <div class="box">
                        <p class="cashback">Cashback</p>
                        <h4>5%</h4>
                        <p class="sk">min. Pembelian 50rb</p>
                    </div>
                </div>
            </div>
            <div class="side-panel-container">
                <div class="side-panel">
                    <div class="title">
                        <h4>Atur jumlah dan catatan</h4>
                    </div>
                    <div class="image-container">
                        <img src="assets/<?= $products["productImage"] ?>" alt="">
                        <p><?= $products["productName"] ?></p>
                    </div>
                    <div class="stok">
                        <div class="col">
                            <div class="icon">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <div class="quantity">
                                <p>1</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="col">
                            <p>Stok: loba pisan</p>
                        </div>
                    </div>
                    <div class="total">
                        <div class="row">
                            <p>Subtotal</p>
                            <h3><?= $products["productPrice"] ?></h3>
                        </div>
                    </div>
                    <div class="cta">
                        <button type="submit" name="toCart"><i class="fa-solid fa-plus"></i> Keranjang</button>
                        <!-- <a href="#?id=<?= $products["id"] ?>"><i class="fa-solid fa-plus"></i> Keranjang</a> -->
                        <button type="button" name="toCart">Beli Langsung</button>
                    </div>
                    <div class="btn-grup">
                        <div class="row">
                            <button type="button"><i class="fa-solid fa-message"></i> Chat</button>
                        </div>
                        <div class="row">
                            <button type="button"><i class="fa-solid fa-heart"></i> Wishlist</button>
                        </div>
                        <div class="row">
                            <button type="button"><i class="fa-solid fa-share-nodes"></i> Share</button>
                        </div>
                    </div>
                </div>
                <div class="adv">
                    <img src="assets/indonesia (1).jpg" alt="">
                </div>
            </div>
        </form>
    </section>
</body>

</html>