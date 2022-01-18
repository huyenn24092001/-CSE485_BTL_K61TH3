<nav class="nav-header-signUp">
      <ul>
         <li>
      <a href="#"><i class="bi bi-twitter"></i></a>
         </li>
      </ul>
   </nav>
   <section class="signup-container">
  <?php include 'backend/shared/loginnav.php'; ?>
   <div class="form-container">
      <div class="form-content">
         <h2 class="header-content">
            Đăng nhập 
         </h2>
         <form action="" class="form1">
            <div class="form-group">
               <label for="mail">Tên đăng nhập hoặc email</label>
               <input type="text" name="mail" id="mail">
            </div>
            <div class="form-group">
               <label for="pass1">Mật khẩu</label>
               <input type="password" name="pass1" id="pass1">
            </div>
            <div class="form-btn">
               <button type="submit" class="btn-form">Đăng nhập</button>
               <input type="checkbox" class ="form-checkbox" id="check" name="remember">
               <lable for="remember"> Ghi nhớ đăng nhập </lable>
            </div>
         </form>
      </div>
      <footer class="form-footer">
          <p> Chưa có tài khoản? <a href="signup.php">Đăng ký</a></p>
      </footer>
   </div>
</section>