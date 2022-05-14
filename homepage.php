<?php
$conn = mysqli_connect("localhost", "root", "","sistem_rs" );
$result = mysqli_query($conn, "SELECT * FROM pasien");
include_once ("config.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Sistem Rumah Sakit</title>
</head>
<body>
    <h1> Sistem Rumah Sakit</h1>
<h2>Data Rumah Sakit</h2>
<h3>MENU</h3>
<a href="pasien.php">Data Pasien</a>
<h3></h3>
<a href="kamar.php">Data Kamar</a> 
<h3></h3>
<a href="obat.php">Data Resep Obat</a> 
<h3></h3>
<a href="rawat_pasien.php">Data Perawat Pasien</a>
<h3></h3>
<a href="pengobatan_pasien.php">Data Pengobatan Pasien</a>
<h3></h3>
<a href="logout.php">Logout</a>
</table>

</body>
</html>
