<?php
	ob_start();
	session_start();
	$txtUsername=$_POST['txtUsername'];
	$txtPassword=$_POST['txtPassword'];
	
  
		echo " anh ".$_SESSION['txtUsername'];

?>
<html">
   
   <head>
      <title>Chào mừng bạn đến với ... </title>
   </head>
   
   <body>
      <h1>Chào mừng <?php echo $txtUsername; ?></h1> 
      <h2><a href="logout.php">Đăng xuất</a></h2>
   </body>
   
</html>