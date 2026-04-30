<?php
include 'koneksi.php';

$no = 1;
$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f9;
        }
        h2 {
            text-align: center;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
        }
        .edit {
            background-color: #f39c12;
        }
        .hapus {
            background-color: #e74c3c;
        }
        .tambah {
            display: block;
            width: 150px;
            margin: 20px auto;
            text-align: center;
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

<h2>Data Produk</h2>

<a href="tambah.php" class="btn tambah">+ Tambah Produk</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td>Rp <?= number_format($row['harga']); ?></td>
        <td><?= $row['stok']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>" class="btn edit">Edit</a>
            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn hapus" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>