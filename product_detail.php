<?php include "db.php"; ?>
<?php include "header.php"; ?>
<?php
$id = $_GET['id'];
// $sql = "SELECT * FROM `san_pham` WHERE id = $id";
$sql = "SELECT san_pham.*,hang_san_xuat.name AS category_name FROM `san_pham`
JOIN hang_san_xuat ON san_pham.MAHANGSX_id = hang_san_xuat.id WHERE san_pham.id = $id";
// debug sql
// var_dump($sql);
// die();
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$row = $stmt->fetch();
// $sql = "SELECT san_pham.*,hang_san_xuat.name AS category_name FROM `san_pham`
// JOIN hang_san_xuat ON san_pham.MAHANGSX_id = hang_san_xuat.id";
// $stmt = $conn->query($sql);
// $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
// $sanphams = $stmt->fetchAll();
?>
			<section class="header_text sub">
			<img class="pageBanner" src="public/themes/images/dien-thoai-phu-kien-cong-nghe-giam-hon-10-trieu-dong-kich-cau-dip-tet-duong-lich-danvietvn-5-16723731491102050005191.jpg" alt="New products" >
				<h4><span>chi tiết sản phẩm</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="public/themes/images/ladies/1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt=""
								 src="<?= ROOT_URL ?>admin<?php echo $row['Anh'];?>"></a>												
								<ul class="thumbnails small">								
									
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Thương hiệu:</strong> <a href="#" class="category"><?php echo $row['category_name'];?></a><br>
									<strong>Tên sản phẩm:</strong> <a href="#" class="category"><?php echo $row['TenSp'];?></a><br>
									<strong>Số lượng:</strong> <a href="#" class="category"><?php echo $row['SoLuong'];?></a><br>
									<strong>Tình trạng:</strong> <span>Còn hàng</span><br>								
								</address>									
								<h4><strong>Giá: <a href="#" class="category"><?php echo number_format ($row['GiaB']);?>đ</a></strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline">
									<p>&nbsp;</p>
									<label>Số lượng:</label>
									<input type="text" class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Thêm vào giỏ hàng</button>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Mô tả</a></li>
									
								</ul>							 
								
									<p ><?php echo $row['mota'];?></p>
													
											
							
						
			</section>			
	<?php include "footer.php"; ?>