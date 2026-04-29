<?php
include 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data dari database
$data = mysqli_query($conn, "SELECT * FROM tb_penjualan WHERE id='$id'");
$d = mysqli_fetch_array($data);

// Proses update
if (isset($_POST['update'])) {
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    mysqli_query($conn, "UPDATE tb_penjualan SET 
        nama_barang='$nama',
        harga='$harga',
        jumlah='$jumlah'
        WHERE id='$id'");

    // setelah update balik ke halaman utama
    header("Location: tambah.php");
}
?>

<!DOCTYPE html>
<html> 
<head>
    <title>Update Data</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }

        form {
            background: white;
            padding: 20px;
            width: 300px;
            margin: 100px auto;
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
            background: #2196F3;
            color: white;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background: #1976D2;
        }
    </style>
</head>
<body>

<form method="POST">
    <h3>Update Data</h3>

    <input type="text" name="nama_barang" value="<?= $d['nama_barang'] ?>" required>
    <input type="number" name="harga" value="<?= $d['harga'] ?>" required>
    <input type="number" name="jumlah" value="<?= $d['jumlah'] ?>" required>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>