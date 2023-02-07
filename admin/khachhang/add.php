<?php
    include_once '../db.php';?>
<?php
    // Lay toan bo the loai
    $sql = "SELECT * FROM `khach_hang`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $categories = $stmt->fetchAll();

    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        $TENKHACHHANG = $_REQUEST['TenKH'];
        $DIACHI = $_REQUEST['DiaChi'];
        $EMAIL = $_REQUEST['email'];
        $MATKHAU = $_REQUEST['matkhau'];
        $hashed_password = password_hash($MATKHAU, PASSWORD_DEFAULT);
        $SDT = $_REQUEST['SDT'];
        


        //Viet cau truy van
        $sql = "INSERT INTO khach_hang(TenKH,DiaChi,email,matkhau,SDT) VALUES('$TENKHACHHANG','$DIACHI','$EMAIL','$hashed_password','$SDT')";
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
<h3>Thêm Mới Khách Hàng</h3>
<form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">Tên Khách Hàng</label>
    <input type="text" class="form-control" name="TenKH">
  </div>
  <div class="mb-3">
  <label  class="form-label">Địa Chỉ</label>
    <input type="text" class="form-control" name="DiaChi">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
  </div>
  <div class="mb-3">
  <label  class="form-label">Mật Khẩu</label>
    <input type="text" class="form-control" name="matkhau">
  </div>
  <div class="mb-3">
  <label  class="form-label">Số Điện Thoại</label>
    <input type="text" class="form-control" name="SDT">
  </div>
  <input type="submit" value="Them">
</form>

</div>




