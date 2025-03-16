<?php
include "config.php";
if (isset($_GET['id'])) {
    $id =($_GET['id']);

    // Query untuk menghapus data
    $sql = "DELETE FROM keranjang WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Data berhasil dihapus!');
        window.location.href='http://localhost/toko-online/keranjang.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal menghapus data: " . mysqli_error($conn) . "');
        window.history.back();
        </script>";
    }
} else {
    echo "<script>
    alert('ID tidak ditemukan!');
    window.history.back();
    </script>";
}
?>