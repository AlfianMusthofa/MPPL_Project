<?php

$conn = mysqli_connect("localhost", "root", "", "php_db");

function tambah($data)
{
    global $conn;
    $username = $data["username"];
    $password = $data["password"];
    $query = "INSERT INTO user_db VALUE ('', '$username', '$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
