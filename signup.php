<?php
   include_once "backend/initialize.php";
   
  // function formSanitizer($input){
   //   $input=trim(strip_tags($input));
   //  $input=htmlspecialchars($input);
   // return $input;}

   if(is_post_request(){
      if(isset($_POST['Name1'])&& !empty($_POST['Name1'])){
         $fname=formSanitizer::formSanitizerName($_POST['Name1']);
         $lname=formSanitizer::formSanitizerName($_POST['Name2']);
         $email=formSanitizer::formSanitizerString($_POST['email']);
         $pass=formSanitizer::formSanitizerString($_POST['pass1']);
         $pass2=formSanitizer::formSanitizerString($_POST['pass2']);
         $username="TODO";

         $account->register($fname,$lname,$username,$email,$pass,$pass2);
      }
   });

   $pagetitle ='Đăng ký | Twitter';
   include 'backend/shared/header.php'; 
  
   ?>

<section class="signup-container">
   <nav class="nav-header-signUp">
      <ul>
         <li>
      <a href="#"><i class="bi bi-twitter"></i></a>
         </li>
         <li> 
            <a href='#'>
               Đăng ký
            </a>
         </li>
         <li>
            <a href="#">
               Ngôn ngữ: Tiếng Việt
            </a>
         </li>
      </ul>
   </nav>
   <div class="form-container">
      <div class="form-content">
         <h2 class="header-content">
            Tạo tài khoản của bạn
         </h2>
         <form action="" class="form1" action="<?php echo h($_SEVER["PHP_SELF"]);?>" method="POST">
            <div class="form-group">
               <label for="Name1">Họ</label>
               <input type="text" name="Name1" id="Name1" autocomplete="off" required>
            </div>
            <div class="form-group">
               <label for="Name2">Tên</label>
               <input type="text" name="Name2" id="Name2" autocomplete="off" required>
            </div>
            <div class="form-group">
               <label for="mail">Email</label>
               <input type="email" name="mail" id="mail"autocomplete="off" required>
            </div>
            <div class="form-group">
               <label for="pass1">Mật khẩu</label>
               <input type="password" name="pass1" id="pass1"autocomplete="off" required>
            </div>
            <div class="form-group">
               <label for="pass2">Nhập lại mật khẩu</label>
               <input type="password" name="pass2" id="pass2"autocomplete="off" required>
            </div>
            <div class="form-btn">
               <button type="submit" class="btn-form">Tạo tài khoản</button>
               <input type="checkbox" class ="form-checkbox" id="check" name="remember">
               <lable for="remember"> Ghi nhớ </lable>
            </div>
         </form>
         <footer class="form-footer">
          <p> Đã có tài khoản? <a href="login.php">Đăng nhập ngay </a></p>
      </footer>
      </div>
   </div>
</section>
