<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT san_pham.*,hang_san_xuat.name AS category_name FROM `san_pham`
JOIN hang_san_xuat ON san_pham.MAHANGSX_id = hang_san_xuat.id";
// echo '<pre>';
// print_r($_GET);
// die();
if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $sql .= " WHERE san_pham.TenSp LIKE '%$s%'";

}

//Debug sql
        // var_dump($sql);
        // die();

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$sanphams = $stmt->fetchAll();
// echo '<pre>';
// print_r($sanphams);
// die();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<a class="btn btn-primary" href="add.php">  Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>Mả Sản Phẩm</th>
            <th>Thương Hiệu</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giá Nhập</th>
            <th>Giá Bán</th>
            <th>Ảnh</th>
            <th>Mô tả</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $sanphams as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo  $key+1;?> </td>
                <td><?php echo $row['category_name'];?></td>
                <td><?php echo $row['TenSp'];?></td>
                <td><?php echo $row['SoLuong'];?></td>
                <td><?php echo number_format($row['GiaN']);?>đ</td>
                <td><?php echo number_format($row['GiaB']);?>đ</td>
                <td> <img src="<?= ROOT_URL ?><?php echo $row['Anh'] ?>" height="100" width="100"> </td>
                <td><?php echo $row['mota'];?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ;?>" class="btn btn-warning">Edit</a> <br>
                    <!-- <button type="submit" class="w3-button w3-red" onclick="return confirm('Chuyên vào thùng rác')">Xóa</button> -->
                     <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>" class="btn btn-danger">Delete</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../footer.php'; ?>

<!-- <a href="edit.php?id=<?= $row['id'] ;?>">Edit</a> <br> -->
<!-- <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>">Delete</a> -->