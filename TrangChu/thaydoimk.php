<div class="d-flex justify-content-center m-5">
    <form action="index.php?do=thaydoimk_xuly" method="post">
        <div class="flex justify-center items-center text-center px-5 border-bottom">
            <h1>Thay đổi mật khẩu</h1>
        </div>
        <input type="hidden" value="<?php echo $_SESSION['MaND']; ?>" name="MaNguoiDung" />
        <div class="mb-3">
            <label class="col-sm col-form-label">Mật khẩu cũ</label>
            <div class="col-sm">
                <input type="password" class="form-control" name="MatKhauCu">
            </div>
        </div>
        <div class="mb-3">
            <label class="col-3-sm col-form-label">Mật khẩu mới</label>
            <div class="col-9-sm">
                <input type="password" class="form-control" name="MatKhauMoi">
            </div>
        </div>
        <div class="mb-3">
            <label class="col-sm col-form-label">Xác nhận mật khẩu mới</label>
            <div class="col-sm">
                <input type="password" class="form-control" name="XacNhanMK">
            </div>
        </div>
        <div class="flex justify-center items-center text-center my-3">
            <input type="submit" class="btn btn-outline-dark rounded-pill" value="Thay đổi mật khẩu">
        </div>
    </form>
</div>