<?php
include 'config.php';
if (isset($_GET['edit'])){
    $edit = $_GET['edit'];
$result = mysqli_query($mysqli, "SELECT * FROM pengobatan_pasien WHERE nama_pasien='$edit'");
$result = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Edit Pengobatan Pasien</title>
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Edit Pengobatan Pasien</h2>
<form action="editPengobatan.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Nama Pasien</td>
<td><input type="text" name="nama_pasien" value="<?php echo $result['nama_pasien']?>"></td>
</tr>
<tr>
<td>Diagnosa</td>
<td><input type="text" name="diagnosa" value="<?php echo $result['diagnosa']?>"></td>
</tr>
<tr>
<td>Nama Dokter</td>
<td><input type="text" name="nama_dokter" value="<?php echo $result['nama_dokter']?>"></td>
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
$nama_pasien = $_POST['nama_pasien'];
$diagnosa = $_POST['diagnosa'];
$nama_dokter = $_POST['nama_dokter'];
// update user data into table
mysqli_query($mysqli, "UPDATE pengobatan_pasien SET NAMA_PASIEN='$nama_pasien', DIAGNOSA='$diagnosa', NAMA_DOKTER='$nama_dokter' WHERE NAMA_PASIEN='$nama_pasien'");

header("location:pengobatan_pasien.php");
}
?>
</body>
</html>