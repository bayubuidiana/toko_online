<?php
require_once('config.php');
if (isset($_GET['kode_barang'])) {
    $kode_barang = $_GET['kode_barang'];
    $query ="INSERT INTO keranjang 
    (user_name,kode_barang,qty,tanggal) 
    VALUES 
    ('admin','$kode_barang',1,NOW())";
    
    mysqli_query($conn, $query);
    header("Location:index.php");
}
