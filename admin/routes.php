<?php
if (!isset($_GET['page'])) {
    $page = 'home';
} else {
    $page = $_GET['page'];
}

if (!isset($_GET['id'])) {
    $id = '';
} else {
    $id = $_GET['id'];
}


switch ($page) {
    case 'products':
        if ($id == '') {
            require_once('main/barang/index.php');
        } else {
            require_once("main/barang/ubah.php");
        }
        break;

    case 'product-add':
        require_once("main/barang/tambah.php");
        break;
        
    case 'product-ubah':
        require_once("main/barang/ubah.php");
        break;

    case 'product-hapus':
        require_once("main/barang/hapus.php");
        break;

    default:
        require_once('main/home/index.php');
        break;
}
