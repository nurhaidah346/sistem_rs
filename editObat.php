<?php
include 'config.php';
if (isset($_GET['edit'])){
    $edit = $_GET['edit'];
$result = mysqli_query($mysqli, "SELECT * FROM obat WHERE id_obat='$edit'");
$result = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Edit Obat</title>
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Edit Obat</h2>
<form action="editObat.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Id</td>
<td><input type="text" name="id_obat" value="<?php echo $result['id_obat']?>"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama_obat" value="<?php echo $result['nama_obat']?>"></td>
</tr>
<tr>
<td>Harga</td>
<td><input type="text" name="harga" value="<?php echo $result['harga']?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="Submit"
value="Edit"></td>
</tr>
</table>
</form>
<?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
$id_obat = $_POST['id_obat'];
$nama_obat = $_POST['nama_obat'];
$harga = $_POST['harga'];
// update user data into table
mysqli_query($mysqli, "UPDATE obat SET ID_OBAT='$id_obat', NAMA_OBAT='$nama_obat', HARGA='$harga' WHERE ID_OBAT='$id_obat'");

header("location:harga.php");
}
?>
</body>
</html>