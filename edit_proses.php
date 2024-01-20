<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_buku = $_POST['id_buku'];
$katagori = $_POST['katagori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

// update data ke database
mysqli_query($koneksi,"update toko_23 set nama_buku='$nama_buku',katagori ='$katagori',
harga='$harga', stok='$stok',penerbit='$penerbit' where id_buku='$id_buku'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>