<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'toko_online';

$conn = new mysqli(

    $server_name,
    $user_name,
    $password,
    $db_name,
);

if ($conn->connect_error) {
    error_log("Koneksi database gagal: " . $conn->connect_error);
    die("Koneksi gagal.");
}
?>