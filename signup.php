﻿<?php include_once "inc/header.php"; ?>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["signup"])) {
  $inserUser = $cus->insertUser($_POST, $_FILES);
}
?>

<div class="breadcrumb-area mt-30">
  <div class="container">
    <div class="breadcrumb">
      <ul class="d-flex align-items-center">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active"><a href="signup.php">Đăng ký</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="register-account ptb-100 ptb-sm-60">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="register-title">
          <h3 class="mb-10">Đăng ký tài khoản</h3>
          <p class="mb-10">Nếu bạn đã có tài khoản, xin vui lòng đăng nhập.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <form class="form-register" action="" method="POST" enctype="multipart/form-data">
          <fieldset>
            <legend>Chi tiết thông tin cá nhân</legend>

            <div class="form-group d-md-flex align-items-md-center">
              <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Họ tên</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="userFullName" placeholder="Vui lòng nhập họ tên" required minlength="2">
              </div>
            </div>
            <div class="form-group d-md-flex align-items-md-center">
              <label class="control-label col-md-2" for="email"><span class="require">*</span>Email</label>
              <div class="col-md-10">
                <input type="email" class="form-control" name="userEmail" placeholder="Vui lòng nhập địa chỉ email" required>
              </div>
            </div>
            <div class="form-group d-md-flex align-items-md-center">
              <label class="control-label col-md-2" for="number"><span class="require"></span>Điện thoại</label>
              <div class="col-md-10">
                <input type="number" class="form-control" name="userPhone" placeholder="Vui lòng nhập số điện thoại">
              </div>
            </div>
            <div class="form-group d-md-flex align-items-md-center">
              <label class="control-label col-md-2" for="number"><span class="require"></span>Trạng thái</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="userStatus" placeholder="Vui lòng nhập trạng thái của bạn">
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>Mật khẩu</legend>
            <div class="form-group d-md-flex align-items-md-center">
              <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Mật khẩu</label>
              <div class="col-md-10">
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu của bạn" required minlength="8">
              </div>
            </div>
            <div class="form-group d-md-flex align-items-md-center">
              <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>Nhập lại mật
                khẩu</label>
              <div class="col-md-10">
                <input type="password" class="form-control" name="repassword" placeholder="Nhập lại mật khẩu của bạn" required minlength="8">
              </div>
            </div>
          </fieldset>
          <fieldset class="newsletter-input">
            <legend>Hình ảnh</legend>
            <div class="form-group d-md-flex align-items-md-center">
              <label class="control-label col-md-2" for="number"><span class="require"></span>Ảnh đại diện</label>
              <div class="col-md-10">
                <input type="file" class="form-control" name="userImage" id="validatedCustomFile" accept=".PNG, .JPEG, .JPG">
              </div>
            </div>
          </fieldset>
          <div class="terms">
            <div class="float-md-right">
              <input type="submit" name="signup" value="Đăng ký" class="return-customer-btn">
            </div>
          </div>
          <?php
          if (isset($inserUser)) {
            echo $inserUser;
          }
          ?>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  document.title = "Đăng ký tài khoản";
</script>
<?php include_once "inc/footer.php"; ?>