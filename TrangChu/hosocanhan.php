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
<div class="d-flex justify-content-center m-5">
    <form action="index.php?do=hosocanhan_xuly" method="post">
        <div class="flex justify-center items-center text-center mb-3 border-bottom">
            <h1>Hồ sơ người dùng</h1>
        </div>
        <input type="hidden" value="<?php echo $_SESSION['MaND']; ?>" name="MaNguoiDung" />
        <div class="mb-3">
            <label class="col-sm col-form-label">Tên đăng nhập</label>
            <div class="col-sm">
                <input type="text" readonly class="form-control-plaintext" value="<?php echo $dong['TenDangNhap']; ?>" name="TenDangNhap">
            </div>
        </div>
        <div class="mb-3">
            <label class="col-sm col-form-label">Tên người dùng </label>
            <div class="col-sm">
                <input type="text" class="form-control" value="<?php echo $dong['TenNguoiDung']; ?>" name="HoVaTen">
            </div>
        </div>
        <div class="flex justify-center items-center text-center my-3">
            <input type="submit" class="btn btn-outline-dark rounded-pill" value="Cập nhật thông tin">
        </div>
    </form>
</div>