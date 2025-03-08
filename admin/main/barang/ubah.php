<?php
require('../config.php');

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "<script>
            alert('Oops, something went wrong!');
            window.history.back();
          </script>";
    exit;
}

$sql = "SELECT * FROM data_barang WHERE id=$id";
$result = $conn->query($sql);

// Cek apakah data ditemukan
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "<script>
            alert('Data not found!');
            window.history.back();
          </script>";
    exit;
}

// Proses Update Data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kode_barang = $_POST['kode'] ?? "";
    $nama_barang = $_POST['nama_barang'] ?? "";
    $jenis = $_POST['jenis'] ?? "";
    $harga_beli = $_POST['harga_beli'] ?? 0;
    $harga_jual = $_POST['harga_jual'] ?? 0;
    $qty_awal = $_POST['qty_awal'] ?? 0;
    $qty_beli = $_POST['qty_beli'] ?? 0;
    $qty_jual = $_POST['qty_jual'] ?? 0;
    $qty_akhir = $_POST['qty_akhir'] ?? 0;

    // Update query
    $sql = "UPDATE data_barang SET 
                kode_barang='$kode_barang', 
                nama_barang='$nama_barang', 
                jenis='$jenis', 
                harga_beli='$harga_beli', 
                harga_jual='$harga_jual', 
                qty_awal='$qty_awal', 
                qty_beli='$qty_beli', 
                qty_jual='$qty_jual', 
                qty_akhir='$qty_akhir' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Data updated successfully!');
                window.location.href='http://localhost/toko-online/admin/index.php?page=products'; // Sesuaikan dengan halaman tujuan setelah update
              </script>";
    } else {
        echo "<script>
                alert('Oops, something went wrong: " . $conn->error . "');
              </script>";
    }
}
?>

<h2 class="pt-3 pb-2 mb-3 border-bottom">Update Form</h2>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    
    <div class="row mb-3">
        <label for="kode" class="col-sm-2 col-form-label">Kode</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kode" name="kode" value="<?= ($row['kode_barang']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="barang" name="nama_barang" value="<?= ($row['nama_barang']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jenis" name="jenis" value="<?= ($row['jenis']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="hbeli" class="col-sm-2 col-form-label">Harga Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="hbeli" name="harga_beli" value="<?= ($row['harga_beli']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="hjual" class="col-sm-2 col-form-label">Harga Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="hjual" name="harga_jual" value="<?= ($row['harga_jual']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyawal" class="col-sm-2 col-form-label">Qty Awal</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyawal" name="qty_awal" value="<?= ($row['qty_awal']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtybeli" class="col-sm-2 col-form-label">Qty Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtybeli" name="qty_beli" value="<?= ($row['qty_beli']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyjual" class="col-sm-2 col-form-label">Qty Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyjual" name="qty_jual" value="<?= ($row['qty_jual']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyakhir" class="col-sm-2 col-form-label">Qty Akhir</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyakhir" name="qty_akhir" value="<?= ($row['qty_akhir']) ?>">
        </div>
    </div>
    <div class="row mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
