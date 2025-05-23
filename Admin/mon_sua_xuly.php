<?php
	// Lấy thông tin từ FORM
    $MaMon = $_POST['MaMon'];
	$TenMon = $_POST['TenMon']; 
    $PhanLoai = $_POST['PhanLoai']; 
	$DonGia = $_POST['DonGia'];	
	// Kiểm tra
	if(trim($TenMon) == "")
		ThongBaoLoi("Tên món không được bỏ trống!");
	elseif(trim($DonGia) == "" || !is_numeric($DonGia))
		ThongBaoLoi("Đơn giá phải là số và không được bỏ trống");
	else
	{	
		$sql = "update	danhsach
				SET		Ten = '$TenMon',
						PhanLoai = '$PhanLoai',
						DonGia = $DonGia
				WHERE	MaMon = $MaMon";
		
		$danhsach = $connect->query($sql);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		else
		{
			ThongBao("Cập nhật món thành công.");
		}
	}
?>