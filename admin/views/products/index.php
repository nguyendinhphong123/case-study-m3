<a class="btn btn-primary" href="index.php?controller=product&action=create"> Thêm mới </a>
<table class="table"style="text-align: center">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
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
        <tr>
            <?php foreach( $items as $key => $row ): ?>
            <td> <?php echo ++$key;?> </td>
            <td> <?php echo $row['category_name'];?> </td>
            <td><?php echo $row['TenSp'];?></td>
            <td><?php echo $row['SoLuong'];?></td>
            <td><?php echo $row['GiaN'];?></td>
            <td><?php echo $row['GiaB'];?></td>
            <td><img src="/admin<?php echo $row['Anh']?>" width="80"></td>
            <td><?php echo $row['mota'];?></td>
            <td>
                <a class="btn btn-warning" href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>">Edit</a>       
                <br>
                <a class="btn btn-danger"
                    href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>