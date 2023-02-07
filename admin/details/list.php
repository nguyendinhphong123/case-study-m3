<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT chi_tiet_don_hang.*,khach_hang.TenKH,san_pham.TenSp FROM `chi_tiet_don_hang`
 JOIN khach_hang ON chi_tiet_don_hang.MaKH = khach_hang.id 
 JOIN san_pham ON chi_tiet_don_hang.MaSP = san_pham.id";

if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $sql .= " WHERE chi_tiet_don_hang.name LIKE '%$s%'";
}
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$chi_tiet_don_hang = $stmt->fetchAll();
// echo '<pre>';
//             print_r($chi_tiet_don_hang);
//             die();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<a href="add.php" class="btn btn-primary"> Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>Mã Đơn Hàng</th>
            <th>Mã Sản Phẩm</th>
            <th>Mã Khách Hàng</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Giảm Giá</th>
            <th>Tổng Thanh Toán</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $chi_tiet_don_hang as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo $key+1;?> </td>
                <td><?php echo $row['MaSP'];?> - <?php echo $row['TenSp'];?></td>
                <td><?php echo $row['MaKH'];?> - <?php echo $row['TenKH'];?></td>
                <td><?php echo $row['SoLuong'];?></td>
                <td><?php echo number_format($row['DonGia']);?>đ</td>
                <td><?php echo number_format($row['GiamGia']);?>đ</td>
                <td><?php echo number_format($row['TongTien']);?>đ</td>
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