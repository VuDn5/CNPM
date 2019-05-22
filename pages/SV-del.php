<?php	
	require_once("SV-function.php");
	require_once("./system/function.php");
	
	$id=(isset($_GET['id']))?$_GET['id']:'';
	$sql= "SELECT * FROM sinhvien WHERE MSSV=$id";
	$result=mysqli_query($conn,$sql);
	$r=mysqli_fetch_array($result);	
	$result=SV_xoa($id);
	if($result)
	{
		echo " Xóa thành công ";		
	}	
	header("location:./index.php?a=4&p=DSSV");
?>
