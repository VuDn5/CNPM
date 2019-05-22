<?php	
	ob_start();
	session_start();
	  require("../lib/config.php");

	
	$username=$_POST["Username"];
	$password=$_POST["Password"];
	$password=($password);
	
	$qr=("SELECT *
		 from users 
		 WHERE Username='$username'
		 AND Password='$password'");
	$user=mysqli_query($conn,$qr);
	$n=mysqli_num_rows($user);
	if($n==1)
	{
		$row=mysqli_fetch_array($user);
		$_SESSION["idUser"]=$row['idUser'];
		$_SESSION["username"]=$row['Username'];
		$_SESSION["password"]=$row['Password'];
		$_SESSION["hoTen"]=$row['HoTen'];
		$_SESSION["email"]=$row['Email'];
		$_SESSION["gioiTinh"]=$row['GioiTinh'];
		$_SESSION["idGroup"]=$row['idGroup'];		
	}
	header("location: login_hello.php");
?>