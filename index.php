<?php
require 'function.php';
$product = mysqli_query($conn, "SELECT * FROM product");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/707c864a21.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="header">
        <div class="logo">
            <a href="#">Omni <span>Marketplace</span></a>
        </div>
        <div class="navlink">
            <a href="#">Home</a>
            <a href="#products">Products</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </section>
    <section class="home">
        <img src="assets/hero4.png" alt="">
        <div class="home-text">
            <div class="content">
                <h4>Trade - in - offer</h4>
                <h3>Super value deals</h3>
                <h3 style="color: #009999;">On all products</h3>
                <p>Save more with coupons & up to 70% off!</p>
            </div>
            <div class="button">
                <a href="#products"><i class="fa-solid fa-cart-shopping"></i> Shop now</a>
            </div>
        </div>
    </section>
    <section class="hero">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/indonesia (1).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/indonesia (2).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/indonesia (3).jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </section>
    <section class="product" id="products">
        <div class="title">
            <h4>Yuk Belanja!</h4>
        </div>
        <div class="baris">
            <?php foreach ($product as $row) : ?>
                <a href="productPage.php?id=<?= $row["id"] ?>">
                    <div class="kartu">
                        <img src="assets/<?= $row["productImage"] ?>" alt="">
                        <div class="caption">
                            <div class="product-title">
                                <p><?= $row["productName"] ?></p>
                            </div>
                            <div class="price">
                                <h4><?= $row["productPrice"] ?></h4>
                            </div>
                            <div class="address">
                                <img src="assets/badge_os.png" alt="">
                                <p>Kota Jakarta</p>
                            </div>
                            <div class="rating">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="sold">
                                    <p> <?= $row["productStar"] ?> | <?= $row["productSold"] ?> terjual</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>