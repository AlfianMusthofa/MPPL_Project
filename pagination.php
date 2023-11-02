<?php

require 'function.php';

$jumlahDataPerHalaman = 18;
$jumlahData = count(query("SELECT product.id, productImage, productName, productPrice, shop.shopAddress, productStar, productSold FROM product JOIN shop ON product.shopID = shop.id"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
