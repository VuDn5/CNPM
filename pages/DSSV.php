


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
    <td width="5%"><strong>Tin</strong></td>
    <td width="5%"><strong>AV  </strong></td>    

  <?php

      $stt=1;
    $result=mysqli_query($conn,"SELECT * FROM sinhvien");
      while($row=mysqli_fetch_array($result)){
  ?>
  <tr bgcolor="#CCCCCC">  
   <td><?php echo $row['Masv'] ;?></td>   
   <td><?php echo $row['HoTen']; ?></td>
    <td><?php echo $row['NgaySinh'] ;?></td> 
    <td><?php echo $row['GioiTinh'] ;?></td>   
   <td><?php echo $row['MaNganh']; ?></td>
    <td><?php echo $row['Nganh'] ;?></td> 
    <td><?php echo $row['Toan'] ;?></td> 
    <td><?php echo $row['Ly'] ;?></td>   
     <td><?php echo $row['Hoa'] ;?></td> 
    <td><?php echo $row['Sinh'] ;?></td> 
    <td><?php echo $row['Su'] ;?></td> 
    <td><?php echo $row['Dia'] ;?></td>    
    <td><?php echo $row['Tin'] ;?></td> 
    <td><?php echo $row['AV'] ;?></td> 
    <td>
      <input onclick="window.location = 'student-edit.php?id=<?php echo $item['sv_id']; ?>'" type="button" id="button" value="Sửa" style="width: 50px;"/>
      <input type="hidden" name="id" value="<?php echo $item['sv_id']; ?>"/>
      <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa" style="width:50px;"/>
      
    </td>
  </tr>
  <?php
    }
  ?>
</table>
<a href="index.php?a=4&p=AddSV">Thêm sinh viên</a> <br/> <br/>
</body>
</html>