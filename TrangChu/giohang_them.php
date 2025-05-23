<?php
    $mamon = $_GET['id'];
    $mand = $_SESSION['MaND'];

    // Kiểm tra xem món ăn đã tồn tại trong giỏ hàng của người dùng chưa
    $sql_check = "SELECT * FROM `giohang` WHERE MaNguoiDung = '$mand' AND MaMon = '$mamon'";
    $result_check = $connect->query($sql_check);
    
    if ($result_check->num_rows > 0) {
        // Nếu món đã tồn tại, cập nhật số lượng
        $row = $result_check->fetch_assoc();
        $new_quantity = $row['SoLuong'] + 1;

        $sql_update = "UPDATE giohang SET SoLuong = '$new_quantity' WHERE MaNguoiDung = '$mand' AND MaMon = '$mamon'";
        $connect->query($sql_update);
        echo "<h2 align='center'>Đã thêm món vào giỏ hàng.</h2>";
    } else {
        // Nếu món chưa tồn tại, thêm mới vào giỏ hàng
        $sql_addgiohang = "INSERT INTO `giohang`(`MaNguoiDung`, `MaMon`, SoLuong) VALUES
                        ('$mand', '$mamon', 1)";
        $connect->query($sql_addgiohang);
        echo "<h2 align='center'>Đã thêm món vào giỏ hàng.</h2>";
    }
?>