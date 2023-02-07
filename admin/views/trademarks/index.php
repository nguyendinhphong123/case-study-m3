<a class="btn btn-primary" href="index.php?controller=trademark&action=create"> Thêm mới </a>
<table class="table">
  <thead class="thead-dark">
    <tr>
            <th>STT</th>
            <th>Thương Hiệu</th>
            <th>Sửa, Xóa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach( $items as $row ): ?>
    <td> <?php echo $row['id'];?> </td>
                <td><?php echo $row['name'];?></td>

                <td>
                    <a class="btn btn-warning" href="index.php?controller=trademark&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a class="btn btn-danger" href="index.php?controller=trademark&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
                </td>
    </tr>
    <?php endforeach; ?>

  </tbody>
</table>