  
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Website bán hàng đơn giản <?php ?></title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
		<link rel="stylesheet" href="<?php THEM_URL()  ?>/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php THEM_URL()  ?>/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php THEM_URL()  ?>/css/main.css">
		<link rel="stylesheet" href="<?php THEM_URL()  ?>/css/child.css">
		<link rel="stylesheet" href="<?php THEM_URL()  ?>/css/responsive.css">
		<?php wp_head(); ?>
	</head>
	<body  <?php body_class(); ?>>
		<div id="wallpaper">
			<header>
				<div class="top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<p>Chào mừng đến với shop bán hàng! </p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="top-menu">
									<?php
										wp_nav_menu([
											'theme_location' => 'header-top',
											'container'=>'false',
											'menu_id'=>'header-top',
											'menu_class'=>'menu-top'
										]);
									?>
									<!-- <ul>
										<li><a href="#">Giỏ hàng</a></li>
										<li><a href="#">Cửa hàng</a></li>
										<li><a href="#">Tài khoản</a></li>
										<li><a href="#">Liên hệ</a></li>
									</ul> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-header">
					<div class="container">
						<div class="row">
							<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
								<div class="logo">
									<a href="<?php bloginfo('url') ?>"><img src="<?php THEM_URL()  ?>/images/logo.png" alt=""><?php  bloginfo('name')?></a>
									<h1>Website bán hàng</h1>
								</div>
							</div>
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
								<div class="form-seach-product">
									<form action="/" method="GET" role="form">
										<select name="" id="input" class="form-control" required="required">
											<option value="">Chọn danh mục</option>
											<option value="1">Điện thoại</option>
											<option value="2">Máy tính bản</option>
											<option value="3">Lap top</option>
											<option value="4">Phụ kiện</option>
										</select>
										<div class="input-seach">
											<input type="text" name="s" id="" class="form-control">
											<button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
										</div>
										<div class="clear"></div>
									</form>
								</div>
							</div>
							<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1" style="text-align: right">
								<a href="<?php bloginfo('url') ?>/gio-hang" class="icon-cart">
									<div class="icon">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span>3</span>
									</div>
									<div class="info-cart">
										<p>Giỏ hàng</p>
										<span>2.500.000đ</span>
									</div>
									<span class="clear"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="main-menu-header">
					<div class="container">
						<div id="nav-menu">
						<?php
										wp_nav_menu([
											'theme_location' => 'header-main',
											'container'=>'false',
											'menu_id'=>'header-main',
											'menu_class'=>'menu-main'
										]);
						?>
							<!-- <ul>
								<li class="current-menu-item"><a href="#">Trang chủ</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li>
									<a href="#">Sản phẩm</a>
									<ul>
										<li><a href="#">Điện thoại</a></li>
										<li><a href="#">Máy tính bảng</a></li>
										<li><a href="#">Laptop</a></li>
										<li><a href="#">Sản phẩm khác</a></li>
									</ul>
								</li>
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">Tuyển dụng</a></li>
								<li><a href="#">Liên hệ</a></li>
							</ul> -->
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</header>
