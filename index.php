<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flash Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"></script>
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
        }

        
    </style>
</head>
      <div class="container flash-sale mt-4">
          <div class="input-group" style="max-width: 900px; margin: 20px auto;">
              <input type="text" class="form-control" placeholder="Cari sesuatu...">
              <span class="input-group-text">
                  <i class="bi bi-search"></i>
              </span>
            
          </div>
      </div>
        <div class="text-center mb-4">
          <button class="btn btn-outline-primary">Add Product</button>
        </div>
         <div class="row">
            <div class="col-md-2 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-img">
                        <img src="image /test.png" alt="Produk 1">
                    </div>
                    <h5>baju merek adidas</h5>
                    <p class="price">Rp 1.198.000</p>
                    <p class="sold">stok</p>
                </div>
          </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/test.png" alt="Produk 2">
                    </div>
                    <h5>baju merek adidas</h5>
                    <p class="price">Rp 2.068.000</p>
                    <p class="sold">20 TERJUAL</p>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/test.png" alt="Produk 2">
                    </div>
                    <h5>baju merek adidas</h5>
                    <p class="price">Rp 152.000</p>
                    <p class="sold">STOK TERBATAS</p>
                  </div>
            </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/test.png" alt="Produk 4">
                    </div>
                    <h5>baju merek adidas</h5>
                    <p class="price">Rp 1.428.000</p>
                    <p class="sold">56 TERJUAL</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>