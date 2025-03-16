<?php
include('../config.php');
?>

<h2 class="pt-3 pb-2 mb-3 border-bottom">Products</h2>
<div class="row mb-3">
    <a href="?page=product-add" class="btn btn-success">Add Products</a>
</div>
<?php
$sql= mysqli_query($conn,"SELECT * FROM data_barang")
?>
<div class=" table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
             <tr>
                <th scope="col">no</th>
                <th scope="col">kode barang</th>
                <th scope="col">nama barang</th>
                <th scope="col">jenis</th>
                <th scope="col">harga beli</th>
                <th scope="col">harga jual</th>
                <th scope="col">qty awal</th>
                <th scope="col">qty beli</th>
                <th scope="col">qty jual</th>
                <th scope="col">qty akhir</th>
                <th scope="col">gambar</th>
                <th scope="col"></th>
                <th scope="col">action</th>
             </tr>
        </thead>
        <tbody>
            <?php
            if($sql->num_rows> 0){
                $nomor = 0;
                while($row= $sql->fetch_assoc()){
                    $nomor++;
                    echo "<tr>
                    <td>{$nomor}</td>
                    <td>{$row['kode_barang']}</td>
                    <td>{$row['nama_barang']}</td>
                    <td>{$row['jenis']}</td>
                    <td>{$row['harga_beli']}</td>
                    <td>{$row['harga_jual']}</td>
                    <td>{$row['qty_awal']}</td>
                    <td>{$row['qty_beli']}</td>
                    <td>{$row['qty_jual']}</td>
                    <td>{$row['qty_akhir']}</td>
                    <td>
                        <img src=\"../images/".$row['gambar'].".\" style='width='50' height='25'></img>                   
                    <td>
                    <td>
                    <a class='bi bi-pencil-square' href='?page=product-ubah&id={$row['id']}'></a>
                    <a class='bi bi-trash' href='?page=product-hapus&id={$row['id']}'></a>
                </td>
              </tr>";
    }
}
?>
        
        </tbody>
    </table>
</div>



            

