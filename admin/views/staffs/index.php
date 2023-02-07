<a class="btn btn-primary" href="index.php?controller=staff&action=create"> Thêm mới </a>
<table class="table"style="text-align: center">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên Nhân Viên</th>
            <th>Giới Tính</th>
            <th>Địa Chỉ</th>
            <th>Ngày Sinh</th>
            <th>SĐT</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach( $items as $key => $row ): ?>
            <td> <?php echo ++$key;?> </td>
            <td> <?php echo $row['TenNV'];?> </td>
            <td><?php
									if ($row['GioiTinh'] == 0) {
										echo 'Nữ';
									} else {
										echo 'Nam';
									}
									?></td>
            <td><?php echo $row['DiaChi'];?></td>
            <td><?php echo $row['Ngaysinh'];?></td>
            <td><?php echo $row['SDT'];?></td>
        
            <td>
                <a class="btn btn-warning" href="index.php?controller=staff&action=edit&id=<?= $row['id'] ;?>">Edit</a>
                <br>
                <a class="btn btn-danger"
                    href="index.php?controller=staff&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>