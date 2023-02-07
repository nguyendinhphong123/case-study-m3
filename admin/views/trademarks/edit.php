<form action="index.php?controller=trademark&action=update&id=<?= $item['id'];?>" method="post">
    <h2>Thay đổi thương hiệu</h2>
  <div class="form-group">
    <label>Tên Thương Hiệu</label>
    <input type="text" class="form-control" name="name" value="<?= $item['name'];?>">
  </div>

  <button type="submit" class="btn btn-primary">Thay đổi</button>
</form>