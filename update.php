<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM penjualan WHERE id=$id");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Data</h2>

<form method="POST">
    Nama Barang: <input type="text" name="nama_barang" value="<?= $d['nama_barang'] ?>"><br>
    Harga: <input type="number" name="harga" value="<?= $d['harga'] ?>"><br>
    Jumlah: <input type="number" name="jumlah" value="<?= $d['jumlah'] ?>"><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE tb_penjualan SET 
        nama_barang='$_POST[nama_barang]',
        harga='$_POST[harga]',
        jumlah='$_POST[jumlah]'
        WHERE id=$id");

    header("Location: index.php");
}
?>