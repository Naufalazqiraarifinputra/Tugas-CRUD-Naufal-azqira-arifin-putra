<!DOCTYPE html>
<html>
<head>
<title>Form Edit Data</title>
<style>
fieldset {
width: 400px;
margin:auto;
}
</style>
</head>
<body>
<fieldset >
<!--Judul pada fieldset-->
<legend align="center">Edit Data Produk</legend>
<h3>Edit Data</h3>

<?php
include "koneksi.php";
$id_buku = $_GET['id_buku'];
$edit = mysqli_query($koneksi,"SELECT * FROM toko_23 WHERE id_buku='$id_buku'");
while ($row = mysqli_fetch_array($edit)) {
?>



<form method="post" action="edit_proses.php">
<table>
<tr>
<td>nama_buku</td>
<td>
<input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>">
<input type="text" name="nama_buku" value="<?php echo

$row['nama_buku']; ?>">

</td>
</tr>

<tr>
<td>Harga</td>
<td>
<input type="text" name="harga" value="<?php echo $row['harga']; ?>">
</td>
</tr>

<tr>
<td>Stok</td>
<td>
<input type="text" name="stok" value="<?php echo $row['stok']; ?>">
</td>
</tr>
<tr>
<td>penerbit</td>
<td>
<input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>">
</td>
</tr>

<tr>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>
</fieldset>
</body>
</html>