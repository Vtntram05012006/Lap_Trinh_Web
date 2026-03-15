<?php

include "connect.php";

$sql = "SELECT * FROM SanPham";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>

<div class="sanpham">

    <h3><?php echo $row['Ten']; ?></h3>

    <p>Gia: <?php echo $row['Gia']; ?> đ</p>
    <p>MasP: <?php echo $row['MaSP']; ?></p>
    <p>Mau: <?php echo $row['Mau'];?> </p>
    <p>Xuất xứ: <?php echo $row['XuatXu']?> </p>
    <p>Chất liệu: <?php echo $row['ChatLieu']?> </p>
    <p>Phù hơp.: <?php echo $row['PhuHop']?> </p>
    <p>Size: <?php echo $row['Size']?> </p>

</div>

<?php
}
?>
