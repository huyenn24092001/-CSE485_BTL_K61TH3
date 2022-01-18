<?php
 include 'backend/initialize.php';
 // $db->public;

 include 'backend/shared/header.php';
     
?>


    
<body >
<main>
<div class="main">
  <div class="left">
  <img src="images/login.jpeg" class="img-login" alt="...">
  </div>
<div class="right">
  <div class="icon mt-5  ">
  <i class="bi bi-twitter"></i>
  </div>
 <div class="middle">
  
   <h1> Đang diễn ra ngay bây giờ <h1>
   <h4> Tham gia Twitter ngay hôm nay. <h4>
   <a href="signUp.php" class="login1">Đăng ký bằng số điện thoại hoặc email</a>
   <h3 class= "h3 mt-5 "> Đã có tài khoản? <h3>
   <a href="login.php" class="login2">Đăng nhập</a>
 </div>
</div>
<footer class="main-footer" role =" contentinfo">
   <ul>
     <li>
       <a href="#">Giới thiệu</a>
     </li>
     <li>
       <a href="#">Trung tâm Trợ giúp</a>
     </li>
     <li>
       <a href="#">Điều khoản Dịch vụ</a>
     </li>
     <li>
       <a href="#">Chính sách Riêng tư</a>
     </li>
     <li>
       <a href="#">Chính sách cookie</a>
     </li>
     <li>
       <a href="#">Khả năng truy cập</a>
     </li>
     <li>
       <a href="#">Thông tin quảng cáo</a>
     </li>
     <li>
       <a href="#">Blog</a>
     </li>
     <li>
       <a href="#">Trạng thái</a>
     </li>
     <li>
       <a href="#">Nghề nghiệp</a>
     </li>
     <li>
       <a href="#">Tài nguyên thương hiệu</a>
     </li>
     <li>
       <a href="#">Quảng cáo</a>
     </li>
     <li>
       <a href="#">Tiếp thị</a>
     </li>
     <li>
       <a href="#">Twitter cho doanh nghiệp</a>
     </li>
     <li>
       <a href="#">Nhà phát triển</a>
     </li>
     <li>
       <a href="#">Danh mục</a>
     </li>
     <li>
       <a href="#">Cài đặt</a>
     </li>
     <li>
       <a href="#">  &copy;<?php echo date('Y');?>Twitter,Inc.</a>
     </li>

   </ul>

</footer>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>