<?php
	// Lấy thông tin từ FORM
	$HoVaTen = $_POST['HoVaTen'];
	$TenDangNhap = $_POST['TenDangNhap'];
	$MatKhau = $_POST['MatKhau'];
	$XNMatKhau = $_POST['XNMatKhau'];

	// Kiểm tra
	if(trim($HoVaTen) == "")
		ThongBaoLoi("Họ và tên không được bỏ trống!");
	elseif(trim($TenDangNhap) == "")
		ThongBaoLoi("Tên đăng nhập không được bỏ trống!");
	elseif(trim($MatKhau) == "")
		ThongBaoLoi("Mật khẩu không được bỏ trống!");
	elseif(trim($MatKhau) !=  trim($XNMatKhau))
		ThongBaoLoi("Xác nhận mật khẩu không trùng khớp!");
	else
	{
		// Kiểm tra người dùng đã tồn tại chưa
		$sql_kiemtra = "SELECT * FROM nguoidung WHERE TenDangNhap = '$TenDangNhap'";
		
		$kiemtra = $connect->query($sql_kiemtra);
		
		if($kiemtra->num_rows > 0)
		{
			ThongBaoLoi("Người dùng với tên đăng nhập đã được sử dụng!");	
		}
		else
		{
			// Mã hóa mật khẩu
			$MatKhau = md5($MatKhau);
			
			$sql_them = "INSERT INTO `nguoidung`(`TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`)
					VALUES ('$HoVaTen', '$TenDangNhap', '$MatKhau', 3, 0)";
			$themnd = $connect->query($sql_them);
			
			if($themnd)
				ThongBao("Đăng ký thành công!");
			else
				ThongBaoLoi($connect->error);
		}
	}
?>