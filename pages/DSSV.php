


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh Sách Sinh Viên</title>
</head>

<body>

<table width="100%" border="0" cellspacing="3" cellpadding="3" align="center" style="text-align:center ">
  <tr bgcolor="#00FFFF">
    <td width="8%" height="39"><strong>SBD</strong></td>
    <td width="15%"><strong>Họ Tên</strong></td>     
    <td width="10%"><strong>Ngày Sinh</strong></td>
    <td width="8%"><strong>Giới Tính</strong></td>    
    <td width="10%"><strong>Mã Ngành</strong></td>
    <td width="8%"><strong>Ngành</strong></td>    
    <td width="5%"><strong>Toán</strong></td>
    <td width="5%"><strong>Lý</strong></td>    
    <td width="5%"><strong>Hóa</strong></td>
    <td width="5%"><strong>Sinh</strong></td>
    <td width="5%"><strong>Sử</strong></td>    
    <td width="5%"><strong>Địa</strong></td>
    <td width="5%"><strong>GDCD</strong></td>
    <td width="5%"><strong>Tin</strong></td>
    <td width="5%"><strong>AV  </strong></td>    

  <?php

      $stt=1;
    $result=mysqli_query($conn,"SELECT * FROM sinhvien");
      while($row=mysqli_fetch_array($result)){
  ?>
  <tr bgcolor="#CCCCCC">  
   <td><?php echo $row['SBD'] ;?></td>   
   <td><?php echo $row['Họ Tên']; ?></td>
    <td><?php echo $row['Ngày Sinh'] ;?></td> 
    <td><?php echo $row['Giới Tính'] ;?></td>   
   <td><?php echo $row['Mã Ngành']; ?></td>
    <td><?php echo $row['Ngành'] ;?></td> 
    <td><?php echo $row['Toán'] ;?></td> 
    <td><?php echo $row['Lý'] ;?></td>   
     <td><?php echo $row['Hóa'] ;?></td> 
    <td><?php echo $row['Sinh'] ;?></td> 
    <td><?php echo $row['Sử'] ;?></td> 
    <td><?php echo $row['Địa'] ;?></td>   
     <td><?php echo $row['GDCD'] ;?></td> 
    <td><?php echo $row['Tin'] ;?></td> 
    <td><?php echo $row['Anh Văn'] ;?></td> 
    <td>
      <input type="submit" name="button" id="button" value="  Sửa  " onclick="location.href='<?php echo "?p=$p&action=edit&id=".$row['SBD']; ?>';"/>
      <input type="submit" name="btnxoa" id="btnxoa" value="  Xóa  " onclick="if(confirm(' Bạn muốn xóa không ??')==true){location.href='<?php echo "?p=$p&action=del&id=".$row['SBD']; ?>'}" />
    </td>
  </tr>
  <?php
    }
  ?>
</table>
</body>
</html>