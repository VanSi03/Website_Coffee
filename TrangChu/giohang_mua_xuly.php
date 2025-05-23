<?php
    $magh = $_GET['id'];

    // Lấy mã giỏ hàng để xoá
    $sql = "SELECT gh.*, m.* FROM `giohang` gh, `mon` m WHERE MaGH = '$magh' AND m.MaMon = gh.MaMon";
    $danhsach = $connect->query($sql);

    $row = $danhsach->fetch_assoc();

    $sql_delete = "DELETE FROM `giohang` WHERE MaGH = '$magh'";
    $connect->query($sql_delete);
    
    echo "<h2 align='center'>Bạn đã đặt đơn hàng: " . $row['Ten'] . " số lượng: " . $row['SoLuong'] . "</h2>";
    
?>