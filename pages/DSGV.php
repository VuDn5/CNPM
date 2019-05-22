

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Danh Sách Giáo Viên</title>
  </head>

  <body>
    <table class="table table-bordered"   border="0" cellspacing="3" cellpadding="3" align="center" style="width: 70%; text-align:center; margin-left: auto;margin-right: auto;">
  <thead>
      <tr bgcolor="#00FFFF">
        <td width="20%" height="39"><strong>Mã Giáo Viên</strong></td>
        <td width="30%"><strong>Họ Tên</strong></td>     
        <td width="20%"><strong>Ngày Sinh</strong></td>
        <td width="15%"><strong>Giới Tính</strong></td>  
      </tr>
    </thead>  
      <?php

          $stt=1;
        $result=mysqli_query($conn,"SELECT * FROM giangvien");
          while($row=mysqli_fetch_array($result)){
      ?>
      <tr bgcolor="#CCCCCC">  
       <td><?php echo $row['MAGV'] ;?></td>   
       <td><?php echo $row['HOTEN']; ?></td>
        <td><?php echo $row['NGAYSINH'] ;?></td> 
        <td><?php echo $row['GIOITINH'] ;?></td>   
        
        <td>
          <input type="submit" name="button" id="button" value="  Sửa  " onclick="location.href='<?php echo "?p=$p&action=edit&id=".$row['MAGV']; ?>';"/>
          <input type="submit" name="btnxoa" id="btnxoa" value="  Xóa  " onclick="if(confirm(' Bạn muốn xóa không ??')==true){location.href='<?php echo "?p=$p&action=del&id=".$row['MAGV']; ?>'}" />
        </td>
      </tr>
      <?php
    		}
        ?>
    
    </table>
  </body>
</html>