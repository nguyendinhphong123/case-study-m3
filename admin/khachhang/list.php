<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM khach_hang";
// echo '<pre>';
// print_r($_GET);
// die();
if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $sql .= " WHERE khach_hang.name LIKE '%$s%'";

}

//Debug sql
        // var_dump($sql);
        // die();

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$khachhangs = $stmt->fetchAll();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<a href="add.php" class="btn btn-primary"> Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>Mã Khách Hàng</th>
            <th>Tên Khách Hàng</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
            <th>Số Điện Thoại</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $khachhangs as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo  $key+1;?> </td>
                <td><?php echo $row['TenKH'];?></td>
                <td><?php echo $row['DiaChi'];?></td>
                <td><?php echo $row['email'];?></td>
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