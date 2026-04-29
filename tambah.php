<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background: white;
            padding: 20px;
            width: 300px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #2196F3; /* biru */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1976D2;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 30px auto;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #2196F3;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        a[href*="edit"] {
            background-color: #1976D2;
            color: white;
        }

        a[href*="hapus"] {
            background-color: #e53935;
            color: white;
        }
    </style>
</head>
<body>

<h2>Data Penjualan</h2>

<form method="POST">
    <input type="text" name="nama_barang" placeholder="Nama Barang" required>
    <input type="number" name="harga" placeholder="Harga" required>
    <input type="number" name="jumlah" placeholder="Jumlah" required>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    // FIX ERROR: tidak pakai '' untuk id
    mysqli_query($conn, "INSERT INTO tb_penjualan (nama_barang, harga, jumlah) 
    VALUES ('$nama', '$harga', '$jumlah')");

    header("Location: tambah.php");
}
?>

<hr>

<table>
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
        <a href="update.php?id=<?= $d['id'] ?>">Edit</a>
        <a href="hapus.php?id=<?= $d['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>