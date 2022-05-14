<?php
include 'config.php';
if (isset($_GET['edit'])){
    $edit = $_GET['edit'];
$result = mysqli_query($mysqli, "SELECT * FROM kamar WHERE id_kamar='$edit'");
$result = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Edit Kamar</title>
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Edit Kamar</h2>
<form action="editKamar.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Id</td>
<td><input type="text" name="id_kamar" value="<?php echo $result['id_kamar']?>"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama_kamar" value="<?php echo $result['nama_kamar']?>"></td>
</tr>
<tr>
<td>Jenis</td>
<td><input type="text" name="jenis_kamar" value="<?php echo $result['jenis_kamar']?>"></td>
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
$id_kamar = $_POST['id_kamar'];
$nama_kamar = $_POST['nama_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
// update user data into table
mysqli_query($mysqli, "UPDATE kamar SET ID_KAMAR='$id_kamar', NAMA_KAMAR='$nama_kamar', JENIS_KAMAR='$jenis_kamar' WHERE ID_KAMAR='$id_kamar'");

header("location:kamar.php");
}
?>
</body>
</html>