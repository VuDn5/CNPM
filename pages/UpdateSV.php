<?php
	require_once("SV-function.php");
	require_once("../System/function.php");
	$id=(isset($_GET['id']))?$_GET['id']:'';
	$sql="SELECT * FROM sinhvien WHERE Masv=$id";
	$SV=mysql_query($sql);
	$row=mysql_fetch_assoc($SV);
	
	$xuly=(isset($_POST['xuly']))?1:0;
	if($xuly){
		$Masv=(isset($_POST['Masv']))?$_POST['Masv']:'';
		$HoTen=(isset($_POST['HoTen']))?$_POST['HoTen']:'';
		$NgaySinh=(isset($_POST['NgaySinh']))?$_POST['NgaySinh']:'';
		$GioiTinh=(isset($_POST['GioiTinh']))?$_POST['GioiTinh']:'';
		$MaTinh=(isset($_POST['MaTinh']))?$_POST['MaTinh']:'';
		$MaHuyen=(isset($_POST['MaHuyen']))?$_POST['MaHuyen']:'';
		$HKTT=(isset($_POST['HKTT']))?$_POST['HKTT']:'';
		$MaNganh=(isset($_POST['MaNganh']))?$_POST['MaNganh']:'';
		$Nganh=(isset($_POST['Nganh']))?$_POST['Nganh']:'';
		$Toan=(isset($_POST['Toan']))?$_POST['Toan']:'';
    $Ly=(isset($_POST['Ly']))?$_POST['Ly']:'';
    $Hoa=(isset($_POST['Hoa']))?$_POST['Hoa']:'';
    $Sinh=(isset($_POST['Sinh']))?$_POST['Sinh']:'';
    $Su=(isset($_POST['Su']))?$_POST['Su']:'';
    $Dia=(isset($_POST['Dia']))?$_POST['Dia']:'';
    $Tin=(isset($_POST['Tin']))?$_POST['Tin']:'';
    $AV=(isset($_POST['AV']))?$_POST['AV']:'';
  
		}
		$result= SV_capnhat($Masv,$HoTen,$NgaySinh,$GioiTinh,$MaTinh,$MaHuyen,$HKTT,$MaNganh,$Nganh,$Toan,$Ly,$Hoa,$Sinh,$Su,$Dia,$Tin,$AV);		
	}
?>

<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="85%" border="0" align="center" cellpadding="5">
    <tr>
      <td colspan="2" bgcolor="#0000FF" style="text-align: center; font-weight: bold; font-size: 24px;">Điền đầy đủ thông tin  Sinh viên</td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Mã Sinh Viên</td>
      <td bgcolor="#CCCCCC"><select name="Masv" size="1" id="Masv">
        <?php 
	  	$qr="SELECT * FROM sinhvien";
		$sp=mysql_query($qr);
		while($row_sp=mysql_fetch_assoc($sp)){
				
	  ?>
        <option value="<?php echo $row['Masv'];?>" <?php if($row['Masv']==$row['Masv']){echo" selected='selected'";}?>></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td width="132" bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Họ Tên</td>
      <td width="643" bgcolor="#CCCCCC"><label for="HoTen"></label>
      <input type="text" name="HoTen" id="HoTen" value="<?php echo $row['HoTen'];?>"></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Ngày Sinh</td>
      <td bgcolor="#CCCCCC"><label for="TenSP_KD">
        <input type="text" name="NgaySinh" id="NgaySinh" value="<?php echo $row['NgaySinh'];?>"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Giới Tính</td>
      <td bgcolor="#CCCCCC"><input type="text" name="GioiTinh" id="GioiTinh" value="<?php echo $row['GioiTinh'];?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Mã Tỉnh</td>
      <td bgcolor="#CCCCCC">        
      <textarea name="MaTinh" id="MaTinh" cols="60" rows="5"><?php echo $row['MaTinh'];?></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Mã Huyện</td>
      <td bgcolor="#CCCCCC">        
      <textarea name="MaHuyen" id="MaHuyen" cols="60" rows="5"><?php echo $row['MaHuyen'];?></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Mã Ngành</td>
      <td bgcolor="#CCCCCC"><textarea name="MaNganh" id="MaNganh" cols="60" rows="5"><?php echo $row['MaNganh'];?></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Ngành</td>
      <td bgcolor="#CCCCCC"><label for="ghichu"></label>
      <textarea name="Nganh" id="Nganh" cols="45" rows="5"><?php echo $row['Nganh'];?></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Điểm Toán</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Toan" id="Toan" value="<?php echo $row['Toan'];?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Điểm Lý</td>
      <td bgcolor="#CCCCCC"><input name="Ly" type="text" id="Ly" value="<?php echo $row['Ly'];?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Điểm Hóa</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Hoa" id="Hoa" value="<?php echo $row['Hoa'];?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Điểm Sinh</td>
      <td bgcolor="#CCCCCC"><input name="Sinh" type="text" id="Sinh" value="<?php echo $row['Sinh'];?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Điểm Sử</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Su" id="Su" value="<?php echo $row['Su'];?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Điểm Địa</td>
      <td bgcolor="#CCCCCC"><input name="Dia" type="text" id="Dia" value="<?php echo $row['Dia'];?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Điểm Tin</td>
      <td bgcolor="#CCCCCC"><input type="text" name="Tin" id="Tin" value="<?php echo $row['Tin'];?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Điểm Anh Văn</td>
      <td bgcolor="#CCCCCC"><input name="AV" type="text" id="AV" value="<?php echo $row['AV'];?>" /></td>
    </tr>
   <tr>
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
	// Ham loadfck(<'Ten dieu khien'>,<Do rong>,<Chieu_cao>,<'Basic' hoac 'Default'>);
	loadfck('MoTa',600,200,'Basic');
	loadfck('baiviet',600,200,'Basic');
</script>
