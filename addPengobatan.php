<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Add Pengobatan</title>
</head>
<body>

<h2>Tambah Data Pengobatan</h2>
<form action="addPengobatan.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Nama Pasien</td>
<td><input type="text" name="nama_pasien"></td>
</tr>
<tr>
<td>Diagnosa</td>
<td><input type="text" name="diagnosa"></td>
</tr>
<tr>
<td>Nama Dokter</td>
<td><input type="text" name="nama_dokter"></td>
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
$diagnosa = $_POST['diagnosa'];
$nama_dokter = $_POST['nama_dokter'];
// include database connection file
include_once("config.php");
// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO pengobatan_pasien(nama_pasien,diagnosa,nama_dokter) VALUES('$nama_pasien','$diagnosa','$nama_dokter')");
header("location:pengobatan_pasien.php");
}
?>
</body>
</html>