<?php

require 'function.php';

function fetch($conn)
{
    $result = mysqli_query($conn, "SELECT product.id, productImage, productName, productPrice, shop.shopAddress, productStar, productSold FROM product JOIN shop ON product.shopID = shop.id");

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return json_encode($data);
}

echo fetch($conn);
