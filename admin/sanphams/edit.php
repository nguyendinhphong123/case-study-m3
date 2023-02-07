<?php
    include_once '../db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();
    $sql = "SELECT * FROM `hang_san_xuat`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $hang_san_xuat = $stmt->fetchAll();
 
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `san_pham` WHERE id = $id";
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
        $MAHANGSX = $_REQUEST['MAHANGSX_id'];
        $TENSANPHAM = $_REQUEST['TenSp'];
        $SOLUONG = $_REQUEST['SoLuong'];
        $GIANHAP = $_REQUEST['GiaN'];
        $GIABAN = $_REQUEST['GiaB'];
        $ANH = '';
        $MOTA = $_REQUEST['mota'];

        if (isset($_FILES['Anh']))
        {
            if (!$_FILES['Anh']['error'])
            {
                move_uploaded_file($_FILES['Anh']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['Anh']['name']);
                $ANH = '/public/uploads/'.$_FILES['Anh']['name'];
            }
        }

        //Viet cau truy van
        $sql = "UPDATE `san_pham` SET 
        MAHANGSX_id= '$MAHANGSX',
        `TenSp`='$TENSANPHAM',
        `SoLuong`=$SOLUONG ,
        `GiaN`=$GIANHAP,
        `GiaB`=$GIABAN,
        `Anh`='$ANH',
        `mota`='$MOTA'
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
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
    <label  class="form-label">Mã Hãng Sản Xuất</label>
    <select name="MAHANGSX_id" class="form-control" id="">
            <?php foreach ($hang_san_xuat as $category) {?>
            <option <?= $category['id'] == $row['MAHANGSX_id'] ? "selected" : "" ?> value="<?=$category['id'];?>"><?=$category['name'];?></option>
            <?php } ?>
    </select>
  </div>
  
  <div class="mb-3">
    <label  class="form-label">Tên Sản Phẩm</label>
    <input type="text" class="form-control"  value ="<?= $row['TenSp'];?>" name="TenSp">
  </div>
  <div class="mb-3">
  <label  class="form-label">Số Lượng</label>
    <input type="text" class="form-control" value ="<?= $row['SoLuong'];?>" name="SoLuong">
  </div>
  <div class="mb-3">
  <label  class="form-label">Giá Nhập</label>
    <input type="text" class="form-control"  value ="<?= $row['GiaN'];?>" name="GiaN">
  </div>
  <div class="mb-3">
  <label  class="form-label">Giá Bán</label>
    <input type="text" class="form-control"  value ="<?= $row['GiaB'];?>" name="GiaB">
  </div>
  <div class="mb-3">
  <label  class="form-label">Ảnh</label>
    <input type="file" class="form-control"  value ="<?= $row['Anh'];?>" name="Anh">
  </div>
  <div class="mb-3">
  <label  class="form-label">Mô Tả</label>
    <input type="text" class="form-control"  value ="<?= $row['mota'];?>" name="mota">
  </div>
  <input type="submit" value="Them">
  </form>
<?php include_once '../footer.php'; ?>



