﻿<?php include_once "inc/header.php"; ?>
</div>

<div class="breadcrumb-area mt-30">
  <div class="container">
    <div class="breadcrumb">
      <ul class="d-flex align-items-center">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="404.php">404</a></li>
      </ul>
    </div>
  </div>
  <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Error 404 Area Start -->
<div class="error404-area ptb-60 ptb-sm-60">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="error-wrapper text-center">
          <div class="error-text">
            <h1>404</h1>
            <h2>Opps! PAGE NOT BE FOUND</h2>
            <p>Code la: <?php echo Session::get("userCode"); ?></p>
          </div>
          <div class="search-error">
            <form id="search-form" action="#">
              <input type="text" placeholder="Search">
              <button><i class="fa fa-search"></i></button>
            </form>
          </div>
          <div class="error-button">
            <a href="index.php">Back to home page</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Error 404 Area End -->
<?php include_once "inc/footer.php"; ?>

<?php
$getChat = $chat->getChat();
if ($getChat) {
  while ($result = $getChat->fetch_assoc()) {
    $isUser = false;
    if ($result["fromID"] == Session::get("userID")) {
      $isUser = true;
    }
?>
    <div class="box-mess <?php if ($isUser) echo "to-right"; ?>">
      <div class="box-image">
        <img src="avatar.png" alt="">
      </div>
      <div class="mess-content">
        <p><?php echo $result["message"] ?></p>
      </div>
    </div>
<?php
  }
}
?>