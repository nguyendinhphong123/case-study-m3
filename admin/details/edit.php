<?php
   include_once '../db.php';//$conn
   // echo '<pre>';
   // print_r($_GET);
   // die();
   $sql = "SELECT * FROM `san_pham`";
   $stmt = $conn->query($sql);
   $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
   $san_pham = $stmt->fetchAll();

   $sql = "SELECT * FROM `khach_hang`";
   $stmt = $conn->query($sql);
   $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
   $khach_hang = $stmt->fetchAll();
    
   //Lay gia tri ID tren URL
   $id = $_GET['id'];
   //lay du lieu theo ID
   $sql = "SELECT * FROM `chi_tiet_don_hang` WHERE id = $id";
   //Debug sql
   // var_dump($sql);
   $stmt = $conn->query($sql);
   $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

   //Lấy về dữ liệu duy nhat
   $row = $stmt->fetch();
    //  echo '<pre>';
    // print_r($row['category_id']);
    // die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $MASP = $_REQUEST['MaSP'];
        $MAKH = $_REQUEST['MaKH'];
        $SOLUONG = $_REQUEST['SoLuong'];
        $DONGIA = $_REQUEST['DonGia'];
        $GIAMGIA = $_REQUEST['GiamGia'];
        $TONGTIEN = $_REQUEST['TongTien'];

       
        //Viet cau truy van
        $sql = "UPDATE `chi_tiet_don_hang` SET 
        `MaSP`=$MASP,
        `MaKH`=$MAKH,
        `SoLuong`=$SOLUONG,
        `DonGia`='$DONGIA',
        `GiamGia`= '$GIAMGIA',
        `TongTien`= '$TONGTIEN'
         WHERE id = $id
        ";
       
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
<h3>Thay đổi thông tin</h3>
<form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">Mã Sản Phẩm</label>
    <select name="MaSP" class="form-control">
    <?php foreach( $san_pham as $sp ): ?>
      <option 
      <?= $sp['id'] == $row['MaSP'] ? 'selected' : ''; ?>
      value="<?php echo $sp['id'];?>"><?php echo $sp['id'];?> - <?php echo $sp['TenSp'];?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Mã Khách Hàng</label>
    <select name="MaKH" class="form-control">
    <?php foreach( $khach_hang as $kh ): ?>
      <option 
      <?= $kh['id'] == $row['MaKH'] ? 'selected' : ''; ?>
      value="<?php echo $kh['id'];?>"><?php echo $kh['id'];?> - <?php echo $kh['TenKH'];?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
  <label  class="form-label">Số Lượng</label>
    <input type="text" class="form-control"  value ="<?= $row['SoLuong'];?>" name="SoLuong">
  </div>
  <div class="mb-3">
  <label  class="form-label">Đơn Giá</label>
    <input type="text" class="form-control"  value ="<?= $row['DonGia'];?>" name="DonGia">
  </div>
  <div class="mb-3">
  <label  class="form-label">Giảm Giá</label>
    <input type="text" class="form-control"  value ="<?= $row['GiamGia'];?>" name="GiamGia">
  </div>
  <div class="mb-3">
  <label  class="form-label">Tổng Thanh Toán</label>
    <input type="text" class="form-control"  value ="<?= $row['TongTien'];?>" name="TongTien">
  </div>
  <input type="submit" value="Them">
  </form>
<?php include_once '../footer.php'; ?>

