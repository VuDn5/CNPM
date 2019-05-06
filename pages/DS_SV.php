<?php
require("../lib/config.php");
	//require_once("../system/function.php");	
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh Sách Sinh Viên</title>
</head>

<body>
<table width="100%" border="0" cellspacing="3" cellpadding="3" align="center" style="text-align:center ">
  <tr bgcolor="#00FFFF">
    <td width="10%" height="39"><strong>SBD</strong></td>
    <td width="30%"><strong>Họ Tên</strong></td>     
    <td width="10%"><strong>Ngày Sinh</strong></td>
    <td width="10%"><strong>Giới Tính</strong></td>    
    <td width="10%"><strong>Mã Tỉnh</strong></td>
    <td width="10%"><strong>Mã Huyện</strong></td>    
    <td width="100%"><strong>HK Thường Trú</strong></td>
    <td width="100%"><strong>Ngành</strong></td>    
  
  <?php
  		$stt=1;
		$sql=("SELECT * FROM sv");
		$result=mysqli_query($connect,$sql);
  		while($row=mysqli_fetch_array($result)){
  ?>
  <tr bgcolor="#CCCCCC">  
   <td><?php echo $row['COL 2'] ;?></td>   
   <td><?php echo $row['COL 3']; ?></td>
    <td><?php echo $row['COL 4'] ;?></td> 
    <td><?php echo $row['COL 5'] ;?></td>   
   <td><?php echo $row['COL 6']; ?></td>
    <td><?php echo $row['COL 7'] ;?></td> 
    <td><?php echo $row['COL 8'] ;?></td> 
    <td><?php echo $row['COL 9'] ;?></td>   
     
    <td>
      <input type="submit" name="button" id="button" value="  Sửa  " onclick="location.href='<?php echo "?p=$p&action=edit&id=".$row['idLoai']; ?>';"/>
      <input type="submit" name="btnxoa" id="btnxoa" value="  Xóa  " onclick="if(confirm(' Bạn muốn xóa không ??')==true){location.href='<?php echo "?p=$p&action=del&id=".$row['idLoai']; ?>'}" />
    </td>
  </tr>
  <?php
		}
  ?>
</table>
</body>
</html>