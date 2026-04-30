<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
$d = mysqli_fetch_array($data);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    mysqli_query($koneksi, "UPDATE produk SET 
        nama_produk='$nama',
        harga='$harga',
        stok='$stok'
        WHERE id_produk='$id'
    ");

    header("Location: dataproduk.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

<h2>Edit Produk</h2>

<form method="POST">
    <input type="text" name="nama" value="<?= $d['nama_produk']; ?>"><br>
    <input type="number" name="harga" value="<?= $d['harga']; ?>"><br>
    <input type="number" name="stok" value="<?= $d['stok']; ?>"><br>
    <button type="submit" name="update">Update</button>
</form>

</body>
</html>