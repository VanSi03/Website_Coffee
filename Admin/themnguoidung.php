<h3>Thêm người dùng</h3>
<form class="row g-1" action="index.php?do=dangky_xuly" method="post">
    <div class="flex justify-content-start mt-2">
        <div class="mb-3">
            <label for="txt_TenND" class="form-label">Tên người dùng</label>
            <input type="text" class="form-control" placeholder="Nguyễn Văn A" name="HoVaTen">
        </div>
        <div class="mb-3">
            <label for="txt_TenDN" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" name="TenDangNhap">
        </div>
        <div class="mb-3">
            <label for="txt_MK" class="form-label">Mật khẩu</label>
            <input type="password" id="txt_MK" class="form-control" aria-describedby="passwordHelpBlock" name="MatKhau">
        </div>
        <div class="mb-3">
            <label for="txt_MK" class="form-label">Xác nhận mật khẩu</label>
            <input type="password" id="txt_MK" class="form-control" aria-describedby="passwordHelpBlock" name="XNMatKhau">
        </div>
    </div>
    <div class="flex justify-content-start mt-3">
        <input type="submit" class="btn btn-outline-dark rounded-pill" value="Thêm">
    </div>
</form>