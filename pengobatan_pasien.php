<?php
include_once("config.php");
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $search = strtolower($search);
}else $search = '';
if(isset($_GET['orderby']) and isset($_GET['pos'])){
    $orderby = $_GET['orderby'];
    $pos = $_GET['pos'];
    $result = mysqli_query($mysqli, "SELECT * FROM pengobatan_pasien ORDER BY $orderby $pos");
}else{
    $pos = '';
    $orderby = '';
    $result = mysqli_query($mysqli, "SELECT * FROM pengobatan_pasien");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Sistem Rumah Sakit </title>
</head>
<body>
    <h1>Data Pengobatan Pasien</h1>
<h3></h3>
<a href="homepage.php">Kembali ke MENU</a>
<h3></h3>
<a href="addPengobatan.php">Tambahkan Data Pengobatan</a>

    <table width='80%' border=1 cellpanding='10' cellspacing='0'>
<tr>
    <th><?php
        if($pos=='ASC' and $orderby=='NAMA_PASIEN') {
            echo '<a href="pengobatan_pasien.php?orderby=NAMA_PASIEN&pos=DESC">NAMA PASIEN</a>';
        }else {
            echo '<a href="pengobatan_pasien.php?orderby=NAMA_PASIEN&pos=ASC">NAMA PASIEN</a>';
        }
        ?></th>
          <th><?php
        if($pos=='ASC' and $orderby=='DIAGNOSA') {
            echo '<a href="pengobatan_pasien.php?orderby=DIAGNOSA&pos=DESC">DIAGNOSA</a>';
        }else {
            echo '<a href="pengobatan_pasien.php?orderby=DIAGNOSA&pos=ASC">DIAGNOSA</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='NAMA_DOKTER') {
            echo '<a href="pengobatan_pasien.php?orderby=NAMA_DOKTER&pos=DESC">NAMA DOKTER</a>';
        }else {
            echo '<a href="pengobatan_pasien.php?orderby=NAMA_DOKTER&pos=ASC">NAMA DOKTER</a>';
        }
        ?></th>
</tr>

<?php
while ($item = mysqli_fetch_array($result)) {
    
    if($search == ''){
        echo '<tr>';
        echo "<td>".$item ['nama_pasien']."</td>";
        echo "<td>".$item ['diagnosa']."</td>";
        echo "<td>".$item ['nama_dokter']."</td>";
        echo "<td><a href='editPengobatan.php?edit=".$item['nama_pasien']."'>Edit</a> 
        <a href='deletePengobatan.php?del=".$item['nama_pasien']."'>Delete</a>
        </td></tr>";  
    }else{
        if(
            strpos(strtolower($item ['nama_pasien']), $search)!==false or
            strpos(strtolower($item ['diagnosa']), $search)!==false or
            strpos(strtolower($item ['nama_dokter']), $search)!==false 
        ){
            echo '<tr>';
            echo "<td>".$item ['nama_pasien']."</td>";
            echo "<td>".$item ['diagnosa']."</td>";
            echo "<td>".$item ['nama_dokter']."</td>";
            echo "<td><a href='editPengobatan.php?edit=".$item['nama_pasien']."'>Edit</a> 
            <a href='deletePengobatan.php?del=".$item['nama_pasien']."'>Delete</a>
            </td></tr>";  
        }
          
    }
}
    ?>
</table>
</body>
</html>