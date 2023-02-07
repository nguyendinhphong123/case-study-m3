<form action="index.php?controller=product&action=update&id=<?= $item['id'];?>" method="post" enctype ="multipart/form-data">
    <h2>Thay đổi sản phẩm</h2>
  <div class="form-group">
    <label>Thương Hiệu</label>
   
        <select name="MAHANGSX_id" class="form-control" id="">
            <?php foreach ($categories as $category) {?>
            <option <?= $category['id'] == $item['MAHANGSX_id'] ? "selected" : "" ?> value="<?=$category['id'];?>"><?=$category['name'];?></option>
            <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label>Tên Sản Phẩm</label>
    <input type="text" class="form-control" name="TenSp" value="<?= $item['TenSp'];?>">
  </div>
  <div class="form-group">
    <label>Số Lượng</label>
    <input type="text" class="form-control" name="SoLuong" value="<?= $item['SoLuong'];?>">
  </div>
  <div class="form-group">
    <label>Giá Nhập</label>
    <input type="text" class="form-control" name="GiaN" value="<?= $item['GiaN'];?>">
  </div>
  <div class="form-group">
    <label>Giá Bán</label>
    <input type="text" class="form-control" name="GiaB" value="<?= $item['GiaB'];?>">
  </div>
 
  <div class="form-group">
    <label for="pwd">Hình ảnh sản phẩm</label>
    <input type="file" name="Anh"class="form-control" value="<?= "http://localhost/shop_dien_thoai/admin/".$item['Anh'];?>">
    <p> <img src="<?= "http://localhost/shop_dien_thoai/admin/".$item['Anh'];?>" height="100" width="100" ></p>
  </div>
  <div class="form-group">
    <label>Mô Tả</label>
    <input type="text" class="form-control" name="mota" value="<?= $item['mota'];?>">
  </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
</form>