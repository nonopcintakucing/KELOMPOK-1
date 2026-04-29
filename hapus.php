<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tb_penjualan WHERE id=$id");

header("Location: tambah.php");
?>