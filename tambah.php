<?php include 'koneksi.php'; ?>

<h2>Data Penjualan</h2>

<form method="POST">
    Nama Barang: <input type="text" name="nama_barang"><br>
    Harga: <input type="number" name="harga"><br>
    Jumlah: <input type="number" name="jumlah"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    mysqli_query($conn, "INSERT INTO tb_penjualan VALUES('', '$nama', '$harga', '$jumlah')");
    header("Location: index.php");
}
?>

<hr>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM tb_penjualan");

while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama_barang'] ?></td>
    <td><?= $d['harga'] ?></td>
    <td><?= $d['jumlah'] ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id'] ?>">Edit</a>
        <a href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>