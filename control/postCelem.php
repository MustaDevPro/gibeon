<?php
session_start();
require_once "../config/config.php";
$name = $_POST['prodName'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$file = $_FILES['file']['tmp_name'];
$fileName = $_FILES['file']['name'];
$file_ext=$_FILES['file']['type'];
$id = rand(000000000000,99999999999);
$sql = "INSERT INTO `posts`(`id`, `location`, `price`, `description`, `image`) 
VALUES ('$id','$name','$price','$desc','$fileName')";
      if($file_ext == 'image/jpeg' or $file_ext == 'image/jpg' or $file_ext == 'image/png' or $file_ext == 'image/gif'){
        if(move_uploaded_file($file,"../assets/images/".$fileName)){
            if(mysqli_query($conn,$sql)){
                $_SESSION['success'] = "Successfully Posted!";
                header("location:index.php");
            }
        }else{
            $_SESSION['fail'] = "Successfully Posted!";
            header("location:index.php");
        }
    }else{
        $_SESSION['fail'] = "extension not allowed, please choose a JPEG or PNG file.";
        header("location:addProduct.php");
        $errors="";
    }
            
   
