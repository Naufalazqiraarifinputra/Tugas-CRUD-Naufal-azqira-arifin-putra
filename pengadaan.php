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
<center>||<a href="Tambah_penerbit1.html">Tambah Data</a>||</center>
<br>
<form method="GET" action="index.php" style="text-align: center;">
<label>Kata Pencarian : </label>
<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
$_GET['kata_cari']; } ?>" />
<button type="submit">Cari</button>
</form>
<table class="tampilan_pengadaan">
<thead>
<tr>
<th>id_penerbit</th>
<th>nama</th>
<th>alamat</th>
<th>kota</th>
<th>telepon</th>
<!--Tambahan untuk opsi Update & Delete-->
<th>OPSI</th>
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
$query = "SELECT * FROM toko_22 WHERE id_penerbit like '%".$kata_cari."%' OR
nama like '%".$kata_cari."%' ORDER BY id_penerbit ASC";
} else {
//jika tidak ada pencarian, default yang dijalankan query ini
$query = "SELECT * FROM toko_22 ORDER BY id_penerbit ASC";
}
$result = mysqli_query($koneksi, $query);
if(!$result) {
die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
//kalau ini melakukan foreach atau perulangan
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
<td><?php echo $row['id_penerbit']; ?></td>
<td><?php echo $row['nama']; ?></td>
<td><?php echo $row['alamat']; ?></td>
<td><?php echo $row['kota']; ?></td>
<td><?php echo $row['telepon']; ?></td>



<!--Tambahan untuk opsi edit dan hapus-->
<td>
<a href="edit_pengadaan1.php?id_penerbit=<?php echo $row['id_penerbit']; ?>">EDIT</a>
<a href="delete_penerbit.php?id_penerbit=<?php echo $row['id_penerbit']; ?>">HAPUS</a>
</td>
</tr>

<?php
}
?>
</tbody>
</table>
</fieldset>
</body>
</html>