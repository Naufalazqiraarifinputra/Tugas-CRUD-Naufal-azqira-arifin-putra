<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<title>Tampil Data</title>
<body>
<fieldset >
<!--Judul pada fieldset-->
<legend align="center">Data Produk</legend>
<center><h1>Pencarian Produk</h1></center>
<a href="index.php">home</a>
<a href="Admin.php">Admin</a>
<a href="pengadaan.php">pengadaan</a>
<br>
<form method="GET" action="index.php" style="text-align: center;">
<label>Kata Pencarian : </label>
<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
$_GET['kata_cari']; } ?>" />
<button type="submit">Cari</button>
</form>
<div class="table_le">
<table class="index_home">
<thead>
<tr>
<th>id_buku</th>
<th>katagori</th>
<th>nama_buku</th>
<th>harga</th>
<th>Stok</th>
<th>penerbit</th>
</tr>
</thead>
<tbody>
<?php
//untuk meinclude kan koneksi
include 'koneksi.php';
//jika kita klik cari, maka yang tampil query cari ini
if(isset($_GET['kata_cari'])) {
//menampung variabel kata_cari dari form pencarian
$kata_cari = $_GET['kata_cari'];
$query = "SELECT * FROM toko_23 WHERE id_buku like '%".$kata_cari."%' OR
nama_buku like '%".$kata_cari."%' ORDER BY id_buku ASC";
} else {
//jika tidak ada pencarian, default yang dijalankan query ini
$query = "SELECT * FROM toko_23 ORDER BY id_buku ASC";
}
$result = mysqli_query($koneksi, $query);
if(!$result) {
die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
//kalau ini melakukan foreach atau perulangan
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['id_buku']; ?></td>
<td><?php echo $row['katagori']; ?></td>
<td><?php echo $row['nama_buku']; ?></td>
<td><?php echo $row['harga']; ?></td>
<td><?php echo $row['stok']; ?></td>
<td><?php echo $row['penerbit']; ?></td>

<?php
}
?>
</tbody>
</table>
</fieldset>
</body>
</html>