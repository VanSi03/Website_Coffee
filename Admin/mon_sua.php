<?php
    $MaMon = $_GET['id'];
    $sql = "SELECT * FROM `mon` WHERE MaMon = ".$MaMon;

    $danhsach = $connect->query($sql);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$danhsach) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<h3>Cập nhật thông tin món</h3>
<form class="row g-1" action="index.php?do=mon_sua_xuly" method="post">
    <div class="flex justify-content-start mt-2">
        <input type="hidden" name="MaMon" value="<?php echo $dong['MaMon']; ?>" />
        <div class="mb-3">
            <label class="form-label">Tên món</label>
            <input type="text" class="form-control" name="TenMon" value="<?php echo $dong['Ten'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Phân loại</label>
            <select class="form-select" aria-label="Default select example" name="PhanLoai">
                <?php
                    if($dong['PhanLoai']=='cà phê'){
                        echo
                        '<option value="cà phê" selected>Cà phê</option>
                        <option value="đồ uống">Đồ uống</option>
                        <option value="món ăn">Món ăn</option>';
                    }
                    else if($dong['PhanLoai']=='đồ uống'){
                        echo
                        '<option value="cà phê">Cà phê</option>
                        <option value="đồ uống" selected>Đồ uống</option>
                        <option value="món ăn">Món ăn</option>';
                    }
                    else if($dong['PhanLoai']=='món ăn'){
                        echo
                        '<option value="cà phê">Cà phê</option>
                        <option value="đồ uống">Đồ uống</option>
                        <option value="món ăn" selected>Món ăn</option>';
                    }
                ?>
                
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Đơn giá</label>
            <input type="text" class="form-control" name="DonGia" value="<?php echo $dong['DonGia'] ?>">
        </div>
    </div>
    <div class="flex justify-content-start mt-3">
        <input type="submit" class="btn btn-outline-dark rounded-pill" value="Cập nhật">
    </div>
</form>