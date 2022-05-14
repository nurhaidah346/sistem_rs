<?php
include 'config.php';
session_start();
$result = mysqli_query($mysqli, "SELECT * FROM account");
$username = $_POST['username'];
$password = $_POST['password'];

while($account = mysqli_fetch_array($result)){
    if($username == $account['username'] and $password == $account['password']){
        if (isset($_POST['submit'])){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
        }
        header("location:hoempage.php");
    }
}

header("location:index.php?msg=wrongId");