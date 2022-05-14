<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Add Pasien</title>
</head>
<body>

<h2>Tambah Pasien</h2>
<form action="addPasien.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Id</td>
<td><input type="text" name="id_pasien"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama_pasien"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat"></td>
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
$id_pasien = $_POST['id_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$alamat = $_POST['alamat'];
// include database connection file
include_once("config.php");
// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO pasien(id_pasien,nama_pasien,alamat) VALUES('$id_pasien','$nama_pasien','$alamat')");
header("location:pasien.php");
}
?>
</body>
</html>