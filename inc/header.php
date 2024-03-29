<?php
ob_start();
include_once "lib/session.php";
Session::init();
Session::isUserBlock();

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>

<?php
include_once "classes/category.php";
$cat = new category();

include_once "classes/brand.php";
$brand = new brand();

include_once "classes/product.php";
$product = new product();

include_once "classes/slider.php";
$slider = new slider();

include_once "classes/cart.php";
$cart = new cart();

include_once "classes/order.php";
$order = new order();

include_once "classes/wishlist.php";
$wish = new wishlist();

include_once "classes/compare.php";
$com = new compare();

include_once "classes/review.php";
$review = new review();

include_once "classes/user.php";
$cus = new user();

include_once "classes/toastify.php";
$toast = new toastify();

include_once "classes/chat.php";
$chat = new chat();

include_once "classes/visitor.php";
$visitor = new visitor();

include_once "classes/email.php";
$email = new email();

include_once "helpers/format.php";
$fm = new format();
?>

<?php
if (isset($_GET["action"]) && $_GET["action"] == "logout") {
	Session::logoutUser();
	Session::set("logoutToast", 0);
}
?>

<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");
?>

<!doctype html>
<html lang="vn">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible">
	<title>MW Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicons -->
	<link rel="shortcut icon" href="assets\img\favicon.ico">
	<!-- Fontawesome css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/brands.min.css" integrity="sha512-SFyAczXIjDD7PVlzleuYRQ1jGCwnm4RnN+O5+L62Od3MJxHBsB0HmtMOdewV9CZWOz+ACu2CHOvF+5/yHagcwA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/fontawesome.min.css" integrity="sha512-RUDCXG3qlIoMxuNYXWvgh3WT6t+dBpm4yzBHkLmqw3itMjBPKFtOz1/tyHrcJqtCD3lkDLH72wzbRB1/iEhEpw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/regular.min.css" integrity="sha512-1zQwRdYvFXv3uja1GvVZ+U2o60RKNOEXF1kcdIqQrVZSLLXp9fmMj+FHzmLXZL9g67zl8z2OnXPcoDUqFl8bkA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/solid.min.css" integrity="sha512-PSbQOcUBvm3V+L/FUQshAwNrufipONNFw1dabxWlN6PIDSlYhZALVbroWCEXXJGohgKFPofkIvMb0w3v+sZMYQ==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/svg-with-js.min.css" integrity="sha512-QpM5XbQDsKlxzYDfTqcTp+gC7g8smBiYy2TY5OSkOgBFfl+pfClr7gshZM68GZ5cYGHCusyZil1a1xxDXnk4NA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/v4-shims.min.css" integrity="sha512-GbNjbL4pcOOlqYpRwuhTVP1zXZJGafunVqs3ODg+ryHDcppv0GGGXrIYy5K4Oz+nhMjCXGqT74v4WKw+C05Esg==" crossorigin="anonymous" />

	<link rel="stylesheet" href="assets\css\font-awesome.min.css">
	<!-- Ionicons css -->
	<link rel="stylesheet" href="assets\css\ionicons.min.css">
	<!-- linearicons css -->
	<link rel="stylesheet" href="assets\css\linearicons.css">
	<link rel="stylesheet" href="assets\css\css.css">
	<!-- Nice select css -->
	<link rel="stylesheet" href="assets\css\nice-select.css">
	<!-- Jquery fancybox css -->
	<link rel="stylesheet" href="assets\css\jquery.fancybox.css">
	<!-- Jquery ui price slider css -->
	<link rel="stylesheet" href="assets\css\jquery-ui.min.css">
	<!-- Meanmenu css -->
	<link rel="stylesheet" href="assets\css\meanmenu.min.css">
	<!-- Nivo slider css -->
	<link rel="stylesheet" href="assets\css\nivo-slider.css?v=<?php echo time(); ?>">
	<!-- Owl carousel css -->
	<link rel="stylesheet" href="assets\css\owl.carousel.min.css">
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="assets\css\bootstrap.min.css">
	<!-- Custom css -->
	<link rel="stylesheet" href="assets\css\default.css">
	<!-- Main css -->
	<link rel="stylesheet" href="assets\css\style.css?v=<?php echo time(); ?>">
	<!-- Responsive css -->
	<link rel="stylesheet" href="assets\css\responsive.css">
	<link rel="stylesheet" href="assets\css\toastr.min.css">
	<!-- Modernizer js -->
	<link rel="stylesheet" href="assets\css\custom-style.css?v=<?php echo time(); ?>">

	<style>
		img[alt*="000webhost"],
		img[alt*="000webhost"][style],
		img[src*="000webhost"],
		img[src*="000webhost"][style],
		body>div:nth-last-of-type(1)[style] {
			opacity: 0 !important;
			pointer-events: none !important;
			width: 0px !important;
			height: 0px !important;
			visibility: hidden !important;
			display: none !important;
		}
	</style>
