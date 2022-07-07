<?php
session_start();
require_once "../config/config.php";
$catName = $_POST['category'];
$sql = "INSERT INTO `category`(`name`) VALUES ('$catName')";
if(mysqli_query($conn,$sql)){
    $_SESSION['success'] = "Category have been Successfully Added!";
    header("location:index.php");
}else{
    $_SESSION['fail'] = "Failed to add category!";
    header("location:pending.php");
}