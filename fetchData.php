<?php

$conn = mysqli_connect("localhost", "root", "", "php_db");

function fetchData($conn)
{
    $products = mysqli_query($conn, "SELECT product.id, productImage, productName, productPrice, productStar, productSold, shop.shopAddress AS shopAddress, etalase.type AS category FROM product JOIN shop ON product.shopID = shop.id JOIN etalase ON product.etalaseID = etalase.id");

    $data = array(
        'products' => []
    );

    while ($row = mysqli_fetch_assoc($products)) {
        $data['products'][] = $row;
    }

    return json_encode($data);
}

echo fetchData($conn);
