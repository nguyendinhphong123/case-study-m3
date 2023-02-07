<div class="block">	
				<ul class="nav nav-list">
					<li class="nav-header">phụ kiện di động</li>
					<li><a href="shop.php">Sạc dự phòng</a></li>
					<li><a href="shop.php">Ốp lưng điện thoại</a></li>
					<li><a href="shop.php">Miếng dán màn hình</a></li>
					<li><a href="shop.php">Gậy di dộng</a></li>
					<li><a href="shop.php">Tai nghe, Loa</a></li>
				</ul>
				<br/>
				<ul class="nav nav-list below">
					<li class="nav-header">thương hiệu hàng đầu</li>
					<li><a href="shop.php">Apple</a></li>
					<li><a href="shop.php">Samsung</a></li>
					<li><a href="shop.php">Sony</a></li>
					<li><a href="shop.php">Oppo</a></li>
				</ul>
			</div>
			<div class="block">
				<h4 class="title">
					<span class="pull-left"><span class="text">Ngẫu nhiên</span></span>
					<span class="pull-right">
						<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
					</span>
				</h4>
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
						<div class="active item">
							<ul class="thumbnails listing-products">
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>												
										<a href="product_detail.html"><img alt="" src="<?= ROOT_URL ?>admin<?php echo $row['Anh'];?>"></a><br/>
										<a href="product_detail.html" class="title">Sale to đón tết</a><br/>
										<a href="#" class="category"><?php echo $row['TenSp'];?></a>
										<p class="price"><?php echo number_format($row['GiaB']);?>đ</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="item">
							<ul class="thumbnails listing-products">
								<li class="span3">
									<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="<?= ROOT_URL ?>admin<?php echo $row['Anh'];?>"></a><br/>
										<a href="product_detail.html" class="title">sale to đón tết</a><br/>
										<a href="#" class="category"><?php echo $row['TenSp'];?></a>
										<p class="price"><?php echo number_format($row['GiaB']);?>đ</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="block">								
				<h4 class="title">bình luận</h4>								
				<ul class="small-product">
					<li>
						<!-- <a href="#" title="Praesent tempor sem sodales">
							<img src="public/themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
						</a> -->
						<a href="#">Bộ nhớ khả dụng (A23_4Gb)sau khi cài hệ thống còn bảo nhiêu vậy ad?</a>
					</li>
					<li>
						<!-- <a href="#" title="Luctus quam ultrices rutrum">
							<img src="public/themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
						</a> -->
						<a href="#">Loa đt e lâu lâu kêu bụp bụp thì có sao không ?</a>
					</li>
					<li>
						<!-- <a href="#" title="Fusce id molestie massa">
							<img src="public/themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
						</a> -->
						<a href="#">Trả góp 20% đc ko ạ?</a>
					</li>   
				</ul>
			</div>