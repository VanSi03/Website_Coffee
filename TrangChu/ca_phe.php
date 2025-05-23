<?php	
	$sql = "SELECT * FROM `mon` WHERE PhanLoai='cà phê'";	
	$danhsach = $connect->query($sql);

	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

	$count_kq = mysqli_num_rows($danhsach);
			
	while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
	{						
		echo "<div class='container'>";
			echo "<div class='khungsp'>";
				echo "<div class='card'>";		
					echo "<img class='hinhsp' src=" . $row["HinhAnh"] . ">";
					echo "<h4>". $row["Ten"] ."</h4>";
					echo "<p class='giaban'>". $row["DonGia"] ." đ</p>";
					//hiện thông tin mua và thêm vào giỏ hàng
					if(isset($_SESSION['MaND']))
					{
						echo 
						'<a href="index.php?do=giohang_them&id=' . $row["MaMon"] . '" class="btn btn-dark rounded-pill mt-2 mx-3">
							<i class="bi bi-cart"></i> Thêm vào giỏ
						</a>';
					}		
				echo "</div>";					
			echo "</div>";
		echo "</div>";
	}
?> 			   