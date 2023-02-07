<?php
    include_once '../db.php';?>
<?php
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        $TEN = $_REQUEST['name'];



        //Viet cau truy van
        $sql = "INSERT INTO hang_san_xuat(name) VALUES('$TEN')";
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
<h3>Thêm Thương Hiệu Mới</h3>
<form action="" method="post" >
  <div class="mb-3">
    <label  class="form-label">Tên Thương Hiệu</label>
    <input type="text" class="form-control" name="name">
  </div>
  <input type="submit" value="Them">
</form>

</div>