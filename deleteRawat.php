<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that data
$del = $_GET['del'];
// Delete data row from table based on given id
mysqli_query($mysqli, "DELETE FROM rawat_pasien WHERE nama_pasien='$del'");
header("Location:rawat_pasien.php");
?>
