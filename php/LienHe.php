<?php

include "connect.php";

if(isset($_POST['gui'])){

    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $noidung = $_POST['noidung'];

    $sql = "INSERT INTO lienhe(HoTen,Email,Sdt,NoiDung)
            VALUES('$hoten','$email','$sdt','$noidung')";

    mysqli_query($conn,$sql);

    echo "<script>alert('Gửi liên hệ thành công');</script>";
}

?>
