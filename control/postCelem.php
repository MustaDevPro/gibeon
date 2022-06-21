<?php
require_once "../config/config.php";
$name = $_POST['prodName'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$file = $_FILES['file']['tmp_name'];
$fileName = $_FILES['file']['name'];
$target = "../assests/images/";
