<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_buku = $_GET['id_buku'];
// query SQL untuk insert data
$query="DELETE FROM toko_23 WHERE id_buku='$id_buku'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    $result;
    echo "<script>alert('Buku berhasil dihapus');location='index.php';</script>";
}
// mengalihkan ke halaman index.php
header("location:index.php");

?>