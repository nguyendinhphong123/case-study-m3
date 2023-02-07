<?php
    include_once '../db.php';?>
<?php
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        $TEN = $_REQUEST['TenNV'];
        $GIOITINH = $_REQUEST['GioiTinh'];
        $DIACHI = $_REQUEST['DiaChi'];
        $NGAYSINH = $_REQUEST['Ngaysinh'];
        $SDT = $_REQUEST['SDT'];



        //Viet cau truy van
        $sql = "INSERT INTO nhan_vien(TenNV,GioiTinh,DiaChi,Ngaysinh,SDT) VALUES('$TEN','$GIOITINH','$DIACHI','$NGAYSINH',$SDT)";
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
<h3>Thêm Nhân Viên Mới</h3>
<form action="" method="post" >
  <div class="mb-3">
    <label  class="form-label">Tên Nhân Viên</label>
    <input type="text" class="form-control" name="TenNV">
  </div>
  <div class="mb-3">
    <label  class="form-label">Giới Tính</label>
    <select name="GioiTinh" class="form-control">
      <option >Nam</option>
      <option name="GioiTinh">Nữ</option>
    </select>
  </div>
  <div class="mb-3">
  <label  class="form-label">Địa Chỉ</label>
    <input type="text" class="form-control" name="DiaChi">
  </div>
  <div class="mb-3">
  <label  class="form-label">Ngày Sinh</label>
    <input type="date" class="form-control" name="Ngaysinh">
  </div>
  <div class="mb-3">
  <label  class="form-label">Số Điện Thoại</label>
    <input type="text" class="form-control" name="SDT">
  </div>
  <input type="submit" value="Them">
</form>

</div>