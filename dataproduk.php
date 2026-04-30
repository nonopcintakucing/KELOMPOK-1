<?php
include "koneksi.php";

// SIMPAN DATA
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga, stok)
    VALUES ('$nama','$harga','$stok')");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg,#74ebd5,#ACB6E5);
            padding: 20px;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 15px;
            max-width: 800px;
            margin: auto;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            color: white;
            border: none;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th {
            background: #4facfe;
            color: white;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        a {
            text-decoration: none;
            font-weight: bold;
        }

        .edit {
            color: green;
        }

        .hapus {
            color: red;
        }
    </style>
</head>

<body>
<div class="container">

    <h2>Tambah Produk</h2>

    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Produk" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="number" name="stok" placeholder="Stok" required>
        <button type="submit">Simpan</button>
    </form>

    <h3>Daftar Produk</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM produk");

        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama_produk']; ?></td>
            <td>Rp <?= number_format($d['harga']); ?></td>
            <td><?= $d['stok']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?= $d['id_produk']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?= $d['id_produk']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>
</body>
</html>