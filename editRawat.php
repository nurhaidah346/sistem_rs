<?php
include 'config.php';
if (isset($_GET['edit'])){
    $edit = $_GET['edit'];
$result = mysqli_query($mysqli, "SELECT * FROM rawat_pasien WHERE nama_pasien='$edit'");
$result = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Edit Perawat Pasien</title>
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Edit Perawat Pasien</h2>
<form action="editRawat.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Nama Pasien</td>
<td><input type="text" name="nama_pasien" value="<?php echo $result['nama_pasien']?>"></td>
</tr>
<tr>
<td>Nama Kamar</td>
<td><input type="text" name="nama_kamar" value="<?php echo $result['nama_kamar']?>"></td>
</tr>
<tr>
<td>Jenis Kamar</td>
<td><input type="text" name="jenis_kamar" value="<?php echo $result['jenis_kamar']?>"></td>
</tr>
<tr>
<td>Nama Perawat</td>
<td><input type="text" name="nama_perawat" value="<?php echo $result['nama_perawat']?>"></td>
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
$nama_kamar = $_POST['nama_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$nama_perawat = $_POST['nama_perawat'];
// update user data into table
mysqli_query($mysqli, "UPDATE rawat_pasien SET NAMA_PASIEN='$nama_pasien', NAMA_KAMAR='$nama_kamar', JENIS_KAMAR='$jenis_kamar', NAMA_PERAWAT='$nama_perawat' WHERE NAMA_PASIEN='$nama_pasien'");

header("location:rawat_pasien.php");
}
?>
</body>
</html>