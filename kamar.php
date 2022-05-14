<?php
include_once ("config.php");
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $search = strtolower($search);
}else $search = '';
if(isset($_GET['orderby']) and isset($_GET['pos'])){
    $orderby = $_GET['orderby'];
    $pos = $_GET['pos'];
    $result = mysqli_query($mysqli, "SELECT * FROM kamar ORDER BY $orderby $pos");
}else{
    $pos = '';
    $orderby = '';
    $result = mysqli_query($mysqli, "SELECT * FROM kamar");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sistem Rumah Sakit </title>
</head>
<body>

    <h1>Daftar Kamar</h1>
<h3></h3>
<a href="homepage.php">Kembali ke MENU</a>
<h3></h3>
<a href="addKamar.php">Tambahkan Info Kamar</a>
    <form action="kamar.php" method="get">
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>
    <table width='80%' border=1 cellpanding='10' cellspacing='0'>     
<tr>
    <th><?php
        if($pos=='ASC' and $orderby=='ID_KAMAR') {
            echo '<a href="kamar.php?orderby=ID_KAMAR&pos=DESC">ID KAMAR</a>';
        }else {
            echo '<a href="kamar.php?orderby=ID_KAMAR&pos=ASC">ID KAMAR</a>';
        }
        ?></th>
          <th><?php
        if($pos=='ASC' and $orderby=='NAMA_KAMAR') {
            echo '<a href="kamar.php?orderby=NAMA_KAMAR&pos=DESC">NAMA KAMAR</a>';
        }else {
            echo '<a href="kamar.php?orderby=NAMA_KAMAR&pos=ASC">NAMA KAMAR</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='JENIS_KAMAR') {
            echo '<a href="kamar.php?orderby=JENIS_KAMAR&pos=DESC">JENIS KAMAR</a>';
        }else {
            echo '<a href="kamar.php?orderby=JENIS_KAMAR&pos=ASC">JENIS KAMAR</a>';
        }
        ?></th>
</tr>

<?php
while ($item = mysqli_fetch_array($result)) {
    
    if($search == ''){
        echo '<tr>';
        echo "<td>".$item ['id_kamar']."</td>";
        echo "<td>".$item ['nama_kamar']."</td>";
        echo "<td>".$item ['jenis_kamar']."</td>";
        echo "<td><a href='editKamar.php?edit=".$item['id_kamar']."'>Edit</a> 
        <a href='deleteKamar.php?del=".$item['id_kamar']."'>Delete</a>
        </td></tr>";  
    }else{
        if(
            strpos(strtolower($item ['id_kamar']), $search)!==false or
            strpos(strtolower($item ['nama_kamar']), $search)!==false or
            strpos(strtolower($item ['jenis_kamar']), $search)!==false 
        ){
            echo '<tr>';
            echo "<td>".$item ['id_kamar']."</td>";
            echo "<td>".$item ['nama_kamar']."</td>";
            echo "<td>".$item ['jenis_kamar']."</td>";
            echo "<td><a href='editKamar.php?edit=".$item['id_kamar']."'>Edit</a> 
            <a href='deleteKamar.php?del=".$item['id_kamar']."'>Delete</a>
            </td></tr>";  
        }
          
    }
}
    ?>
</table>
</body>
</html>