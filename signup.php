<?php
   $pagetitle ='SignUp | Twitter';
?>

<?php include 'backend/shared/head.php'
?>
<section class="signup-container">
   <nav class="nav-header-signUp">
      <ul>
         <li>
      <a href="#"><i class="bi bi-twitter"></i></a>
         </li>
      </ul>
   </nav>
   <div class="form-container">
      <div class="form-content">
         <h2 class="header-content">
            Tạo tài khoản của bạn
         </h2>
         <form action="" class="form1">
            <div class="form-group">
               <label for="Name1">Họ</label>
               <input type="text" name="Name1" id="Name1">
            </div>
            <div class="form-group">
               <label for="Name2">Tên</label>
               <input type="text" name="Name1" id="Name1">
            </div>
            <div class="form-group">
               <label for="mail">Email</label>
               <input type="email" name="mail" id="mail">
            </div>
            <div class="form-group">
               <label for="pass1">Mật khẩu</label>
               <input type="password" name="pass1" id="pass1">
            </div>
            <div class="form-group">
               <label for="pass2">Nhập lại mật khẩu</label>
               <input type="password" name="pass2" id="pass2">
            </div>
            <div class="form-btn">
               <button type="submit" class="btn-form">Tạo tài khoản</button>
            </div>
         </form>
      </div>
   </div>
</section>