<?php
	// Lấy thông tin từ FORM
	$TenMon = $_POST['TenMon'];
	$PhanLoai = $_POST['PhanLoai'];
	$DonGia = $_POST['DonGia'];

	// Kiểm tra
	if(trim($TenMon) == "")
		ThongBaoLoi("Tên món không được bỏ trống!");
	elseif(trim($DonGia) == "" || !is_numeric($DonGia))
		ThongBaoLoi("Đơn giá không được bỏ trống và phải là số!");
	else
	{
		// Kiểm tra người dùng đã tồn tại chưa
		$sql_kiemtra = "SELECT * FROM mon WHERE Ten = '$TenMon'";
		
		$kiemtra = $connect->query($sql_kiemtra);
		
		if($kiemtra->num_rows > 0)
		{
			ThongBaoLoi("Món đã tồn tại!");	
		}
		else
		{
			$target_path = "images/";
			$target_path1 = "../TrangChu/images/";
			
			$target_path = $target_path . basename($_FILES['HinhAnh']['name']);
			$target_path1 = $target_path1 . basename($_FILES['HinhAnh']['name']);
			
			
			if (move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $target_path))
			{
				//			
			}
			else
				echo "Tập tin upload không thành công.<br/>";		
			
			copy($target_path, $target_path1);
			
			$sql_them = "INSERT INTO `mon`(`Ten`, `PhanLoai`, `DonGia`, `HinhAnh`)
					VALUES ('$TenMon', '$PhanLoai', '$DonGia', '$target_path')";
			$themmon = $connect->query($sql_them);
			
			if($themmon)
				ThongBao("Thêm món thành công!");
			else
				ThongBaoLoi($connect->error);
		}
	}
?>