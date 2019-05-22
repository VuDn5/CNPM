

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xem Điểm Sinh Viên</title>
</head>

<body>
<table width="100%" border="0" cellspacing="3" cellpadding="3" align="center" style="text-align:center ">
  <tr bgcolor="#00FFFF">
    <td width="10%" height="39"><strong>SBD</strong></td>
    <td width="100%"><strong>Họ Tên</strong></td>     
    <td width="100%"><strong>Ngành</strong></td>
    <td width="100%"><strong>Toán</strong></td>    
    <td width="100%"><strong>Lý</strong></td>
    <td width="100%"><strong>Hóa</strong></td>    
    <td width="100%"><strong>Sinh</strong></td>
    <td width="100%"><strong>Sử</strong></td>    
    <td width="100%"><strong>Địa</strong></td>
    <td width="100%"><strong>GDCD</strong></td> 
    <td width="100%"><strong>Tin</strong></td>    
    <td width="100%"><strong>AV</strong></td>
  </tr>
  <?php
  		$stt=1;
		$sql=("SELECT * FROM sv");
	$result=mysqli_query( $sql);
  $s=1;
  while($row=mysqli_fetch_array($result)){
  ?>
  <tr bgcolor="#CCCCCC">  
   <td><?php echo $row['COL 2'] ;?></td>   
   <td><?php echo $row['COL 3']; ?></td>
    <td><?php echo $row['COL 10'] ;?></td> 
    <td><?php echo $row['COL 11'] ;?></td>   
   <td><?php echo $row['COL 12']; ?></td>
    <td><?php echo $row['COL 13'] ;?></td> 
    <td><?php echo $row['COL 14'] ;?></td> 
    <td><?php echo $row['COL 15'] ;?></td>   
   <td><?php echo $row['COL 16']; ?></td>
    <td><?php echo $row['COL 17'] ;?></td>   
    <td><?php echo $row['COL 18'] ;?></td> 
  <td><?php echo $row['COL 19'] ;?></td> 
     
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