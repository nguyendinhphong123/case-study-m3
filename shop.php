
<?php include "db.php"; ?>
<?php include "header.php"; ?>
<?php
$sql = "SELECT san_pham.*,hang_san_xuat.name AS category_name FROM `san_pham`
JOIN hang_san_xuat ON san_pham.MAHANGSX_id = hang_san_xuat.id";

if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $sql .= " WHERE san_pham.TenSp LIKE '%$s%'";

}
// echo '<pre>';
// print_r($sql);
// die();

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$sanphams = $stmt->fetchAll();
// echo '<pre>';
// print_r($sanphams);
// die();
?>
<section class="header_text sub">
<img class="pageBanner" src="public/themes/images/dien-thoai-phu-kien-cong-nghe-giam-hon-10-trieu-dong-kich-cau-dip-tet-duong-lich-danvietvn-5-16723731491102050005191.jpg" alt="New products" >
	<h4><span>sản phẩm mới</span></h4>
</section>
<section class="main-content">
<form action="">
                    <div class="input-group">
                        <input name="s" type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
                        <div class="input-group-append">
                            <button  type="submit"  class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search">Tìm kiếm</i>
                            </button>
                        </div>
                    </div>
                </form>
	<div class="row">						
		<div class="span9">	
				<!-- Bắt đầu lặp -->
			<ul class="thumbnails listing-products">
			<?php foreach( $sanphams as $key => $row ):?>
				<li class="span3">
					<div class="product-box">
						<span class="sale_tag"></span>												
						<a href="product_detail.php"><img alt="" src="<?= ROOT_URL ?>admin<?php echo $row['Anh'];?>"></a><br/>
						<a href="<?= ROOT_URL ?>product_detail.php?id=<?php echo $row['id'];?>" class="title">sale to đón tết</a><br/>
						<a href="<?= ROOT_URL ?>product_detail.php?id=<?php echo $row['id'];?>" class="category"><?php echo $row['TenSp'];?></a>
						<p class="price"><?php echo number_format($row['GiaB']);?>đ</p>
					</div>
				</li>       
				<!-- Kết thúc lặp -->
				<?php endforeach; ?>
			</ul>								
			<hr>
			<div class="pagination pagination-small pagination-centered">
				<ul>
					<li><a href="#">Trước đó</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Tiếp theo</a></li>
				</ul>
			</div>
		</div>
		<div class="span3 col">
			<?php include "shop-sidebar.php"; ?>
		</div>
	</div>
</section>
<?php include "footer.php"; ?>