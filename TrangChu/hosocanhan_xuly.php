<?php
    // Lấy thông tin từ FORM
    $MaND = $_POST['MaNguoiDung'];
	$TenDangNhap = $_POST['TenDangNhap'];
	$HoVaTen = $_POST['HoVaTen'];

    $sql_update = "UPDATE `nguoidung` SET TenNguoiDung = '$HoVaTen', TenDangNhap = '$TenDangNhap' WHERE MaNguoiDung = '$MaND'";
    $danhsach = $connect->query($sql_update);
    if (!$danhsach) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }
    else {
        echo "<h2 align='center'>Thông tin đã được cập nhật</h2>"; 
    }  
?>