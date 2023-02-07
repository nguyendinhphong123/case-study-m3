<a class="btn btn-primary" href="index.php?controller=user&action=create"> Thêm mới </a>
<table class="table"style="text-align: center">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên Khách Hàng</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
            <th>SĐT</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach( $items as $key => $row ): ?>
            <td> <?php echo ++$key;?> </td>
            <td> <?php echo $row['TenKH'];?> </td>
            <td><?php echo $row['DiaChi'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['SDT'];?></td>
        
            <td>
                <a class="btn btn-warning" href="index.php?controller=user&action=edit&id=<?= $row['id'] ;?>">Edit</a>
                <br>
                <a class="btn btn-danger"
                    href="index.php?controller=user&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>