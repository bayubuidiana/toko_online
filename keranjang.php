<?php
include("config.php");

$hasil = mysqli_query($conn, "SELECT a.id, a.qty, b.kode_barang, b.nama_barang, b.gambar, b.harga_jual, b.qty_akhir 
FROM keranjang AS a 
INNER JOIN data_barang AS b ON a.kode_barang = b.kode_barang");

if (!$hasil) {
    die("Query Failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($hasil) == 0) {
    echo "<tr><td colspan='4'>Tidak ada produk di keranjang.</td></tr>";
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- botstrapt icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php
    $hasil2 = mysqli_query($conn, "SELECT sum(qty) AS jmldata FROM keranjang");
    if (!$hasil2) {
        die("Query Failed: " . mysqli_error($conn));
    }
    $jumlah = mysqli_fetch_assoc($hasil2);

    ?>
    <nav class="navbar navbar-expand-lg bg-black " data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Toko-Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php  ">Home</a>
                    <a class="nav-link btn" href="keranjang.php">Keranjang
                        <span class="badge text-bg-danger">
                            <?= $jumlah['jmldata'] ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center my-5">Keranjang</div>
        <form action="keranjang.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 0;
                    while ($row = mysqli_fetch_assoc($hasil)) {
                        $nomor++;
                    ?>
                        <tr>
                            <th scope="row">
                                <?= $nomor; ?>
                            </th>
                            <td>
                                <img src="images/<?= $row['gambar'] ?>" alt="<?= $row['gambar'] ?>"
                                    style="width: 75%; height: 200px; object-fit: cover; border-radius: 8px;">
                            </td>
                            <td>
                                <p> <input type="hidden" name="kode[]" value="<?= $row['kode_barang'] ?>"></p>
                                <p>Nama Barang : <?= $row['nama_barang'] ?></p>
                                <p>Harga Satuan : <?= $row['harga_jual'] ?></p>
                                <p>Stock : <?= $row['qty_akhir'] ?></p>
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="qty" class="col-form-label">Qty</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="number" id="qty" class="form-control" name="qty[]" value="<?= $row['qty'] ?>">
                                    </div>

                                </div>
                            </td>
                            <td>
                                <a href="hapus-keranjang.php?id=<?= $row['id'] ?>"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <button type="submit" name="submit" class="btn btn-success">Buy</button>
            </div>
        </form>
    </div>


    <footer class="bg-black">
        <div class="container mt-5 py-5 text-white text-center">
            <p>copyright@2025</p>

        </div>



    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>