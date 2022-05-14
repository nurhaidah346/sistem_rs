<?php
include_once("config.php");
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $search = strtolower($search);
}else $search = '';
if(isset($_GET['orderby']) and isset($_GET['pos'])){
    $orderby = $_GET['orderby'];
    $pos = $_GET['pos'];
    $result = mysqli_query($mysqli, "SELECT * FROM rawat_pasien ORDER BY $orderby $pos");
}else{
    $pos = '';
    $orderby = '';
    $result = mysqli_query($mysqli, "SELECT * FROM rawat_pasien");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Sistem Rumah Sakit </title>
</head>
<body>
    <h1>Data Perawat Pasien</h1>
<h3></h3>
<a href="homepage.php">Kembali ke MENU</a>
<h3></h3>
<a href="addRawat.php">Tambahkan Data Perawat</a>

    <table width='80%' border=1 cellpanding='10' cellspacing='0'>
<tr>

    <th><?php
        if($pos=='ASC' and $orderby=='NAMA_PASIEN') {
            echo '<a href="rawat_pasien.php?orderby=NAMA_PASIEN&pos=DESC">NAMA PASIEN</a>';
        }else {
            echo '<a href="rawat_pasien.php?orderby=NAMA_PASIEN&pos=ASC">NAMA PASIEN</a>';
        }
        ?></th>
          <th><?php
        if($pos=='ASC' and $orderby=='NAMA_KAMAR') {
            echo '<a href="rawat_pasien.php?orderby=NAMA_KAMAR&pos=DESC">NAMA KAMAR</a>';
        }else {
            echo '<a href="rawat_pasien.php?orderby=NAMA_KAMAR&pos=ASC">NAMA KAMAR</a>';
        }
        ?></th>
        <th><?php
        if($pos=='ASC' and $orderby=='JENIS_KAMAR') {
            echo '<a href="rawat_pasien.php?orderby=JENIS_KAMAR&pos=DESC">JENIS KAMAR</a>';
        }else {
            echo '<a href="rawat_pasien.php?orderby=JENIS_KAMAR&pos=ASC">JENIS KAMAR</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='NAMA_PERAWAT') {
            echo '<a href="rawat_pasien.php?orderby=NAMA_PERAWAT&pos=DESC">NAMA PERAWAT</a>';
        }else {
            echo '<a href="rawat_pasien.php?orderby=NAMA_PERAWAT&pos=ASC">NAMA PERAWAT</a>';
        }
        ?></th>
</tr>

<?php
while ($item = mysqli_fetch_array($result)) {
    
    if($search == ''){
        echo '<tr>';

        echo "<td>".$item ['nama_pasien']."</td>";
        echo "<td>".$item ['nama_kamar']."</td>";
        echo "<td>".$item ['jenis_kamar']."</td>";
        echo "<td>".$item ['nama_perawat']."</td>";
        echo "<td><a href='editRawat.php?edit=".$item['nama_pasien']."'>Edit</a> 
        <a href='deleteRawat.php?del=".$item['nama_pasien']."'>Delete</a>
        </td></tr>";  
    }else{
        if(

            strpos(strtolower($item ['nama_pasien']), $search)!==false or
            strpos(strtolower($item ['nama_kamar']), $search)!==false or
            strpos(strtolower($item ['jenis_kamar']), $search)!==false or
            strpos(strtolower($item ['nama_perawat']), $search)!==false 
        ){
            echo '<tr>';

            echo "<td>".$item ['nama_pasien']."</td>";
            echo "<td>".$item ['nama_kamar']."</td>";
            echo "<td>".$item ['jenis_kamar']."</td>";
            echo "<td>".$item ['nama_perawat']."</td>";
            echo "<td><a href='editRawat.php?edit=".$item['nama_pasien']."'>Edit</a> 
            <a href='deleteRawat.php?del=".$item['nama_pasien']."'>Delete</a>
            </td></tr>";  
        }
          
    }
}
    ?>
</table>
</body>
</html>