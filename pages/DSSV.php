<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Danh Sách Sinh Viên</title>
  </head>

  <body>
    <table class="table table-bordered"  border="0" cellspacing="3" cellpadding="3" align="center" 
           style="text-align:center; margin-left: auto;margin-right: auto; width: 95%">
      <thead>
        <tr bgcolor="#00FFFF">
            <td width="10%" height="39"><strong>Mã số SV</strong></td>
            <td width="20%"><strong>Họ Tên</strong></td>     
            <td width="12%"><strong>Ngày Sinh</strong></td>
            <td width="10%"><strong>Giới Tính</strong></td>    
            <td width="15%"><strong>Tỉnh</strong></td>
            <td width="15%"><strong>Huyện</strong></td>    
            <td width="10%"><strong>Lớp</strong></td>  
            <td width="10%"><strong>Option</strong></td>  
        
      </thead>   
      <?php 
        $sql=("SELECT sinhvien.*, tinh.name, huyen.name as tenhuyen FROM sinhvien 
          INNER JOIN tinh ON sinhvien.matp=tinh.matp
          INNER JOIN huyen on sinhvien.maqh=huyen.maqh");
       
      $result=mysqli_query($conn,$sql);
      $s=1;
      while($row_sv=mysqli_fetch_array($result)){        
      ?>  
        <tr bgcolor="#CCCCCC">  
            <td><?php echo $row_sv['MSSV'] ;?></td>   
            <td><?php echo $row_sv['HOTEN']; ?></td>
            <td><?php echo $row_sv['NGAYSINH'] ;?></td> 
            <td><?php echo $row_sv['GIOITINH'] ;?></td>   
            <td><?php echo $row_sv['name']; ?></td>
            <td><?php echo $row_sv['tenhuyen'] ;?></td> 
            <td><?php echo $row_sv['MALOP'] ;?></td> 
         
        <td>
          <input type="submit" name="button" id="button" value="  Sửa  "  onclick="location.href='     <?php echo "?a=4&p=edit&id=".$row_sv['MSSV']; ?>';"/>
          <input type="submit" name="button2" id="button2" value="  Xóa  " onclick="if(confirm(' Bạn muốn xóa không ??')==true){location.href='<?php echo "?a=4&p=del&id=".$row_sv['MSSV']; ?>'}" />
        </td>  
      </tr>
       
     <?php
        }
      ?>   
    </table>
  </body>
</html>

