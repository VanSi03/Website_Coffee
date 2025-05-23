<?php
	$sql = "SELECT * FROM `nguoidung`";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

?>
<h3>Danh sách người dùng</h3>
<a class="btn btn-outline-dark rounded-pill mb-3" href="index.php?do=themnguoidung"><i class="bi bi-plus-circle"></i> Thêm người dùng</a>
<table class="table table-hover table-bordered align-middle">
    <thead class="table-secondary">  
        <tr>
            <th>Mã ND</th>
            <th>Họ và tên</th>
            <th>Tên đăng nhập</th>
            <th>Quyền</th>
            <th colspan="3">Hành động</th>
        </tr>
    </thead>
        <tbody>
	<?php
		//Dùng vòng lặp while truy xuất các phần tử trong table
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) 
		{			
			echo "<tr>";
				echo "<td>" . $dong["MaNguoiDung"] . "</td>";
				echo "<td>" . $dong["TenNguoiDung"] . "</td>";
				echo "<td>" . $dong["TenDangNhap"] . "</td>";
				
				echo "<td>";
					if($dong["QuyenHan"] == 1)
						echo "Quản trị (<a class='link-danger' href='index.php?do=nguoidung_quyen&id=" . $dong["MaNguoiDung"] . "&quyen=2'>Hạ quyền</a>)";
					else if ($dong["QuyenHan"] == 2)
						echo "Nhân viên (<a class='link-success' href='index.php?do=nguoidung_quyen&id=" . $dong["MaNguoiDung"] . "&quyen=1'>Nâng quyền</a>)";
					else
						echo "Khách hàng";	
				echo "</td>";
				
				echo "<td align='center'>";
					if($dong["Khoa"] == 0)
						echo "<a href='index.php?do=nguoidung_kichhoat&id=" . $dong["MaNguoiDung"] . "&khoa=1'><i class='bi bi-unlock'></i></a>";
					else
						echo "<a href='index.php?do=nguoidung_kichhoat&id=" . $dong["MaNguoiDung"] . "&khoa=0'><i class='bi bi-lock'></i></a>";
				echo "</td>";
				
				echo "<td align='center'><a href='index.php?do=nguoidung_sua&id=" . $dong["MaNguoiDung"] . "'><i class='bi bi-pencil-square'></i></a></td>";
				echo "<td align='center'><a href='index.php?do=nguoidung_xoa&id=" . $dong["MaNguoiDung"] . "' onclick='return confirm(\"Bạn có muốn xóa người dùng " . $dong['TenNguoiDung'] . " không?\")'><i class='bi bi-trash3'></i></a></td>";
			echo "</tr>";
		}
	?>
    </tbody>
</table>