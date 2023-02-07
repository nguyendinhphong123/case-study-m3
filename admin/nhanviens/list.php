<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM nhan_vien";
// echo '<pre>';
// print_r($_GET);
// die();
if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $sql .= " WHERE nhan_vien.name LIKE '%$s%'";

}

//Debug sql
        // var_dump($sql);
        // die();

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$nhanviens = $stmt->fetchAll();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<a href="add.php" class="btn btn-primary"> Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>Mã Nhân Viên</th>
            <th>Tên Nhân Viên</th>
            <th>Giới Tính</th>
            <th>Địa Chỉ</th>
            <th>Ngày Sinh</th>
            <th>Số Điện Thoại</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $nhanviens as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo  $key+1;?> </td>
                <td><?php echo $row['TenNV'];?></td>
                <td><?php echo $row['GioiTinh'];?></td>
                <td><?php echo $row['DiaChi'];?></td>
                <td><?php echo $row['Ngaysinh'];?></td>
                <td><?php echo $row['SDT'];?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?= $row['id'] ;?>">Edit</a> <br>
                    <!-- <button type="submit" class="w3-button w3-red" onclick="return confirm('Chuyên vào thùng rác')">Xóa</button> -->
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../footer.php'; ?>