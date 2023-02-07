<?php
    include_once '../db.php';?>
<?php
    // Lay toan bo the loai
    $sql = "SELECT * FROM `hang_san_xuat`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $hang_san_xuat = $stmt->fetchAll();
    $error = [];

    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        $MAHANGSX = $_REQUEST['MAHANGSX_id'];
        $TENSANPHAM = $_REQUEST['TenSp'];
        $SOLUONG = $_REQUEST['SoLuong'];
        $GIANHAP = $_REQUEST['GiaN'];
        $GIABAN = $_REQUEST['GiaB'];
        $ANH = '';
        $MOTA = $_REQUEST['mota'];

        if($MAHANGSX == ""){
          $error['MAHANGSX_id'] = 'Bạn chưa nhập thương hiệu';
          }
        if($TENSANPHAM == ""){
          $error['TenSp'] = 'Bạn chưa nhập tên sản phẩm';
          }
        if($SOLUONG == ""){
          $error['SoLuong'] = 'Bạn chưa nhập số lượng';
          }
        if($GIANHAP == ""){
          $error['GiaN'] = 'Bạn chưa nhập giá nhập';
          }
        if($GIABAN == ""){
          $error['GiaB'] = 'Bạn chưa nhập giá bán';
          }
  


        if (isset($_FILES['Anh']))
        {
            if (!$_FILES['Anh']['error'])
            {
                move_uploaded_file($_FILES['Anh']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['Anh']['name']);
                $ANH = '/public/uploads/'.$_FILES['Anh']['name'];
            }
        }

        if (count($error) == 0){
          //Viet cau truy van
        $sql = "INSERT INTO san_pham(MAHANGSX_id,TenSp,SoLuong,GiaN,GiaB,Anh,mota) VALUES('$MAHANGSX','$TENSANPHAM',$SOLUONG,'$GIANHAP','$GIABAN','$ANH','$MOTA')";
        //Debug sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $conn->exec($sql);

        //Chuyen huong
        header("Location: list.php");
    }

        }
?>
<?php include_once '../header.php'; ?>

<div class="container-fluid px-4">
<h3>Thêm Mới Sản Phẩm</h3>
<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Thương Hiệu</label>
    <select name="MAHANGSX_id" class="form-control">
    <?php foreach( $hang_san_xuat as $category ): ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
      <?php endforeach; ?>
    </select>
    <div class="text-danger"> <?php echo isset($error['MAHANGSX_id']) ? $error['MAHANGSX_id'] : ''; ?> </div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Tên Sản Phẩm</label>
    <input type="text" class="form-control" name="TenSp">
    <div class="text-danger"> <?php echo isset($error['TenSp']) ? $error['TenSp'] : ''; ?> </div>
  </div>
  <div class="mb-3">
  <label  class="form-label">Số Lượng</label>
    <input type="text" class="form-control" name="SoLuong">
    <div class="text-danger"> <?php echo isset($error['SoLuong']) ? $error['SoLuong'] : ''; ?> </div>
  </div>
  <div class="mb-3">
  <label  class="form-label">Giá Nhập</label>
    <input type="text" class="form-control" name="GiaN">
    <div class="text-danger"> <?php echo isset($error['GiaN']) ? $error['GiaN'] : ''; ?> </div>
  </div>
  <div class="mb-3">
  <label  class="form-label">Giá Bán</label>
    <input type="text" class="form-control" name="GiaB">
    <div class="text-danger"> <?php echo isset($error['GiaB']) ? $error['GiaB'] : ''; ?> </div>
  </div>
  <div class="mb-3">
  <label  class="form-label">Ảnh</label>
    <input type="file" class="form-control" name="Anh">
  </div>
  <div class="mb-3">
    <label  class="form-label">Mô Tả</label>
    <input type="text" class="form-control" name="mota">
  </div>
  <input type="submit" value="Them">
  <a href="list.php" class="btn btn-warning">Quay lại</a>
</form>

</div>



