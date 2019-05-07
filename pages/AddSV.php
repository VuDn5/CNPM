<?php

	

// Nếu người dùng submit form
if (!empty($_POST['SV_them']))
{
    // Lay data
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
    // Validate thong tin
    $errors = array();
    if (empty($data['Masv'])){
        $errors['Masv'] = 'Chưa nhập mã sinh vien';
    }
    
    if (empty($data['HoTen'])){
        $errors['HoTen'] = 'Chưa nhập họ tên sinh vien';
    }
    if (empty($data['NgaySinh'])){
        $errors['NgaySinh'] = 'Chưa nhập ngày sinh sinh vien';
    }
    
    if (empty($data['MaTinh'])){
        $errors['MaTinh'] = 'Chưa nhập mã tỉnh';
    }
    
    if (empty($data['MaHuyen'])){
        $errors['MaHuyen'] = 'Chưa nhập mã huyện';
    }
    if (empty($data['HKTT'])){
        $errors['HKTT'] = 'Chưa nhập hộ khẩu thường trú';
    }
    
    if (empty($data['MaNganh'])){
        $errors['MaNganh'] = 'Chưa nhập mã ngành sinh viên';
    }
    if (empty($data['Nganh'])){
        $errors['Nganh'] = 'Chưa nhập tên ngành';
    }
    
    if (empty($data['Toan'])){
        $errors['Toan'] = 'Chưa nhập điểm Toán';
    }
    if (empty($data['Ly'])){
        $errors['Ly'] = 'Chưa nhập điểm Lý';
    }
    if (empty($data['Hoa'])){
        $errors['Hoa'] = 'Chưa nhập điểm Hóa';
    }
    if (empty($data['Sinh'])){
        $errors['Sinh'] = 'Chưa nhập điểm Sinh';
    }
    if (empty($data['Su'])){
        $errors['Su'] = 'Chưa nhập điểm Sử';
    }
    if (empty($data['Dia'])){
        $errors['Dia'] = 'Chưa nhập điểm Địa';
    }
    if (empty($data['Tin'])){
        $errors['Tin'] = 'Chưa nhập điểm Tin';
    }
    if (empty($data['AV'])){
        $errors['AV'] = 'Chưa nhập điểm Anh Văn';
    }
    // Neu ko co loi thi insert
    if (!$errors){
        SV_them($data['Masv'], $data['HoTen'], $data['NgaySinh'],$data['GioiTinh'], $data['MaTinh'], $data['MaHuyen'],$data['HKTT'], $data['MaNganh'], $data['Nganh'],$data['Toan'], $data['Ly'], $data['Hoa'],$data['Sinh'], $data['Su'],$data['Dia'], $data['Tin'], $data['AV']);
        // Trở về trang danh sách
        header("location: DSSV.php");
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Thêm sinh viên </h1>
        
        <form method="post" action="AddSV.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10" style="margin-left: auto;margin-right: auto; text-align: center;">
                <tr>
                    <td>Mã SV</td>
                    <td>
                        <input type="text" name="Masv" value="<?php echo !empty($data['Masv']) ? $data['Masv'] : ''; ?>"/>
                        <?php if (!empty($errors['Masv'])) echo $errors['Masv']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Họ Tên</td>
                    <td>
                        <input type="text" name="HoTen" value="<?php echo !empty($data['HoTen']) ? $data['HoTen'] : ''; ?>"/>
                        <?php if (!empty($errors['HoTen'])) echo $errors['HoTen']; ?>
                    </td>
                </tr>
                 <tr>
                    <td>Ngày Sinh</td>
                    <td>
                        <input type="text" name="NgaySinh" value="<?php echo !empty($data['NgaySinh']) ? $data['NgaySinh'] : ''; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Giới Tính</td>
                    <td>
                        <select name="GioiTinh">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" <?php if (!empty($data['GioiTinh']) && $data['GioiTinh'] == 'Nữ') echo 'selected'; ?>>Nu</option>
                        </select>
                        <?php if (!empty($errors['GioiTinh'])) echo $errors['GioiTinh']; ?>
                    </td>
                </tr>
               
                  <tr>
                    <td>Mã Tỉnh</td>
                    <td>
                        <input type="text" name="MaTinh" value="<?php echo !empty($data['MaTinh']) ? $data['MaTinh'] : ''; ?>"/>
                        <?php if (!empty($errors['MaTinh'])) echo $errors['MaTinh']; ?>
                    </td>
                </tr>
                <td>Mã Huyện</td>
                    <td>
                        <input type="text" name="MaHuyen" value="<?php echo !empty($data['MaHuyen']) ? $data['MaHuyen'] : ''; ?>"/>
                        <?php if (!empty($errors['MaHuyen'])) echo $errors['MaHuyen']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Hộ Khẩu TT</td>
                    <td>
                        <input type="text" name="HKTT" value="<?php echo !empty($data['HKTT']) ? $data['HKTT'] : ''; ?>"/>
                        <?php if (!empty($errors['HKTT'])) echo $errors['HKTT']; ?>
                    </td>
                </tr>
                  <tr>
                    <td>Mã Ngành</td>
                    <td>
                        <input type="text" name="MaNganh" value="<?php echo !empty($data['MaNganh']) ? $data['MaNganh'] : ''; ?>"/>
                        <?php if (!empty($errors['MaNganh'])) echo $errors['MaNganh']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tên Ngành</td>
                    <td>
                        <input type="text" name="Nganh" value="<?php echo !empty($data['Nganh']) ? $data['Nganh'] : ''; ?>"/>
                        <?php if (!empty($errors['Nganh'])) echo $errors['Nganh']; ?>
                    </td>
                </tr>
                <tr>
                <td>Điểm Toán</td>
                    <td>
                        <input type="text" name="Toan" value="<?php echo !empty($data['Toan']) ? $data['Toan'] : ''; ?>"/>
                        <?php if (!empty($errors['Toan'])) echo $errors['Toan']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Điểm Lý</td>
                    <td>
                        <input type="text" name="Ly" value="<?php echo !empty($data['Ly']) ? $data['Ly'] : ''; ?>"/>
                        <?php if (!empty($errors['Ly'])) echo $errors['Ly']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Điểm Hóa</td>
                    <td>
                        <input type="text" name="Hoa" value="<?php echo !empty($data['Hoa']) ? $data['Hoa'] : ''; ?>"/>
                        <?php if (!empty($errors['Hoa'])) echo $errors['Hoa']; ?>
                    </td>
                </tr>
                <tr>
                <td>Điểm Sinh</td>
                    <td>
                        <input type="text" name="Sinh" value="<?php echo !empty($data['Sinh']) ? $data['Sinh'] : ''; ?>"/>
                        <?php if (!empty($errors['Sinh'])) echo $errors['Sinh']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Điểm Sử</td>
                    <td>
                        <input type="text" name="Su" value="<?php echo !empty($data['Su']) ? $data['Su'] : ''; ?>"/>
                        <?php if (!empty($errors['Su'])) echo $errors['Su']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Điểm Địa</td>
                    <td>
                        <input type="text" name="Dia" value="<?php echo !empty($data['Dia']) ? $data['Dia'] : ''; ?>"/>
                        <?php if (!empty($errors['Dia'])) echo $errors['Dia']; ?>
                    </td>
                </tr>
                <tr>
                <td>Điểm Tin</td>
                    <td>
                        <input type="text" name="Tin" value="<?php echo !empty($data['Tin']) ? $data['Tin'] : ''; ?>"/>
                        <?php if (!empty($errors['Tin'])) echo $errors['Tin']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Điểm Anh Văn</td>
                    <td>
                        <input type="text" name="AV" value="<?php echo !empty($data['AV']) ? $data['AV'] : ''; ?>"/>
                        <?php if (!empty($errors['AV'])) echo $errors['AV']; ?>
                    </td>
                </tr>
             
                <tr>
                    <td><button style="width: 100%;"><strong><a href="./index.php?a=4&p=DSSV">Trở về</strong></button></a></td>
                    <td>
                        <input type="submit" name="SV_them" value="Lưu" style="width: 100%;"/>
                        
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
