<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Add Obat</title>
</head>
<body>

<h2>Tambah Obat</h2>
<form action="addObat.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Id</td>
<td><input type="text" name="id_obat"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama_obat"></td>
</tr>
<tr>
<td>Harga</td>
<td><input type="text" name="harga"></td>
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
$id_obat = $_POST['id_obat'];
$nama_obat = $_POST['nama_obat'];
$harga = $_POST['harga'];
// include database connection file
include_once("config.php");
// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO obat(id_obat,nama_obat,harga) VALUES('$id','$nama','$harga')");
header("location:obat.php");
}
?>
</body>
</html>
