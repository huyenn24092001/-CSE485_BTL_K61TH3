<?php
   $pagetitle ='Đăng nhập | Twitter';
 include 'backend/shared/header.php';
  include_once "backend/initialize.php";
  ?>
  <section class="signup-container">
  <?php include 'backend/shared/loginnav.php'; ?>
  
   <div class="form-container">
      <div class="form-content">
         <h2 class="header-content">
            Đăng nhập tài khoản
         </h2>
         <form action="" class="form1" action="<?php echo h($_SEVER["PHP_SELF"]);?>" method="POST">
            <div class="form-group">
               <label for="username">Email hoặc tên đăng nhập</label>
               <input type="text" name="username" id="username"autocomplete="off" required>
            </div>
        
            <div class="form-group">
               <label for="pass1">Mật khẩu</label>
               <input type="password" name="pass1" id="pass1"autocomplete="off" required>
            </div>
            
            <div class="form-btn">
               <button type="submit" class="btn-form">Đăng nhập</button>
               <input type="checkbox" class ="form-checkbox" id="check" name="remember">
               <lable for="remember"> Ghi nhớ đăng nhập </lable>
            </div>
         </form>
         <footer class="form-footer">
          <p> Bạn chưa có tài khoản? <a href="signup.php">Đăng ký ngay</a></p>
      </footer>
      </div>
   </div>
</section>
