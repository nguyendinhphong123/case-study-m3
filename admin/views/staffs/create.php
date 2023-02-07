<form action="index.php?controller=staff&action=store" method="post">
    <h2>Thêm mới nhân viên</h2>
  <div class="form-group">
    <label>Tên Nhân Viên</label>
    <input type="text" class="form-control" name="TenNV">
  </div>
  <div class="form-group">
    <label>Giới Tính</label><br>
    <select id="select" name="GioiTinh">
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
    <!-- <input type="text" class="form-control" name="GioiTinh"> -->
  </div>
  <div class="form-group">
    <label>Địa Chỉ</label>
    <input type="text" class="form-control" name="DiaChi">
  </div>
  <div class="form-group">
    <label>Ngày Sinh</label>
    <input type="date" class="form-control" name="Ngaysinh">
  </div>
  <div class="form-group">
    <label>SĐT</label>
    <input type="text" class="form-control" name="SDT">
  </div>

  <button type="submit" class="btn btn-primary">Thêm</button>
</form>