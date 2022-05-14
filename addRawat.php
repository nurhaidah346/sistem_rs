<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Add Perawat</title>
</head>
<body>

<h2>Tambah Data Perawat</h2>
<form action="addRawat.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Nama Pasien</td>
<td><input type="text" name="nama_pasien"></td>
</tr>
<tr>
<td>Nama Kamar</td>
<td><input type="text" name="nama_kamar"></td>
</tr>
<tr>
<td>Jenis Kamar</td>
<td><input type="text" name="jenis_kamar"></td>
</tr>
<tr>
<td>Nama Perawat</td>
<td><input type="text" name="nama_perawat"></td>
</tr>
<td></td>
<td><input type="submit" name="Submit"
value="Add"></td>
</tr>
</table>
</form>
<?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
$nama_pasien = $_POST['nama_pasien'];
$nama_kamar = $_POST['nama_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$nama_perawat = $_POST['nama_perawat'];
// include database connection file
include_once("config.php");
// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO rawat_pasien(nama_pasien,nama_kamar,jenis_kamar,nama_perawat) VALUES('$nama_pasien','$nama_kamar','$jenis_kamar','$nama_perawat')");
header("location:rawat_pasien.php");
}
?>
</body>
</html>