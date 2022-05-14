<?php
include 'config.php';
session_start();
$result = mysqli_query($mysqli, "SELECT * FROM account");
while($account = mysqli_fetch_array($result)){
    if(isset($_SESSION["username"])==$account['username'] and isset($_SESSION["password"])==$account['password']){
        header("location:homepage.php");  
    }
}
?>
<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="center">
        <h2>
        <form action="prosesLogin.php" method="POST">
        <?php
            if (isset($_GET['msg'])){
                echo "<h3>Username atau Password Salah</h3>";
            }
            ?>
            <input type="text" name="username" placeholder="username" id="login" class="button medium-btn"><br>
            <input type="password" name="password" placeholder="password" id="login" class="button medium-btn"><br>
            <input type="submit" name="submit" value="login" id="loginButton" class="button small-btn">
            
        </form>
        </h2>
        </div>   
    </body>
</html>
