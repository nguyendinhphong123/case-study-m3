<form action="index.php?controller=detail&action=update&id=<?= $item['id'];?>" method="post">
    <h2>Thay đổi đơn hàng</h2>
  <div class="form-group">
    <label>Mã SP</label>
  
        <select name="MaSP" class="form-control" id="">
            <?php foreach ($products as $product) {?>
            <option <?= $product['id'] == $item['MaSP'] ? "selected" : "" ?> value="<?=$product['id'];?>"><?=$product['id'];?></option>
            <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label>Mã KH</label>
    <select name="MaKH" class="form-control" id="">
            <?php foreach ($users as $user) {?>
            <option <?= $user['id'] == $item['MaKH'] ? "selected" : "" ?> value="<?=$user['id'];?>"><?=$user['id'];?></option>
            <?php } ?>
            </select>
  </div>
  <div class="form-group">
    <label>Số Lượng</label>
    <input type="text" class="form-control" name="SoLuong" value="<?= $item['SoLuong'];?>">
  </div>
  <div class="form-group">
    <label>Đơn Giá</label>
    <input type="text" class="form-control" name="DonGia" value="<?= $item['DonGia'];?>">
  </div>
  <div class="form-group">
    <label>Giảm Giá</label>
    <input type="text" class="form-control" name="GiamGia" value="<?= $item['GiamGia'];?>">
  </div>
  <div class="form-group">
    <label>Tổng Tiền</label>
    <input type="text" class="form-control" name="TongTien" value="<?= $item['TongTien'];?>">
  </div>
  <div class="form-group">
    <label>Ngày Đặt Hàng</label>
    <input type="date" class="form-control" name="ngaydat" value="<?= $item['ngaydat'];?>">
  </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
</form>