<?php
$sql = "SELECT san_pham.*,hang_san_xuat.name AS category_name FROM `san_pham`
JOIN hang_san_xuat ON san_pham.MAHANGSX_id = hang_san_xuat.id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$sanphams = $stmt->fetchAll();
// echo '<pre>';
// print_r($sanphams);
// die();
?>
<h4 class="title">
    <span class="pull-left"><span class="text"><span class="line">SẢN PHẨM <strong>NỔI BẬT</strong></span></span></span>
    <span class="pull-right">
        <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
    </span>
</h4>
<div id="myCarousel" class="myCarousel carousel slide">
    <div class="carousel-inner">
        <div class="active item">
            <ul class="thumbnails">	
            	<!-- Bắt đầu lặp -->
                <?php foreach( $sanphams as $key => $row ):?>
                <li class="span3">
                    <div class="product-box">
                        <span class="sale_tag"></span>
                        <p><a href="product_detail.php"><img src="<?= ROOT_URL ?>admin<?php echo $row['Anh'];?>" alt="" /></a></p>
                        <a href="<?= ROOT_URL ?>product_detail.php?id=<?php echo $row['id'];?>" class="title">sale to đón tết</a><br/>
                        <a href="<?= ROOT_URL ?>product_detail.php?id=<?php echo $row['id'];?>" class="category"><?php echo $row['TenSp'];?></a>
                        <p class="price"><?php echo number_format($row['GiaB']);?>đ</p>
                    </div>
                </li>
                <!-- Kết thúc lặp -->
                <?php endforeach; ?>
            </ul>
        </div>
    
    </div>							
</div>