<?php
    include_once '../db.php';?>
<?php

    $sql = "SELECT * FROM `san_pham`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $san_pham = $stmt->fetchAll();

    $sql = "SELECT * FROM `khach_hang`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $khach_hang = $stmt->fetchAll();

    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        $MASP = $_REQUEST['MaSP'];
        $MAKH = $_REQUEST['MaKH'];
        $SOLUONG = $_REQUEST['SoLuong'];
        $DONGIA = $_REQUEST['DonGia'];
        $GIAMGIA = $_REQUEST['GiamGia'];
        $TONGTIEN = $_REQUEST['TongTien'];

        //Viet cau truy van
        $sql = "INSERT INTO chi_tiet_don_hang(MaSP,MaKH,SoLuong,DonGia,GiamGia,TongTien) VALUES($MASP,$MAKH,$SOLUONG,'$DONGIA','$GIAMGIA','$TONGTIEN')";
        //Debug sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $conn->exec($sql);

        //Chuyen huong
        header("Location: list.php");
    }
?>
<?php include_once '../header.php'; ?>

<div class="container-fluid px-4">
<h3>Thêm mới đơn hàng</h3>
<form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">Mã Sản Phẩm</label>
    <select name="MaSP" class="form-control">
    <?php foreach( $san_pham as $sp ): ?>
      <option value="<?php echo $sp['id'];?>"><?php echo $sp['id'];?> - <?php echo $sp['TenSp'];?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Mã Khách Hàng</label>
    <select name="MaKH" class="form-control">
    <?php foreach( $khach_hang as $kh ): ?>
      <option value="<?php echo $kh['id'];?>"><?php echo $kh['id'];?> - <?php echo $kh['TenKH'];?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
  <label  class="form-label">Số Lượng</label>
    <input type="text" class="form-control" name="SoLuong">
  </div>
  <div class="mb-3">
  <label  class="form-label">Đơn Giá</label>
    <input type="text" class="form-control" name="DonGia">
  </div>
  <div class="mb-3">
  <label  class="form-label">Giảm Giá</label>
    <input type="text" class="form-control" name="GiamGia">
  </div>
  <div class="mb-3">
  <label  class="form-label">Tổng Thanh Toán</label>
    <input type="text" class="form-control" name="TongTien">
  </div>

  <input type="submit" value="Them">
</form>

</div>