<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "BaiTapLon";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die("Ket noi that bai");
}


$conn = mysqli_connect("localhost","root","","baitaplon");

if($conn){
    echo "Ket noi thanh cong";
}else{
    echo "Ket noi that bai";
}

?>



