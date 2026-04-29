<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    echo "<h3>Data Produk:</h3>";
    echo "Nama: $nama <br>";
    echo "Harga: Rp " . number_format($harga) . "<br>";
    echo "Stok: $stok <br>";
}
?>

<form method="POST">
    Nama Produk: <input type="text" name="nama"><br>
    Harga: <input type="number" name="harga"><br>
    Stok: <input type="number" name="stok"><br>
    <button type="submit">Simpan</button>
</form>