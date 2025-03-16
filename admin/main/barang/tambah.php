<?php
ob_start();
include("../config.php");

if (isset($_POST['submit'])) {
    $kode = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis = $_POST['jenis'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $qty_awal = $_POST['qty_awal'];
    $qty_beli = $_POST['qty_beli']; // Memperbaiki nama input dari qty__beli menjadi qty_beli
    $qty_jual = $_POST['qty_jual'];
    $qty_akhir = $_POST['qty_akhir'];

    $query = "INSERT INTO data_barang (kode_barang, nama_barang, jenis, harga_beli, harga_jual, qty_awal, qty_beli, qty_jual, qty_akhir, gambar) 
              VALUES ('$kode', '$nama_barang', '$jenis', '$harga_beli', '$harga_jual', '$qty_awal', '$qty_beli', '$qty_jual', '$qty_akhir', '')";

    mysqli_query($conn, $query);

    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp');
    $nama = $_FILES['photo']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $namaBaru = bin2hex(random_bytes(20)) . "." . $ekstensi;

    if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
        if ($ukuran < 10440700) {
            move_uploaded_file($file_tmp, '../images/' . $namaBaru);
            $query2 = mysqli_query($conn, "UPDATE data_barang SET gambar = '$namaBaru' WHERE kode_barang = '$kode'");
            if ($query2) {
                // header("Location:?page=products"); error
                // exit;    
            } else {
                echo 'Gagal mengupload gambar';
            }
        } else {
            echo 'Ukuran file terlalu besar';
        }
    } else {
        echo 'Ekstensi file yang diupload tidak diperbolehkan';
    }
}
ob_end_flush();
?>

<h2 class="pt-3 pb-2 mb-3 border-bottom">Add New Product</h2>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jenis" name="jenis" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="harga_beli" name="harga_beli" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="qty_awal" class="col-sm-2 col-form-label">Qty Awal</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty_awal" name="qty_awal" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="qty_beli" class="col-sm-2 col-form-label">Qty Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty_beli" name="qty_beli" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="qty_jual" class="col-sm-2 col-form-label">Qty Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty_jual" name="qty_jual" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="qty_akhir" class="col-sm-2 col-form-label">Qty Akhir</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty_akhir" name="qty_akhir" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="photo" class="col-sm-2 col-form-label">Product Image</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
    </div>
    <div class="row mb-3">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
