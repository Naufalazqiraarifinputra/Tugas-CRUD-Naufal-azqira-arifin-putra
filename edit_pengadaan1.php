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
<legend align="center">Edit Data Pengadaan</legend>
<h3>Edit Data</h3>

    <?php
    include "koneksi.php";
    $id_penerbit = $_GET['id_penerbit'];
    $edit = mysqli_query($koneksi,"SELECT * FROM toko_22 WHERE id_penerbit='$id_penerbit'");
    while ($row = mysqli_fetch_array($edit)) {
    ?>

    <form method="post" action="edit_proses3.php">
    <table>
    <tr>
        <td>nama</td>
        <td>
        <input type="hidden" name="id_penerbit" value="<?php echo $row['id_penerbit']; ?>">
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
        </td>
        </tr>

        <tr>
        <td>alamat</td>
        <td>
        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>">
        </td>
        </tr>

        <tr>
        <td>kota</td>
        <td>
        <input type="text" name="kota" value="<?php echo $row['kota']; ?>">
        </td>
        </tr>

        <tr>
        <td>telepon</td>
        <td>
        <input type="text" name="telepon" value="<?php echo $row['telepon']; ?>">
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
