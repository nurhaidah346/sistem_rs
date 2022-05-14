<?php
include_once ("config.php");
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $search = strtolower($search);
}else $search = '';
if(isset($_GET['orderby']) and isset($_GET['pos'])){
    $orderby = $_GET['orderby'];
    $pos = $_GET['pos'];
    $result = mysqli_query($mysqli, "SELECT * FROM obat ORDER BY $orderby $pos");
}else{
    $pos = '';
    $orderby = '';
    $result = mysqli_query($mysqli, "SELECT * FROM obat");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sistem Rumah Sakit </title>
</head>
<body>
    <h1>Daftar Obat yang harus diminum Pasien</h1>
<h3></h3>
<a href="homepage.php">Kembali ke MENU</a>
<h3></h3>
<a href="addObat.php">Tambahkan Info Obat</a>
    <form action="obat.php" method="get">
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>
    <table width='80%' border=1 cellpanding='10' cellspacing='0'>
<tr>
    <th><?php
        if($pos=='ASC' and $orderby=='ID_OBAT') {
            echo '<a href="obat.php?orderby=ID_OBAT&pos=DESC">ID OBAT</a>';
        }else {
            echo '<a href="obat.php?orderby=ID_OBAT&pos=ASC">ID OBAT</a>';
        }
        ?></th>
          <th><?php
        if($pos=='ASC' and $orderby=='NAMA_OBAT') {
            echo '<a href="obat.php?orderby=NAMA_OBAT&pos=DESC">NAMA OBAT</a>';
        }else {
            echo '<a href="obat.php?orderby=NAMA_OBAT&pos=ASC">NAMA OBAT</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='HARGA') {
            echo '<a href="obat.php?orderby=HARGA&pos=DESC">HARGA</a>';
        }else {
            echo '<a href="obat.php?orderby=HARGA&pos=ASC">HARGA</a>';
        }
        ?></th>
</tr>

<?php
while ($item = mysqli_fetch_array($result)) {
    
    if($search == ''){
        echo '<tr>';
        echo "<td>".$item ['id_obat']."</td>";
        echo "<td>".$item ['nama_obat']."</td>";
        echo "<td>".$item ['harga']."</td>";
        echo "<td><a href='editObat.php?edit=".$item['id_obat']."'>Edit</a> 
        <a href='deleteObat.php?del=".$item['id_obat']."'>Delete</a>
        </td></tr>";  
    }else{
        if(
            strpos(strtolower($item ['id_obat']), $search)!==false or
            strpos(strtolower($item ['nama_obat']), $search)!==false or
            strpos(strtolower($item ['harga']), $search)!==false 
        ){
            echo '<tr>';
            echo "<td>".$item ['id_obat']."</td>";
            echo "<td>".$item ['nama_obat']."</td>";
            echo "<td>".$item ['harga']."</td>";
            echo "<td><a href='editObat.php?edit=".$item['id_obat']."'>Edit</a> 
            <a href='deleteObat.php?del=".$item['id_obat']."'>Delete</a>
            </td></tr>";  
        }
          
    }
}
    ?>
</table>
</body>
</html>