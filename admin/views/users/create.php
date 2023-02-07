<form action="index.php?controller=user&action=store" method="post" >
    <h2>Thêm mới khách hàng</h2>
  <div class="form-group">
    <label>Tên Khách Hàng</label>
    <input type="text" class="form-control" name="TenKH">
  </div>
  <div class="form-group">
    <label>Địa Chỉ</label>
    <input type="text" class="form-control" name="DiaChi">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>SĐT</label>
    <input type="text" class="form-control" name="SDT">
  </div>
  <div class="form-group">
    <label>Mật Khẩu</label>
    <input type="text" class="form-control" name="matkhau">
  </div>

  <button type="submit" class="btn btn-primary">Thêm</button>
</form>