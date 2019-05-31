
<?php
require $_SERVER['DOCUMENT_ROOT']. "/CNPM/lib/config.php";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
    function XacNhan(){
        if(!window.confirm('Bạn Có Chắc Muốn Xóa Sinh Viên Này Không!!!')){
            return false;
        }
    }
</script>
<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body bgcolor="#CAFFFF">
<br/>
<h1 class="h1" style="font-family:Tahoma;text-align: center;" >Quản lý Điểm sinh viên</h1>
<h2 align="center">
    <form action="?a=3&p=Diem" method="post">
        <div style="text-align:center">
            <?php
            ?>
            
            <select name="lop" style="width:100px;height: 25px" >
                <?php
                $query2="select * from lop";
                $results2=mysqli_query($conn,$query2);
                while($data2=mysqli_fetch_assoc($results2)){
                    echo "<option value='$data2[MALOP]'>$data2[MALOP]</option>";
                }
                ?>

            </select>
            <select name="sv" style="width:100px;height: 25px">
                <?php
                $query3="select * from sinhvien";
                $results3=mysqli_query($conn,$query3);
                while($data3=mysqli_fetch_assoc($results3)){
                    echo "<option value='$data3[MSSV]'>$data3[MSSV]</option>";
                }
                ?>

            </select>
            <p> <input type="submit" name="add" value="Chọn" style="width:100px;height: 25px"/ ></p>

        </div>
    </form>
    <form action="xemdiem.php" method="post">
        </form>
</h2>
<table width="75%" border="1" cellspacing="0" cellpadding="10" style="margin-left:180px">
    <tr class="diem" style="font-weight: bold;color: #0A246A">
        <td>Mã Sinh Viên</td>
        <td style="width:200px">Tên Sinh Viên</td>
        <td>Mã Lớp</td>
        <td>Mã Môn Học</td>
        <td>Điểm Toán</td>
        <td>Điểm Lý</td>
        <td>Điểm Hóa</td>
        <td>Điểm Anh</td>
        <td>Điểm Sinh</td>
        <td>Điểm Sử</td>
        <td>Điểm Địa</td>
        <td>Điểm Tin</td>
        <td>Điểm TB</td>
        <td>Sửa Điểm</td>
        <td>Xóa Điểm</td>
    </tr>
    <?php
    ?>
    <?php
    require $_SERVER['DOCUMENT_ROOT']. "/CNPM/pages/diem/diem.class.php";
    $connect=new diem();
    $students=$connect->alldiem();
    if(isset($_POST['add'])) {
        foreach ($students as $item) {
            if($_POST['lop']==$item['MALOP'] && $_POST['sv']==$item['MSSV'] ) {

            	$sql=("SELECT sinhvien.* FROM sinhvien 
          			INNER JOIN diem ON sinhvien.MSSV=diem.MSSV
          			INNER JOIN monhoc on diem.MAMH=monhoc.MAMH");
       
			      $result=mysqli_query($conn,$sql);
			      $s=1;
			      while($row_sv=mysqli_fetch_array($result)){  
	?>
                <tr>
                    <td><?php echo $item['MSSV']; ?></td>
                    <td><?php echo $item['HOTEN']; ?></td>
                    <td><?php echo $item['MALOP']; ?></td>
                    <td><?php echo $item['MAMH']; ?></td>
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
                    <td><?php echo round($item['DiemTB'], 1); ?></td>
                    <td><?php echo "<a href='diem/suadiem.php?cma=$item[MaDiem]'><button type='button'>Sửa</button></a>"; ?></td>
                    <td><?php echo "<a href='diem/xoadiem.php?cma=$item[MaDiem]'  onclick='return XacNhan();'><button type='button'>Xóa</button></a>"; ?></td>
                </tr>
                <?php
            }}
        }
    }
    //disconnect_db();
     ?>
</table>

</body>
</html>