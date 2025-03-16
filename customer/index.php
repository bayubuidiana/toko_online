<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flash Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            padding: 8px;
            text-align: center;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-img img {
            max-width: 100%;
            height: 150px;
        }

        .price {
            color: #e74c3c;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .sold {
            font-size: 0.9rem;
            color: #555;
            text-align: left;
        }
        .small-input-group {
        max-width: 60px; 
        }

        .small-input-group .btn {
            padding: 2px 6px; 
            font-size: 12px; 
        }

        .small-input-group .form-control {
            height: 22px; 
            font-size: 12px;
            padding: 2px 4px; 
        }
    </style>
</head>

<body>
    <?php
    include('../config.php');

    $sql = mysqli_query($conn, "SELECT * FROM data_barang");
    ?>

    <div class="container mt-4">
        <!-- Search Bar -->
        <div class="input-group" style="max-width: 900px; margin: 20px auto;">
            <input type="text" class="form-control" placeholder="Cari sesuatu...">
            <span class="input-group-text">
                <i class="bi bi-search"></i>
            </span>
        </div>

        <!-- Tombol Add Product -->
        <div class="mb-4 text-center">
            <button class="btn btn-outline-primary" id="addProductBtn">Add Product</button>
        </div>

        <!-- Produk Grid -->
        <div class="row">
            <?php
            if ($sql->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($sql)) {
            ?>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="../image/test.png" alt="Produk">
                            </div>
                            <h5><?= ($row['nama_barang']); ?></h5>
                            <p class="price">Rp<?= number_format($row['harga_jual'], 0, ',', '.'); ?></p>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="me-3 mb-0">Stok</p>
                                <button> ker</button>
                                <div class="input-group small-input-group input-group-sm">
                                    <button class="btn btn-outline-secondary btn-sm" type="button">-</button>
                                    <input type="text" class="form-control text-center form-control-sm" value="1">
                                    <button class="btn btn-outline-secondary btn-sm" type="button">+</button>
                                </div>

                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p class='text-center'>Tidak ada produk tersedia.</p>";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>