<?php
   include_once '../db.php';//$conn
   // echo '<pre>';
   // print_r($_GET);
   // die();

    
   //Lay gia tri ID tren URL
   $id = $_GET['id'];
   //lay du lieu theo ID
   $sql = "SELECT * FROM `nhan_vien` WHERE id = $id";
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
        $TEN = $_REQUEST['TenNV'];
        $GIOITINH = $_REQUEST['GioiTinh'];
        $DIACHI = $_REQUEST['DiaChi'];
        $NGAYSINH = $_REQUEST['Ngaysinh'];
        $SDT = $_REQUEST['SDT'];

       
        //Viet cau truy van
        $sql = "UPDATE `nhan_vien` SET 
        `TenNV`='$TEN',
        `GioiTinh`='$GIOITINH',
        `DiaChi`='$DIACHI',
        `Ngaysinh`='$NGAYSINH',
        `SDT`= '$SDT'
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
<form action="" method="post">
  
  <div class="mb-3">
    <label  class="form-label">Tên Nhân Viên</label>
    <input type="text" class="form-control"  value ="<?= $row['TenNV'];?>" name="TenNV">
  </div>
  <div class="mb-3">
  <label  class="form-label">Giới Tính</label>
    <input type="text" class="form-control" value ="<?= $row['GioiTinh'];?>" name="GioiTinh">
  </div>
  <div class="mb-3">
  <label  class="form-label">Địa Chỉ</label>
    <input type="text" class="form-control"  value ="<?= $row['DiaChi'];?>" name="DiaChi">
  </div>
  <div class="mb-3">
  <label  class="form-label">Ngày Sinh</label>
    <input type="date" class="form-control"  value ="<?= $row['Ngaysinh'];?>" name="Ngaysinh">
  </div>
  <div class="mb-3">
  <label  class="form-label">Số Điện Thoại</label>
    <input type="text" class="form-control"  value ="<?= $row['SDT'];?>" name="SDT">
  </div>
  <input type="submit" value="Them">
  </form>
<?php include_once '../footer.php'; ?>