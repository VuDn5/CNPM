<?php 
	ob_start();
	session_start();
	  $servername = "localhost";
	$database = "cnpm";
	$username = "root";
	$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, 'UTF8');
// Check connection

// username và password được gửi từ form đăng nhập
$txtUsername=$_POST['txtUsername'];
$txtPassword=$_POST['txtPassword'];
 
// Xử lý để tránh MySQL injection

$txtUsername = stripslashes($txtUsername);
$txtPassword = stripslashes($txtPassword);
$txtUsername = mysqli_real_escape_string($conn, $_POST['txtUsername']);
$txtPassword = mysqli_real_escape_string($conn, $_POST['txtPassword']);
 
$sql='SELECT * FROM users WHERE username="'.$_POST['txtUsername'].'" and password="'.$_POST['txtPassword'].'"';
$result=mysqli_query($conn,$sql);
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count
if(mysqli_num_rows($result)>0){
 
// Lúc này nó sẽ tự động gửi đến trang thông báo đăng nhập thành công

	echo " xin chào ".$txtUsername;
	echo " <a href='logout.php'> Đăng xuất </a> </div> </div><br>";
	echo "<a href='../index.php?a=4'> Vào trang quản lý </a> </div> </div><br>";
	}
else {
echo "Sai tên đăng nhập hoặc mật khẩu";
echo " <a href='../index.php'> Thử lại </a> </div> </div><br>";
}
?>