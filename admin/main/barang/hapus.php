

<?php
include "../config.php";
$id = $_POST['id'];

$sql = "DELETE FROM data_barang
where id='$_GET[id]'";

mysqli_query($conn, $sql);
echo "<script>
alert('hapus Data successfully!');
window.location.href='http://localhost/toko-online/admin/index.php?page=products'; 
</script>";
exit; 
?>