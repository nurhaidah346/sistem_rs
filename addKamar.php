<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Add Kamar</title>
</head>
<body>

<h2>Tambah Kamar</h2>
<form action="addKamar.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Id</td>
<td><input type="text" name="id_kamar"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama_kamar"></td>
</tr>
<tr>
<td>Jenis</td>
<td><input type="text" name="jenis_kamar"></td>
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
$id_kamar = $_POST['id_kamar'];
$nama_kamar = $_POST['nama_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
// include database connection file
include_once("config.php");
// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO kamar(id_kamar,nama_kamar,jenis_kamar) VALUES('$id_kamar','$nama_kamar','$jenis_kamar')");
header("location:kamar.php");
}
?>
</body>
</html>