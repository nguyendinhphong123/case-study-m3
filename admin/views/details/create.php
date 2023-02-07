<form action="index.php?controller=detail&action=store" method="post">
    <h2>Thêm mới đơn hàng</h2>
    <div class="form-group">
    <label>Ma SP</label>
    <select name="MaSP" class="form-control">
    <option value="">--Vui lòng chọn--</option>
            <?php foreach( $products as $product ): ?>
            <option value="<?php echo $product['id'];?>"><?php echo $product['id'];?></option>
            <?php endforeach; ?>
        </select> <br>
  </div>
  <div class="form-group">
    <label>Ma KH</label>
    <select name="MaKH" class="form-control">
    <option value="">--Vui lòng chọn--</option>
            <?php foreach( $user as $row ): ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
            <?php endforeach; ?>
        </select> <br>
  </div>
  <div class="form-group">
    <label>Số Lượng</label>
    <input type="text" class="form-control" name="SoLuong">
  </div>
  <div class="form-group">
    <label>Đơn Giá</label>
    <input type="text" class="form-control" name="DonGia">
  </div>
  <div class="form-group">
    <label>Giảm Giá</label>
    <input type="text" class="form-control" name="GiamGia">
  </div>
  <div class="form-group">
    <label>Tổng Tiền</label>
    <input type="text" class="form-control" name="TongTien">
  </div>
  <div class="form-group">
    <label>Ngày Đặt Hàng</label>
    <input type="date" class="form-control" name="ngaydat">
  </div>

  <button type="submit" class="btn btn-primary">Thêm</button>
</form>