<?php
include 'config.php';
if (isset($_GET['edit'])){
    $edit = $_GET['edit'];
$result = mysqli_query($mysqli, "SELECT * FROM pasien WHERE id_pasien='$edit'");
$result = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Edit Pasien</title>
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Edit Pasien</h2>
<form action="editPasien.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Id</td>
<td><input type="text" name="id_pasien" value="<?php echo $result['id_pasien']?>"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama_pasien" value="<?php echo $result['nama_pasien']?>"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" value="<?php echo $result['alamat']?>"></td>
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
$id_pasien = $_POST['id_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$alamat = $_POST['alamat'];
// update user data into table
mysqli_query($mysqli, "UPDATE pasien SET ID_PASIEN='$id_pasien', NAMA_PASIEN='$nama_pasien', ALAMAT='$alamat' WHERE ID_PASIEN='$id_pasien'");

header("location:pasien.php");
}
?>
</body>
</html>