<?php
include_once ("config.php");
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $search = strtolower($search);
}else $search = '';
if(isset($_GET['orderby']) and isset($_GET['pos'])){
    $orderby = $_GET['orderby'];
    $pos = $_GET['pos'];
    $result = mysqli_query($mysqli, "SELECT * FROM pasien ORDER BY $orderby $pos");
}else{
    $pos = '';
    $orderby = '';
    $result = mysqli_query($mysqli, "SELECT * FROM pasien");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sistem Rumah Sakit </title>
</head>
<body>
    <h1>Daftar Nama Pasien</h1>
<h3></h3>
<a href="homepage.php">Kembali ke MENU</a>
<h3></h3>
<a href="addPasien.php">Tambahkan Info Pasien</a>
    <form action="pasien.php" method="get">
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>
    <table width='80%' border=1 cellpanding='10' cellspacing='0'>
<tr>
    <th><?php
        if($pos=='ASC' and $orderby=='ID_PASIEN') {
            echo '<a href="pasien.php?orderby=ID_PASIEN&pos=DESC">ID PASIEN</a>';
        }else {
            echo '<a href="pasien.php?orderby=ID_PASIEN&pos=ASC">ID PASIEN</a>';
        }
        ?></th>
          <th><?php
        if($pos=='ASC' and $orderby=='NAMA_PASIEN') {
            echo '<a href="pasien.php?orderby=NAMA_PASIEN&pos=DESC">NAMA PASIEN</a>';
        }else {
            echo '<a href="pasien.php?orderby=NAMA_PASIEN&pos=ASC">NAMA PASIEN</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='ALAMAT') {
            echo '<a href="pasien.php?orderby=ALAMAT&pos=DESC">ALAMAT</a>';
        }else {
            echo '<a href="pasien.php?orderby=ALAMAT&pos=ASC">ALAMAT</a>';
        }
        ?></th>
</tr>

<?php
while ($item = mysqli_fetch_array($result)) {
    
    if($search == ''){
        echo '<tr>';
        echo "<td>".$item ['id_pasien']."</td>";
        echo "<td>".$item ['nama_pasien']."</td>";
        echo "<td>".$item ['alamat']."</td>";
        echo "<td><a href='editPasien.php?edit=".$item['id_pasien']."'>Edit</a> 
        <a href='deletePasien.php?del=".$item['id_pasien']."'>Delete</a>
        </td></tr>";  
    }else{
        if(
            strpos(strtolower($item ['id_pasien']), $search)!==false or
            strpos(strtolower($item ['nama_pasien']), $search)!==false or
            strpos(strtolower($item ['alamat']), $search)!==false 
        ){
            echo '<tr>';
            echo "<td>".$item ['id_pasien']."</td>";
            echo "<td>".$item ['nama_pasien']."</td>";
            echo "<td>".$item ['alamat']."</td>";
            echo "<td><a href='editPasien.php?edit=".$item['id_pasien']."'>Edit</a> 
            <a href='deletePasien.php?del=".$item['id_pasien']."'>Delete</a>
            </td></tr>";  
        }
          
    }
}
    ?>
</table>
</body>
</html>