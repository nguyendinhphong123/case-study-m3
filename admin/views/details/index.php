<a class="btn btn-primary" href="index.php?controller=detail&action=create"> Thêm mới </a>
<table class="table"style="text-align: center">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Mã SP</th>
            <th>Mã KH</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Giảm Giá</th>
            <th>Tổng Tiền</th>
            <th>Ngày Đặt Hàng</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach( $items as $key => $row ): ?>
            <td> <?php echo ++$key;?> </td>
            <td> <?php echo $row['MaSP'];?> </td>
            <td><?php echo $row['MaKH'];?></td>
            <td><?php echo $row['SoLuong'];?></td>
            <td><?php echo $row['DonGia'];?></td>
            <td><?php echo $row['GiamGia'];?></td>
            <td><?php echo $row['TongTien'];?></td>
            <td><?php echo $row['ngaydat'];?></td>
        
            <td>
                <a class="btn btn-warning" href="index.php?controller=detail&action=edit&id=<?= $row['id'] ;?>">Edit</a>
                <br>
                <a class="btn btn-danger"
                    href="index.php?controller=detail&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>