<?php

              require("SV-function.php");
              require("./system/function.php");
              $id=(isset($_GET['id']))?$_GET['id']:'';
              $sql="SELECT * FROM sinhvien WHERE MSSV=$id";
              $sv=mysqli_query($conn,$sql);
              $row_sv=mysqli_fetch_assoc($sv);
              
              $xuly=(isset($_POST['xuly']))?1:0;
              if($xuly){

                $MSSV=(isset($_POST['MSSV']))?$_POST['MSSV']:'';
                $HOTEN=(isset($_POST['HOTEN']))?$_POST['HOTEN']:'';
                $NGAYSINH=(isset($_POST['NGAYSINH']))?$_POST['NGAYSINH']:'';    
                $GIOITINH=(isset($_POST['GIOITINH']))?$_POST['GIOITINH']:''; 
                $matp=(isset($_POST['matp']))?$_POST['matp']:''; 
                $maqh=(isset($_POST['maqh']))?$_POST['maqh']:'';
                $MALOP=(isset($_POST['MALOP']))?$_POST['MALOP']:'';

            if (!empty($_POST['SV_capnhat']))
        {
            // Lay data
            $row_sv['MSSV']        = isset($_POST['MSSV']) ? $_POST['MSSV'] : '';
            $row_sv['HOTEN']         = isset($_POST['HOTEN']) ? $_POST['HOTEN'] : '';
            $row_sv['NGAYSINH']    = isset($_POST['NGAYSINH']) ? $_POST['NGAYSINH'] : '';
            $row_sv['GIOITINH']          = isset($_POST['GIOITINH']) ? $_POST['GIOITINH'] : '';
            $row_sv['matp']        = isset($_POST['matp']) ? $_POST['matp'] : '';
            $row_sv['maqh']         = isset($_POST['maqh']) ? $_POST['maqh'] : '';
            $row_sv['MALOP']    = isset($_POST['MALOP']) ? $_POST['MALOP'] : '';
    // Validate thong tin
            $errors = array();
            if (empty($row_sv['MSSV'])){
                $errors['MSSV'] = 'Chưa nhập mã sinh viên';
            }
            
            if (empty($row_sv['HOTEN'])){
                $errors['HOTEN'] = 'Chưa nhập họ tên sinh viên';
            }
            if (empty($row_sv['NGAYSINH'])){
                $errors['NGAYSINH'] = 'Chưa nhập ngày sinh sinh viên';
            }
            
            if (empty($row_sv['matp'])){
                $errors['matp'] = 'Chưa nhập tỉnh';
            }
            
            if (empty($row_sv['maqh'])){
                $errors['maqh'] = 'Chưa nhập huyện';
            }
            if (empty($row_sv['MALOP'])){
                $errors['MALOP'] = 'Chưa nhập mã lớp';
            }
            $result=SV_capnhat($MSSV,$HOTEN,$NGAYSINH,$GIOITINH,$matp,$maqh,$MALOP);    
            header("location: ./index.php?a=4&p=DSSV.php");

            }
            mysqli_close($conn);
  }
?>
<form method="post" action=" ./index.php?a=4&p=DSSV" enctype="multipart/form-data" name="form1">
<table class="table"align="center" cellpadding="5" style="margin: auto; border-collapse: inherit; width: 75%;">
 
    <tr>
      <td colspan="2" bgcolor="#0000FF" style="text-align: center; font-weight: bold; font-size: 24px;color: yellow;  ">Chỉnh sửa thông tin  Sinh viên</td>
    </tr>
    <tr>
        <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Mã Sinh Viên</td>
        <td width="643" bgcolor="#CCCCCC"><label for="MSSV"></label>
            <input type="text" name="MSSV" value="<?php echo $row_sv['MSSV']; ?>"/>
            <?php if (!empty($errors['MSSV'])) echo $errors['MSSV']; ?>
        </td>
    </tr>
    <tr>
        <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Họ Tên</td>
        <td width="643" bgcolor="#CCCCCC"><label for="HOTEN"></label>
            <input style="width: 350px;" type="text" name="HOTEN" value="<?php echo $row_sv['HOTEN']; ?>"/>
              <?php if (!empty($errors['HOTEN'])) echo $errors['HOTEN']; ?>
        </td>
    </tr>
    <tr>
        <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Ngày Sinh</td>
        <td width="643" bgcolor="#CCCCCC"><label for="NGAYSINH"></label>
            <input type="text" name="NGAYSINH" value="<?php echo $row_sv['NGAYSINH']; ?>"/>
              <?php if (!empty($errors['NGAYSINH'])) echo $errors['NGAYSINH']; ?>
        </td>
    </tr>
    <tr>
        <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Giới Tính</td>
        <td  bgcolor="#CCCCCC">
            <select name="GIOITINH">
              <option value="Nam">Nam</option>
              <option value="Nữ" <?php if ($row_sv['GIOITINH'] == 'Nữ') echo 'selected'; ?>>Nu</option>
            </select>
              <?php if (!empty($errors['GIOITINH'])) echo $errors['GIOITINH']; ?>
        </td>
    </tr>
    <tr>
        <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Tỉnh</td>
        <td bgcolor="#CCCCCC"><select name="matp" size="1" id="matp">
            <?php 
              $qr="SELECT *  FROM tinh ";
              $t=mysqli_query($conn, $qr);
              while($row_t=mysqli_fetch_assoc($t)){
                      
            ?>
            <option value="<?php echo $row_t['matp'];?>"  <?php if($row_t['matp']==$row_sv['matp']) {echo" selected='selected'";}?>><?php echo $row_t['name'];?></option>
                    <?php }?>
            </select></td>
    </tr>
    <tr>
        <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Huyện</td>
        <td bgcolor="#CCCCCC">
          <select name="maqh" size="1" id="maqh">
              <?php 
                $qr="SELECT *  FROM huyen ";
                $h=mysqli_query($conn, $qr);
                while($row_h=mysqli_fetch_assoc($h)){
              ?>
              <option value="<?php echo $row_h['maqh'];?>" <?php if($row_h['maqh']==$row_sv['maqh']){echo" selected='selected'";}?>><?php echo $row_h['name'];?></option>
              <?php }?>
          </select></td>
    </tr>
    <tr>
        <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Lớp</td>
        <td bgcolor="#CCCCCC">
          <select name="MALOP" size="1" id="MALOP">
              <?php 
                  $qr="SELECT *  FROM lop ";
                  $l=mysqli_query($conn, $qr);
                  while($row_l=mysqli_fetch_assoc($l)){
                      
              ?>
              <option value="<?php echo $row_l['MALOP'];?>" <?php if($row_sv['MALOP']==$row_l['MALOP']){echo" selected='selected'";}?>><?php echo $row_sv['MALOP'];?></option>
                      <?php }?>
          </select></td>
    </tr>
      <td><p>
        <input type="submit" name="btnluu" id="btnluu" value="     Lưu     ">
      </p>
      <p align="center"><font color="#0099FF" size="+2" ><?php
        if(isset($_POST['btnluu'])){
      echo " Sửa thành công";
    }
    ?></font> </p></td>
    </tr>
  </table>
</form>
<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>
<script type="text/javascript" src="../js/loadfck.js"></script>

<script type="text/javascript">
</script>




















