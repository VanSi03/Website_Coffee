<?php
	// Lấy thông tin từ FORM
    $MaND = $_POST['MaNguoiDung'];
    $MKCu = $_POST['MatKhauCu'];
	$MKMoi = $_POST['MatKhauMoi']; 
    $XNMK = $_POST['XacNhanMK'];
	// Kiểm tra
	$query = "select * from nguoidung where MaNguoiDung=".$MaND;
    $list = $connect->query($query);
    if (!$list) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }
    $row = $list->fetch_array(MYSQLI_ASSOC);
    if(trim($MKCu) == "")
		ThongBaoLoi("Không được để trống mật khẩu cũ");
	elseif(trim($MKMoi) == "")
		ThongBaoLoi("Không được để trống mật khẩu mới");
    elseif(trim($XNMK) == "")
		ThongBaoLoi("Không được để trống mật khẩu xác nhận");
    elseif(md5($MKCu) != $row['MatKhau'])
		ThongBaoLoi("Mật khẩu cũ không chính xác");
    elseif(trim($MKMoi) !=  trim($XNMK))
		ThongBaoLoi("Xác nhận mật khẩu không trùng khớp!");
	else
	{	
		$MKMoi = md5($MKMoi);
        $sql = "update nguoidung set MatKhau = '$MKMoi' WHERE MaNguoiDung = $MaND";
		
		$danhsach = $connect->query($sql);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		else
		{
			ThongBao("Thay đổi mật khẩu thành công.");
		}
	}
?>