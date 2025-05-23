<?php
$sql = "SELECT * FROM `nguoidung` WHERE MaNguoiDung = " . $_SESSION['MaND'];

$danhsach = $connect->query($sql);
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$danhsach) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<h3>Thông tin tài khoản</h3>
<form action="index.php?do=hosocanhan_xuly" method="post">
    <input type="hidden" value="<?php echo $_SESSION['MaND']; ?>" name="MaNguoiDung" />
    <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Tên đăng nhập</label>
        <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $dong['TenDangNhap']; ?>" name="TenDangNhap">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Tên người dùng </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="<?php echo $dong['TenNguoiDung']; ?>" name="HoVaTen">
        </div>
    </div>
    <input type="submit" class="btn btn-outline-dark rounded-pill" value="Cập nhật thông tin">
</form>