<?php
	$sql = "delete from `giohang` where MaGH = " . $_GET['id'];
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	else
	{
		echo "<h2 align='center'>Đã xoá món khỏi giỏ hàng.</h2>";
	}
?>