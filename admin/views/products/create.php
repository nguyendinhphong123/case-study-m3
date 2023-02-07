<form action="index.php?controller=product&action=store" method="post" enctype ="multipart/form-data">
    <h2>Thêm mới sản phẩm</h2>
  <div class="form-group">
    <label>Thương Hiệu</label>
    <select name="MAHANGSX_id" class="form-control">
    <option value="">--Vui lòng chọn--</option>
            <?php foreach( $categories as $category ): ?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach; ?>
        </select> <br>
  </div>
  <div class="form-group">
    <label>Tên Sản Phẩm</label>
    <input type="text" class="form-control" name="TenSp">
  </div>
  <div class="form-group">
    <label>Số Lượng</label>
    <input type="text" class="form-control" name="SoLuong">
  </div>
  <div class="form-group">
    <label>Giá Nhập</label>
    <input type="text" class="form-control" name="GiaN">
  </div>
  <div class="form-group">
    <label>Giá Bán</label>
    <input type="text" class="form-control" name="GiaB">
  </div>
  <div class="form-group">
    <label>Hình ảnh sản phẩm</label>
    <input type="file" class="form-control" name="Anh">
  </div>
  <div class="form-group">
    <label>Mô Tả</label>
    <input type="text" class="form-control" name="mota">
  </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
</form>