<form action="index.php?controller=staff&action=update&id=<?= $item['id'];?>" method="post">
    <h2>Thay đổi thông tin</h2>
  <div class="form-group">
    <label>Tên Nhân Viên</label>
    <input type="text" class="form-control" name="TenNV" value="<?= $item['TenNV'];?>">
  </div>
  <div class="form-group">
    <label>Giới Tính</label><br>
    <select id="select" name="GioiTinh" >
                                <?php
                                if($item['GioiTinh']==0){

                                ?>
                                <option selected value="0">Nữ</option>
                                <option value="1">Nam</option>
                                <?php
                                }else{   
                                ?>
                                   <option  value="0">Nữ</option>
                                    <option selected value="1">Nam</option>
                                <?php
                                }
                                ?>
                            </select>
  </div>
  <div class="form-group">
    <label>Địa Chỉ</label>
    <input type="text" class="form-control" name="DiaChi" value="<?= $item['DiaChi'];?>">
  </div>
  <div class="form-group">
    <label>Ngày Sinh</label>
    <input type="date" class="form-control" name="Ngaysinh" value="<?= $item['Ngaysinh'];?>">
  </div>
  <div class="form-group">
    <label>SĐT</label>
    <input type="text" class="form-control" name="SDT" value="<?= $item['SDT'];?>">
  </div>

  <button type="submit" class="btn btn-primary">Thay đổi</button>
</form>