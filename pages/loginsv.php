<?php
session_start();
require '../sinhvien/DB.class.php';
$connect=new DB();
$con=$connect->connect();
$usv=$psv="";
if(isset($_POST['hs'])){
	if($_POST['txtuserhs'] == null){
		?>
		<script type="text/javascript">
		alert("Bạn Chưa Nhập Tên Tài Khoản.");
		window.location="loginsv.php";
		</script>
		<?php
		exit();
	}else{
		$usv=$_POST['txtusersv'];

	}
	if($_POST['txtpasssv'] == null){
		?>
		<script type="text/javascript">
		alert("Bạn Chưa Nhập mật khẩu Tài Khoản.");
		window.location="loginsv.php";
		</script>
		<?php
		exit();
	}
	else{
		$psv=$_POST['txtpasssv'];
	}
	if($usv && $phs){
		
		//require("../includes/config.php");
		

		$query="select * from sinhvien where MSSV='$uhs' and matkhau='$phs'";
		$results = mysqli_query($con,$query);
		if($rowcount=mysqli_num_rows($results) ==0) {
				?>
				<script type="text/javascript">
					alert("Tên Truy cập Hoặc Mật Khẩu chưa chính Xác.Vui Lòng Nhập Lại!");
					window.location = "loginhs.php";
				</script>
				<?php
				exit();
			} else {
				$data=mysqli_fetch_assoc($results);
				$_SESSION['ses_MSSV'] = $data['MSSV'];
				$_SESSION['ses_matkhau']=$data['matkhau'];
				header("location:qlsv.php");
				exit();
			}
		}
	$dis=$con->close();
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>TRANG ĐĂNG NHẬP SINH VIÊN</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="../assets/css/css/style.css">

  
</head>

<body>
<div style="margin-top:60px;text-align: center;font-weight: bold;font-size: 25px;font-family: Tahoma ">LQV HIGH SCHOOL</div>
<div style="margin-top:20px;text-align: center;font-weight: bold;font-size: 25px;font-family: Tahoma ">TRA CỨU ĐIỂM</div>
  <div class="wrap" style="margin-top:30px">
		<div class="avatar">
      <img src="../assets/img/images/hs.png">
		</div>
		<form action="loginsv.php" method="post">
		<input type="text" name="txtusersv" placeholder="Tên tài khoản" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" name="txtpasssv" placeholder="Mật Khẩu" required>
		<a href="" class="forgot_link">Làm mới lại?</a>
		<button><input type="submit" name="hs" value="Đăng Nhập" /></button>
	</form>
	</div>
<br/>
<div style="border: 1px solid #CDCDCD;background-color: #e4e0d8;width: 500px;margin-left: 440px;font-family: Tahoma">
	<h6 style="font-weight: bold">Một số hướng dẫn cần thiết :</h6>
	<li>Đối tượng sử dụng : Sinh viên trường LQV HIGH SCHOOL.</li>
	<li>Sinh viên đăng nhập vào hệ thống bằng mã số học sinh.</li>
	<li>Mật khẩu mặc định là mã số sinh viên.</li>
	<li>Khi truy cập lần thứ nhất, sinh viên lưu ý :</li>
	<h6>&nbsp &nbsp &nbsp &nbsp &nbsp - Phải thay đổi mật khẩu.</h6>
	<h6>&nbsp &nbsp &nbsp &nbsp &nbsp - Trong quá trình truy cập, nếu có thắc mắc gì hay quên</h6>
		<h6>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp mật khẩu truy cập sinh viên liên hệ nhà trường tạo qua</h6>
			<h6>&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspđịa chỉ email: quanlyhs@gmail.com.</h6>
</div>
    <script src="js/index.js"></script>

</body>&nbsp
</html>