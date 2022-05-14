<?php
    include 'config.php';
    $result = mysqli_query($mysqli, "SELECT * FROM pasien, rekam_medis, obat");
    $result = mysqli_fetch_array($result);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="searchPage.php">
            <input type="text" name="search">
            <input type="submit" name="submit" value="Search">
        </form>   
    </body>
</html>