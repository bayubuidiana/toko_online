<?php 
include("../config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis = $_POST['jenis'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $qty_awal = $_POST['qty_awal'];
    $qty_beli = $_POST['qty_beli'];
    $qty_jual = $_POST['qty_jual'];
    $qty_akhir = $_POST['qty_akhir'];

    $sql = "INSERT INTO data_barang (Kode_Barang, Nama_Barang, Jenis, Harga_Beli, Harga_Jual, Qty_Awal, Qty_Beli, Qty_jual, Qty_akhir) 
    VALUES ('$kode_barang', '$nama_barang','$jenis', '$harga_beli', '$harga_jual', '$qty_awal', '$qty_beli', '$qty_jual', '$qty_akhir')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2 class="pt-3 pb-2 mb-3 border-bottom">Add New Product</h2>

<form action="" method="post">
    <div class="row mb-3">
        <label for="kode" class="col-sm-2 col-form-label">Kode barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jenis" name="jenis" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="hbeli" class="col-sm-2 col-form-label">Harga Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="harga_beli" name="harga_beli" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="hjual" class="col-sm-2 col-form-label">Harga Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyawal" class="col-sm-2 col-form-label">Qty Awal</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty_awal" name="qty_awal" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtybeli" class="col-sm-2 col-form-label">Qty Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty_beli" name="qty_beli" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyjual" class="col-sm-2 col-form-label">Qty Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty_jual" name="qty_jual" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyakhir" class="col-sm-2 col-form-label">Qty Akhir</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty_akhir" name="qty_akhir" required>
        </div>
    </div>
    <div class="row mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>