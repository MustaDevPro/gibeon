<?php
session_start();
require_once "../config/config.php";
// print_r($_POST);
$user = $_POST['username'];
$pass = $_POST['pasword'];
$sql = "SELECT * FROM `user` WHERE `usename` = '$user' OR `email` = '$user' AND `password` = '$pass'";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    $_SESSION['user'] = $_POST;
    header("location:index.php");
}else{
    $_SESSION['error'] = "Incorrect username or Password";
    header("location:login.php");   
}