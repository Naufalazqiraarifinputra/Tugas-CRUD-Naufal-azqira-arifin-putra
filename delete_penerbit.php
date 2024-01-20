<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_penerbit = $_GET['id_penerbit'];
// query SQL untuk insert data
$query="DELETE FROM toko_22 WHERE id_penerbit='$id_penerbit'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    $result;
    echo "<script>alert('Buku berhasil dihapus');location='pengadaan.php';</script>";
}
// mengalihkan ke halaman index.php
header("location:pengadaan.php");
?>