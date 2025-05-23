<h3>Thêm món</h3>
<form class="row g-1" enctype="multipart/form-data" action="index.php?do=themmon_xuly" method="post">
    <div class="flex justify-content-start mt-2">
        <div class="mb-3">
            <label class="form-label">Tên món</label>
            <input type="text" class="form-control" name="TenMon">
        </div>
        <div class="mb-3">
            <label class="form-label">Phân loại</label>
            <select class="form-select" aria-label="Default select example" name="PhanLoai">
                <option value="cà phê" selected>Cà phê</option>
                <option value="món ăn">Món ăn</option>
                <option value="đồ uống">Đồ uống</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Đơn giá</label>
            <input type="text" class="form-control" name="DonGia">
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" name="HinhAnh">
        </div>
    </div>
    <div class="flex justify-content-start mt-3">
        <input type="submit" class="btn btn-outline-dark rounded-pill" value="Thêm">
    </div>
</form>