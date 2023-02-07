<?php
   include_once '../db.php';//$conn
   // echo '<pre>';
   // print_r($_GET);
   // die();

    
   //Lay gia tri ID tren URL
   $id = $_GET['id'];
   //lay du lieu theo ID
   $sql = "SELECT * FROM `hang_san_xuat` WHERE id = $id";
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
        $TEN = $_REQUEST['name'];
      

       
        //Viet cau truy van
        $sql = "UPDATE `hang_san_xuat` SET 
        `name`='$TEN'
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
    <label  class="form-label">Tên Thương Hiệu</label>
    <input type="text" class="form-control"  value ="<?= $row['name'];?>" name="name">
  </div>
  <input type="submit" value="Them">
  </form>
<?php include_once '../footer.php'; ?>