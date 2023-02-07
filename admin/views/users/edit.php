<form action="index.php?controller=user&action=update&id=<?= $item['id'];?>" method="post">
    <h2>Thay đổi thông tin</h2>
  <div class="form-group">
    <label>Tên Khách Hàng</label>
    <input type="text" class="form-control" name="TenKH" value="<?= $item['TenKH'];?>">
  </div>
  <div class="form-group">
    <label>Địa Chỉ</label>
    <input type="text" class="form-control" name="DiaChi" value="<?= $item['DiaChi'];?>">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" value="<?= $item['email'];?>">
  </div>
  <div class="form-group">
    <label>SĐT</label>
    <input type="text" class="form-control" name="SDT" value="<?= $item['SDT'];?>">
  </div>
  <div class="form-group">
    <label>Mật Khẩu</label>
    <input type="text" class="form-control" name="matkhau" value="<?= $item['matkhau'];?>">
  </div>

  <button type="submit" class="btn btn-primary">Thêm</button>
</form>