</head>

<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="vxvABfyp"></script>

	<div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content login-form" role="document">
				<div class="btn-signin-hide" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></div>
				<img class="avatar-login" src="admin/assets/images/login/avatar.png" alt="">
				<h4 class="text-login-form">Đăng nhập</h4>
				<input class="custom-in sign-email" style="margin-bottom: 14px;" type="email" name="userEmail" placeholder="Nhập địa chỉ Email..." />
				<div class="input-icon">
					<input class="custom-in sign-password" style="margin-bottom: 14px;" type="password" name="password" placeholder="Nhập mật khẩu..." />
					<i class="fa fa-eye show-password"></i>
				</div>
				<p class="sign-fail"></p>
				<a href="" class="forgot">Quên mật khẩu?</a>
				<button class="btn-custom sign-btn">Đăng Nhập</button>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content login-form">
				<div class="btn-signin-hide" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></div>
				<img class="avatar-login" src="admin/uploads/avatars/<?php echo Session::get("userImage") ?>" alt="">
				<h4 class="text-login-form" style="margin-bottom: 35px;">Thay đổi mật khẩu</h4>
				<div class="input-icon">
					<input class="custom-in old-password" type="password" name="oldPassword" placeholder="Mật khẩu cũ" />
					<p class="input-fail mess-old-password">err</p>
				</div>
				<div class="input-icon">
					<input class="custom-in new-password" type="password" name="newPassword" placeholder="Mật khẩu mới" />
					<p class="input-fail mess-new-password">err</p>
				</div>
				<div class="input-icon">
					<input class="custom-in pre-new-password" type="password" name="reNewPassword" placeholder="Nhập lại mật khẩu" />
					<p class="input-fail mess-pre-new-password">err</p>
				</div>
				<p class="input-fail change-password-fail" style="text-align: center;">err</p>
				<a class="forgot">Quên mật khẩu?</a>
				<button name="change-password" class="btn-custom btn-change-password">Cập Nhập</button>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrap-signup-form">
		</div>
		<header>
			<div class="header-middle ptb-15">
				<div class="container">
					<div class="row align-items-center no-gutters">
						<div class="col-lg-3 col-md-12">
							<div class="logo mb-all-30 ">
								<a href="index.php"><img src="assets\img\logo\kkk.png" alt="logo-image" style="width: 120px;"></a>
							</div>
						</div>
						<div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
							<div class="categorie-search-box">
								<form action="search.php" method="GET">
									<input type="text" name="keyword" style="font-family: Baloo, sans-serif;" placeholder="Nhập từ khóa để tìm kiếm...">
									<button type="submit"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-fw">
											<path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path>
										</svg></button>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="cart-box mt-all-30">
								<ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
									<li>
										<a href="cart.php"><i class="fas fa-shopping-cart" style="color: #414DD1;"></i><span class="my-cart"><span class="total-pro">
													<?php
													$countCart = $cart->getCountCart();
													if ($countCart) {
														echo $countCart["countCart"];
													} else {
														echo "0";
													}
													?>
												</span><span style="font-family: Baloo, sans-serif;">Giỏ hàng</span></span>
										</a>
										<ul class="ht-dropdown cart-box-width">
											<?php
											$getCart = $cart->getCart();
											if ($getCart) {
											?>
												<li>
													<?php
													$total = 0;
													while ($result = $getCart->fetch_assoc()) {
														$total += $result["productPrice"] * $result["productQuantity"];
													?>
														<div class="single-cart-box">
															<div class="cart-img">
																<a href="product.php?productID=<?php echo $result["productID"] ?>"><img style="height: 78px; width: 78px; object-fit: cover;" src="admin/uploads/products/<?php echo $result["productImage"] ?>" alt="cart-image"></a>
																<span class="pro-quantity"><?php echo $result["productQuantity"] ?></span>
															</div>
															<div class="cart-content">
																<h6><a href="product.php?productID=<?php echo $result["productID"] ?>"><?php echo $result["productName"] ?></a></h6>
																<span class="cart-price"><?php echo $fm->formatMoney($result["productPrice"]) ?></span>
																<span></span>
																<span></span>
															</div>
															<a class="del-icone" href="cart.php?deleteID=<?php echo $result["cartID"] ?>"><i class="ion-close"></i></a>
														</div>
													<?php
													}
													?>
													<div class="cart-footer">
														<ul class="price-content">
															<li>Tổng cộng <span><?php echo $fm->formatMoney($total) ?></span></li>
														</ul>
														<div class="cart-actions text-center">
															<a class="cart-checkout" href="order.php">Thanh toán</a>
														</div>
													</div>
												</li>
											<?php }  ?>
										</ul>
									</li>
									<li><a href="wishlist.php"><i class="fas fa-heart" style="color: #ff006f; "></i><span class="my-cart"><span style="font-family: Baloo, sans-serif;">Yêu</span><span style="font-family: Baloo, sans-serif;">thích
													(<?php
														$countWishlist = $wish->getCountWishlist();
														if ($countWishlist) {
															echo $countWishlist["countWishlist"];
														} else {
															echo "0";
														}
														?>)</span></span></a>
									</li>
									<li>
										<?php
										if (Session::isUserLogin()) {
										?>
											<div class="logout-user">
												<img class="avatar-user align-middle" src="admin/uploads/avatars/<?php echo Session::get("userImage") ?>" alt="">
												<span class="fullname-user align-middle"><?php echo Session::get("userFullName"); ?> </span>
												<ul class="ht-dropdown dropdown-style-two" style="width: 200px;">
													<li class="list-group-item list-group-item-action" style="border: none;"><a href="?action=logout" style="color: #212529;">Đăng xuất</a></li>
													<li class="list-group-item list-group-item-action" style="border: none; color: #212529;" data-toggle="modal" data-target="#modal-change-password"> Thay đổi mật khẩu</li>
													<li class="list-group-item list-group-item-action" style="border: none;"><a href="userinfo.php" style="color: #212529;">Thông tin tài khoản</a></li>
												</ul>
											</div>
										<?php } else { ?>
											<a href="#" class="align-middle">
												<i class="lnr lnr-user"></i>
												<div class="my-cart align-middle">
													<a href="signup.php" style="cursor:pointer; color: black;  font-family:  Baloo, sans-serif;">Đăng ký</a>
													<p>
													<p class="btn-signin-show" style="cursor:pointer;  font-family: Baloo, sans-serif;" data-toggle="modal" data-target="#modal-signin">Đăng nhập</p>
													</p>
												</div>
											</a>
										<?php } ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom  header-sticky">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
							<span class="categorie-title">Danh mục</span>
						</div>
						<div class="col-xl-6 col-lg-8 col-md-12 ">
							<nav class="d-none d-lg-block">
								<ul class="header-bottom-list d-flex">
									<li class="active"><a href="index.php">Trang chủ</a>
									<li><a href="cart.php">Giỏ hàng</a>
									<li><a href="wishlist.php">Yêu thích</a></li>
									<li><a href="compare.php">So sánh</a></li>

									<li><a>Đơn hàng<i class="fa fa-angle-down"></i></a>
										<ul class="ht-dropdown dropdown-style-two">
											<li><a href="orderdetails.php">Chi tiết đơn hàng</a></li>
										</ul>
									</li>

									<li><a>Thêm<i class="fa fa-angle-down"></i></a>
										<ul class="ht-dropdown dropdown-style-two">
											<li><a href="contact.php">Liên hệ</a></li>
											<li><a href="weather.php">Thời tiết</a></li>
											<li><a href="news.php">Tin tức</a></li>
										</ul>
									</li>
								</ul>
							</nav>
							<div class="mobile-menu d-block d-lg-none">
								<nav>
									<ul>
										<li><a href="index.php">Trang chủ</a>
										<li><a href="cart.php">Giỏ hàng</a>
										<li><a href="wishlist.php">Yêu thích</a></li>
										<li><a href="compare.php">So sánh</a></li>
										<li>
											<a>Đơn hàng</a>
											<ul>
												<li><a href="orderdetails.php">Chi tiết đơn hàng</a></li>
											</ul>
										</li>
										<li><a>Thêm</a>
											<ul>
												<li><a href="contact.php">Liên hệ</a></li>
												<li><a href="weather.php">Thời tiết</a></li>
												<li><a href="news.php">Tin tức</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-3 col-lg-8 col-md-12 hide-cart-info">
							<div class="float-right">
								<a href="cart.php" class="align-middle">
									<span class="my-cart align-middle">
										<?php
										$countCart = $cart->getCountCart();
										if ($countCart) {
											echo $countCart["countCart"];
										} else {
											echo "0";
										}
										?>
									</span>
									<i class="lnr lnr-cart align-middle"></i>
								</a>
								<a href="wishlist.php" class="align-middle">
									<span class="my-cart align-middle">
										<?php
										$countWishlist = $wish->getCountWishlist();
										if ($countWishlist) {
											echo $countWishlist["countWishlist"];
										} else {
											echo "0";
										}
										?>
									</span>
									<i class="lnr lnr-heart align-middle"></i>
								</a>
								<a href="" class="align-middle">
									<?php
									if (Session::isUserLogin()) {
									?>
										<img class="info-avatar" src="admin/uploads/avatars/<?php echo Session::get("userImage") ?>" alt="" />
										<strong class="my-cart align-middle" style="margin-left: 2px;"><?php echo Session::get("userFullName"); ?></strong>
									<?php } ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container d-block d-lg-none">
				<div class="vertical-menu mt-30">
					<span class="categorie-title mobile-categorei-menu">Danh mục</span>
					<nav>
						<div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">
							<ul>
								<?php
								$getCat = $cat->getCategory();
								if ($getCat) {
									while ($resultCat = $getCat->fetch_assoc()) {
								?>
										<li><a href="#"><?php echo $resultCat["catName"] ?></a></li>
								<?php
									}
								}
								?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<div class="main-page-banner off-white-bg home-3">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-4 d-none d-lg-block">
						<div class="vertical-menu mb-all-30">
							<nav>
								<ul class="vertical-menu-list">
									<?php
									$getCat = $cat->getCategory();
									if ($getCat) {
										while ($resultCat = $getCat->fetch_assoc()) {
									?>
											<li>
												<a href="category.php?catID=<?php echo $resultCat["catID"] ?>"><span><img src="assets\img\vertical-menu\10.png" alt="menu-icon"></span><?php echo $resultCat["catName"] ?></a>
											</li>
									<?php
										}
									}
									?>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>