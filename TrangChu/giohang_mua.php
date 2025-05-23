<?php
    $magh = $_GET['id'];

    // Kiểm tra xem món ăn đã tồn tại trong giỏ hàng của người dùng chưa
    $sql = "SELECT gh.*, m.*, nd.* FROM `giohang` gh , `mon` m, `nguoidung` nd  WHERE MaGH='$magh' AND m.MaMon = gh.MaMon AND nd.MaNguoiDung = gh.MaNguoiDung";	
    $danhsach = $connect->query($sql);
    while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 
    {
        $gia = $row["SoLuong"] * $row["DonGia"];
        echo "<form id='f' action='index.php?do=giohang_mua_xuly&id=" .$row["MaGH"]."' method='post'>";
            echo '<table border="0" align="center">';
                echo '<tr>
                    <th colspan="2"><h4>THÔNG TIN ĐƠN</h4></th>
                </tr>';
                echo '<tr>
                    <td width="30%">Họ và tên</td>
                    <td>
                        <input type="text" readonly class="form-control-plaintext" value="'. $row["TenNguoiDung"] .'" name="TenDangNhap">
                    </td>
                </tr>';
                echo '<tr>
                    <td>Tên món</td>
                    <td>
                        <input type="text" readonly class="form-control-plaintext" value="'. $row["Ten"] .'" name="TenDangNhap">
                    </td>
                </tr>';
                echo '<tr>
                    <td>Số lượng</td>
                    <td>
                        <input id="txtSoLuong" class="form-control" type="text" value="'. $row["SoLuong"] .'" onchange="updateGia()">
                    </td>
                </tr>';
                echo '<tr>
                    <td>Giá</td>
                    <td>
                        <input id="txtGia" class="form-control" type="text" value="'. $gia .'" readonly="true">
                    </td>
                </tr>';
                echo '<tr>
                    <td>Ghi chú</td>
                    <td>
                        <textarea class="form-control" rows="3" name="txtGhiChu"></textarea>
                    </td>
                </tr>';
                echo '<tr>
                    <th colspan="2">
                        <input type="submit" class="btn btn-outline-dark rounded-pill m-2" value="Huỷ" onclick="submitHuy()">
                        <input type="submit" class="btn btn-dark rounded-pill m-2" value="Mua">
                    </th>
                </tr>  ';     
            echo '</table>';
        echo '</form>';
    }
    
?>

<script>
    function updateGia() {
        var sl = document.getElementById("txtSoLuong").value;
        var gia = sl * <?php
                            $sql = "SELECT gh.*, m.*, nd.* FROM `giohang` gh , `mon` m, `nguoidung` nd  WHERE MaGH='$magh' AND gh.MaMon = m.MaMon AND nd.MaNguoiDung = gh.MaNguoiDung";	
                            $danhsach = $connect->query($sql);
                            $row = $danhsach->fetch_array(MYSQLI_ASSOC);
                            echo $row["DonGia"]; 
                        ?>;
        document.getElementById("txtGia").value = gia;
    }

    function submitHuy() {
        var maND = "<?php echo $_SESSION["MaND"]; ?>";
        document.getElementById("f").action = "index.php?do=giohang&id=" + maND;
        document.getElementById("f").submit();
    }
</script>