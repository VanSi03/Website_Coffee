<?php
	$sql1 = "SELECT * FROM `nguoidung` WHERE MaNguoiDung = " . $_GET['id'];
	$danhsach1 = $connect->query($sql1);
    $dong = $danhsach1->fetch_array(MYSQLI_ASSOC);
	$ten = $dong['TenNguoiDung'];

	$sql = "delete from `nguoidung` where MaNguoiDung = " . $_GET['id'];
	$danhsach = $connect->query($sql);

	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	else
	{
        $sql1 = "SELECT * FROM `nguoidung` WHERE MaNguoiDung = " . $_GET['id'];
        $danhsach = $connect->query($sql1);
        $dong = $danhsach->fetch_array(MYSQLI_ASSOC);
		header("Location: index.php?do=qlnguoidung&id=".$MaND);
	}
?>