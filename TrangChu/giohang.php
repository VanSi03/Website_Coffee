<?php	
    $mand = $_GET['id'];			
    $sql = "SELECT gh.*, m.* FROM `giohang` gh , `mon` m  WHERE MaNguoiDung='$mand' AND gh.MaMon = m.MaMon";	
    $danhsach = $connect->query($sql);

    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$danhsach) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }			

    $count = mysqli_num_rows($danhsach);
    if ($count > 0)
    {     
?>		
<table class="table table-hover table-bordered align-middle">
    <thead class="table-secondary">
        <tr>
            <td>Hình ảnh</td>
            <td>Tên món</td>
            <td>Phân loại</td>
            <td>Số lượng</td>
            <td>Giá</td>
            <td>Xoá</td>
            <td>Mua</td>
        </tr>
    </thead>
    <tbody>
    <?php	
        while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
        {		
            $gia = $row["SoLuong"] * $row["DonGia"];
            echo "<tr>";
                echo "<td><img class='hinhanhphim' src=" . $row["HinhAnh"] . " style='height: 180px;'></td>";
                echo "<td>". $row["Ten"] ."</td>";
                echo "<td>". $row["PhanLoai"] ."</td>";
                echo "<td>". $row["SoLuong"] ."</td>";
                echo "<td>". $gia ."</td>";

                echo "<td><a href='index.php?do=giohang_xoa&id=" . $row['MaGH'] . "' onclick='return confirm(\"Bạn muốn xoá " . $row['Ten'] . " khỏi giỏ hàng?\")'><i class='bi bi-trash3'></i></a></td>";
                echo "<td><a href='index.php?do=giohang_mua&id=" . $row['MaGH'] . "' onclick='return confirm(\"Bạn muốn mua " . $row['Ten'] . "?\")'><i class='bi bi-bag'></i></td>";
            echo "</tr>";
        }
    }
        else 
        {
            echo "<h2 align='center'>Giỏ hàng trống...</h2>";
        }
                
    ?>
    </tbody>
</table>            