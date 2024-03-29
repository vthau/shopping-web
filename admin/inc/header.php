<?php
ob_start();
include_once "./../lib/session.php";
Session::checkSession();
?>

<?php
if (isset($_GET["action"]) && $_GET["action"]  === "logout") {
  Session::logoutAdmin();
}
?>

<?php
include_once "../classes/category.php";
$cat = new category();

include_once "../classes/brand.php";
$brand = new brand();

include_once "../classes/slider.php";
$slider = new slider();

include_once "../classes/product.php";
$product = new product();

include_once "../classes/order.php";
$order = new order();

include_once "../classes/user.php";
$user = new user();

include_once "../helpers/format.php";
$fm = new format();

include_once "../classes/review.php";
$review = new review();

include_once "../classes/visitor.php";
$visitor = new visitor();

include_once "../classes/toastify.php";
$toast = new toastify();

include_once "../classes/crawldata.php";
$crawldata = new crawldata();

?>

<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Trang quản trị MW Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <link rel="shortcut icon" href="assets\images\favicon.ico">
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">
  <meta name="msapplication-tap-highlight" content="no">

  <link href="./main.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link href="assets/style/admin-style.css?v=<?php echo time(); ?>" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/toastr.min.css">

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
  <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

    <!-- start header -->
    <div class="app-header header-shadow">
      <div class="app-header__logo">
        <a href="index.php" class="">
          <img src="..\assets\img\logo\kkk.png" alt="logo-image" style="width: 120px;">
        </a>
        <div class="header__pane ml-auto">
          <div>
            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <div class="app-header__mobile-menu">
        <div>
          <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="app-header__menu">
        <span>
          <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
              <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
          </button>
        </span>
      </div>
      <div class="app-header__content pr-0">
        <div class="app-header-left">
          <div class="search-wrapper">
            <div class="input-holder">
              <input type="text" class="search-input" placeholder="Type to search">
              <button class="search-icon"><span></span></button>
            </div>
            <button class="close"></button>
          </div>
          <ul class="header-menu nav">
            <li class="nav-item">
              <a href="https://mwstoree.000webhostapp.com/admin/index.php" class="nav-link">
                <i class="nav-link-icon fa fa-home"> </i>
                Trang chủ
              </a>
            </li>

          </ul>
        </div>
        <div class="app-header-right">
          <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">

              <div class="widget-content-wrapper">

                <div class="widget-content-left  ml-3 header-user-info">
                  <div class="widget-heading">
                    <?php echo Session::get("adminName") ?>
                  </div>
                  <div class="widget-subheading">
                    <?php echo Session::get("adminDescription") ?>
                  </div>
                </div>

                <div class="ml-3 widget-content-left">
                  <div class="btn-group">
                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                      <div width="42" class="avatar-center avatar-border rounded-circle">
                        <img width="42" class="rounded-circle" src="uploads/avatars/<?php echo Session::get("adminImage") ?>" alt="">
                      </div>

                      <i class="fa fa-angle-down ml-2 opacity-8"></i>
                    </a>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                      <a tabindex="0" class="dropdown-item" href="?action=logout">Đăng Xuất</a>
                    </div>
                  </div>
                </div>

                <div class=" widget-content-right header-user-info ml-3">
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>