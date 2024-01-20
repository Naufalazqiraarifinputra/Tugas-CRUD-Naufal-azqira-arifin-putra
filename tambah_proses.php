<?php
include "koneksi.php";
// menangkap data yang di kirim dari form
$id_buku = $_POST["id_buku"];
$katagori = $_POST["katagori"];
$nama_buku = $_POST["nama_buku"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$penerbit = $_POST["penerbit"];
// menginput data ke database
$sql = "INSERT INTO toko_23 (id_buku, nama_buku, harga, stok, penerbit)
VALUES('$id_buku','$nama_buku','$harga','$stok','$penerbit')";
$query = mysqli_query($koneksi, $sql);
// mengalihkan halaman kembali ke Beranda
header("location:index.php");