<?php
	session_start();	
	//session_unset($_SESSION['IDuser']);
	//session_unset($_SESSION['Username']);
	//session_unset($_SESSION['Password']);
	//session_unset($_SESSION['HoTen']);
	//session_unset($_SESSION['Email']);
	//session_unset($_SESSION['GioiTinh']);
	//session_unset($_SESSION['idGroup']);	
	session_destroy();
	header("location: ../index.php");
?>