<?php
    include_once '../db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();

     
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `khach_hang` WHERE id = $id";
    //Debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

    //Lấy về dữ liệu duy nhat
    $row = $stmt->fetch();

    //  echo '<pre>';
    // print_r($row);
    // die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $TENKHACHHANG = $_REQUEST['TenKH'];
        $DIACHI = $_REQUEST['DiaChi'];
        $EMAIL = $_REQUEST['email'];
        $MATKHAU = $_REQUEST['matkhau'];
        $hashed_password = password_hash($MATKHAU, PASSWORD_DEFAULT);
        $SDT = $_REQUEST['SDT'];

        //Viet cau truy van
        $sql = "UPDATE `khach_hang` SET 
        `TenKH`= '$TENKHACHHANG',
        `DiaChi`='$DIACHI',
        `email`='$EMAIL',
        `matkhau`='$hashed_password',
        `SDT`='$SDT'
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
    <label  class="form-label">Tên Khách Hàng</label>
    <input type="text" class="form-control"  value ="<?= $row['TenKH'];?>" name="TenKH">
  </div>
  <div class="mb-3">
  <label  class="form-label">Địa Chỉ</label>
    <input type="text" class="form-control" value ="<?= $row['DiaChi'];?>" name="DiaChi">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" value ="<?= $row['email'];?>" name="email">
  </div>
  <div class="mb-3">
  <label  class="form-label">Mật Khẩu</label>
    <input type="password" class="form-control"  value ="<?= $row['matkhau'];?>" name="matkhau">
  </div>
  <div class="mb-3">
  <label  class="form-label">Số Điện Thoại</label>
    <input type="text" class="form-control"  value ="<?= $row['SDT'];?>" name="SDT">
  </div>
  <input type="submit" value="Them">
  </form>
<?php include_once '../footer.php'; ?>



