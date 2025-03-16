<div class="card-body">
          <div class="container">
            <div class="row">
              <?php
              include "config.php";
              $result = mysqli_query($conn, "SELECT * FROM table_todo");
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-4 mb-4">
                  <div class="card shadow-sm">
                    <!-- Card Header -->
                    <div class="card-header bg-primary text-white">
                      <strong>NO: <?= $no ?></strong>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <h5 class="card-title"><?= htmlspecialchars($row['tugas']) ?></h5>
                      <p class="card-text">
                        <strong>Jangka Waktu:</strong> <?= htmlspecialchars($row['jangka_waktu']) ?><br>
                        <strong>Keterangan:</strong> <?= htmlspecialchars($row['keterangan']) ?>
                      </p>

                      <div class="d-flex justify-content-between">
                        <a href="edit_todo_admin.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">
                          <i class="bi bi-pencil"></i> Edit
                        </a>
                        <a href="aksi_hapus_todo.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
                          onclick="return confirm('Are you sure?')">
                          <i class="bi bi-trash"></i> Hapus
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $no++;
              }
              ?>
            </div>
          </div>
          </tbody>
          </table>
        </div>
      </div>



      <h1>Daftar Produk</h1>
    <div class="container">
        <div class="product-card">
            <img src="path_to_image1.jpg" alt="Visio 2019 Pro">
            <h2>Visio 2019 Pro - Original Key</h2>
            <p class="price">Rp140.000</p>
        </div>
        <div class="product-card">
            <img src="path_to_image2.jpg" alt="Windows 10 Pro">
            <h2>Windows 10 Pro - Original License</h2>
            <p class="price">Rp330.000</p>
        </div>
        <div class="product-card">
            <img src="path_to_image3.jpg" alt="Windows 11 Home">
            <h2>Windows 11 Home - Original License</h2>
            <p class="price">Rp549.000</p>
        </div>
        <div class="product-card">
            <img src="path_to_image4.jpg" alt="MikroTik RouterOS License">
            <h2>MikroTik RouterOS License</h2>
            <p class="price">Rp140.000</p>
        </div>
        <div class="product-card">
            <img src="path_to_image5.jpg" alt="Windows 10 Pro Retail">
            <h2>Windows 10 Pro Retail</h2>
            <p class="price">Rp650.000</p>
        </div>
        <div class="product-card">
            <img src="path_to_image6.jpg" alt="Windows 11 Pro">
            <h2>Windows 11 Pro - Original License</h2>
            <p class="price">Rp650.000</p>
        </div>
    </div>

</body>
</html>