﻿<div class="banner">
    
    </div>
<br/>
<div style="text-align:right;margin-right:186px;font-weight: bold ">
<?php
session_start();
echo "Chào Bạn  " .$_SESSION['ses_MaHS'];
?>
    </div>
<style type="text/css">
    #menu ul{
        margin-left:145px;
    }
    #menu ul li{
        display:inline;

    }
    #menu ul a{
        text-decoration:none;
        width:245px;
        float:left;
        background:#336699;
        color:#FFFFFF;
        text-align:center;
        line-height: 27px;
        font-weight:bold;
        border-left:1px solid #FFFFFF;
    }

    #menu ul a:hover{
        background:#000000;
    }
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="menu" >

    <ul>

        <li><a href="xemdiem_hs.php">Tra Cứu Điểm</a></li>
        <li><a href="sinhvien_xemthongtin.php">Thông Tin Sinh Viên</a></li>
        <li><a href="../repass2.php">Thay Đổi Mật Khẩu</a></li>
        <li><a href="../logout.php">Đăng Xuất</a></li>

    </ul>
</div>
<?php
require "../../classes/diem.class.php";
$connect=new diem();
$students=$connect->alldiem();
$dis=$connect->dong();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sinh Viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#CAFFFF">
<br/>
<h1 class="h1" style="font-family:Tahoma;text-align: center;" >Điểm Sinh Viên</h1>
<center><form action="xemdiem_hs.php" method="post">

    <input type="submit" name="ok" value="XEM" />
    </form></center>
<?php
    if(isset($_POST['ok']))
{
?>
<table width="80%" border="1" cellspacing="0" cellpadding="10" style="margin-left:auto; margin-right: auto;">
    <tr class="diem" style="font-weight: bold;color: #0A246A">
        <td>Mã Sinh Viên</td>
        <td style="width:200px">Tên Sinh Viên</td>
        <td>Mã Lớp</td>
        <td>Điểm Toán</td>
        <td>Điểm Lý</td>
        <td>Điểm Hóa</td>
        <td>Điểm Anh</td>
        <td>Điểm Sinh</td>
        <td>Điểm Sử</td>
        <td>Điểm Địa</td>
        <td>GDCD</td>
        <td>Điểm Tin</td>
        <td>Điểm TB</td>

    </tr>
    <?php
    foreach ($students as $item) {
        if ($_SESSION['ses_MaHS'] == $item['MSSV']) {
                ?>
                    <td><?php echo $item['MSSV']; ?></td>
                    <td><?php echo $item['HOTEN']; ?></td>
                    <td><?php echo $item['MALOP']; ?></td>
                    <td><?php echo $item['Toán']; ?></td>
                    <td><?php echo $item['Lý']; ?></td>
                    <td><?php echo $item['Hóa']; ?></td>
                    <td><?php echo $item['Anh']; ?></td>
                    <td><?php echo $item['Sinh']; ?></td>
                    <td><?php echo $item['Sử']; ?></td>
                    <td><?php echo $item['Địa']; ?></td>
                    <td><?php echo $item['GDCD']; ?></td>
                    <td><?php echo $item['Tin']; ?></td>
                <?php
                $tinh = 0;
                    $tinh = ($item['Toán'] + $item['Lý'] + $item['Hóa'] + ($item['Anh'] + $item['Sinh'])  + $item['Sử']) + $item['Địa'] + ($item['GDCD'] + $item['Tin'])/ 9;
                    $item['DiemTB'] = $tinh;
                ?>
                 <?php if ($item['Toán'] != null || $item['Lý'] != null || 
                    $item['Hóa'] != null || $item['Anh'] != null ||
                    $item['Sinh'] != null || $item['Sinh'] != null ||
                    $item['Sử'] != null || $item['Địa'] != null ||
                    $item['GDCD'] != null || $item['Tin'] != null
               
                ) {
                    ?>
                    <td><?php echo round($item['DiemTB'],1); ?></td>
                    </tr>
                    <?php
                }
            }
        }
    }
    ?>
</table>


<table  border=0 cellpadding=5 cellspacing=0 align="center" width="983">
    <TR>
        <TD>	<tr>
        <td  colspan="2" bgcolor="#336699" align="center" style="color:white" >
            Copyright &copy; LQV High School <br>
        </td>
    </tr>
    </td>
    </TR>
</table>
</body>
</html>