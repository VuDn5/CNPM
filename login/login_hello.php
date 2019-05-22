<div>
<?php
session_start();
if(!session_is_registered(Username)){
header("location:main_login.php");
}
?>
<html>
<body>
Đăng nhập thành công !
</body>
</html>
 &nbsp;&nbsp;<a style="text-decoration:none;color:#FC0" href="admin/index.php" class="quantri">Trang Quản Trị </a>
  <?php
	
?>
  <a style="text-decoration:none;color:#FC0" class="dangxuat" href="login/logout.php"> --- Đăng xuất </a> -- <a style="text-decoration:none;color:#FC0" href="index.php?p=chgpass">Đổi mật khẩu</a></p>
</div>