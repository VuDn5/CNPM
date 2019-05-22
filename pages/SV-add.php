<?php
require "./lib/config.php";
require 'SV-function.php';
// Nếu người dùng submit form
if (!empty($_POST['SV_them']))
{
    // Lay data
    $data['MSSV']        = isset($_POST['MSSV']) ? $_POST['MSSV'] : '';
    $data['HOTEN']         = isset($_POST['HOTEN']) ? $_POST['HOTEN'] : '';
    $data['NGAYSINH']    = isset($_POST['NGAYSINH']) ? $_POST['NGAYSINH'] : '';
    $data['GIOITINH']          = isset($_POST['GIOITINH']) ? $_POST['GIOITINH'] : '';
    $data['MATINH']        = isset($_POST['MATINH']) ? $_POST['MATINH'] : '';
    $data['MAHUYEN']         = isset($_POST['MAHUYEN']) ? $_POST['MAHUYEN'] : '';
    $data['MALOP']    = isset($_POST['MALOP']) ? $_POST['MALOP'] : '';
    // Validate thong tin
     $errors = array();
            if (empty($data['MSSV'])){
                $errors['MSSV'] = 'Chưa nhập mã sinh viên';
            }
            
            if (empty($data['HOTEN'])){
                $errors['HOTEN'] = 'Chưa nhập họ tên sinh viên';
            }
            if (empty($data['NGAYSINH'])){
                $errors['NGAYSINH'] = 'Chưa nhập ngày sinh sinh viên';
            }
            
            if (empty($data['MATINH'])){
                $errors['MATINH'] = 'Chưa nhập mã tỉnh';
            }
            
            if (empty($data['MAHUYEN'])){
                $errors['MAHUYEN'] = 'Chưa nhập mã huyện';
            }
            if (empty($data['MALOP'])){
                $errors['MALOP'] = 'Chưa nhập mã lớp';
            }

    // Neu ko co loi thi insert
    if (!$errors){
        SV_them($data['MSSV'], $data['HOTEN'], $data['NGAYSINH'],$data['GIOITINH'], $data['MATINH'], $data['MAHUYEN'],$data['MALOP']);

 
        //Trở về trang danh sách
      header("location: ./index.php?a=4&p=DSSV");
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
        <script type="text/javascript" src="../fckeditor/fckeditor.js"></script>
        <script type="text/javascript" src="../js/loadfck.js"></script>
        <script type="text/javascript"></script>
        <script>
                $(document).ready(function () {
                    $("#province").change(function(){
                        id=$("#province").val();
                        $.ajax({
                            url: './js/xuly_Tinh.php',
                            type: 'POST',
                            data: 'MATINH='+id,
                            async:true,
                            success: function (kq) {
                                setTimeout(function(){
                                    $('#district').html(kq);
                                },;
                            },
                            error: function (e) {
                                console.log(e.message);
                            }
                        });
                        return false;
                    });
                });
         </script>
    </head>
    <body>
          
        <form method="post" action="./index.php?a=4&p=Add">
            <table class="table"align="center" cellpadding="10" style="margin: auto; border-collapse: inherit; width: 75%;">

                <tr>
                      <td colspan="2" bgcolor="#0000FF" style="text-align: center; font-weight: bold; font-size: 24px;color: yellow;  ">Thêm Sinh viên</td>
                </tr>
                <tr>
                    <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Mã Sinh Viên</td>
                    <td width="643" bgcolor="#CCCCCC">
                        <input type="text" name="MSSV" value="<?php echo !empty($data['MSSV']) ? $data['MSSV'] : ''; ?>"/>
                        <?php if (!empty($errors['MSSV'])) echo $errors['MSSV']; ?>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Họ Tên</td>
                    <td width="643" bgcolor="#CCCCCC">
                        <input type="text" name="HOTEN" value="<?php echo !empty($data['HOTEN']) ? $data['HOTEN'] : ''; ?>"/>
                        <?php if (!empty($errors['HOTEN'])) echo $errors['HOTEN']; ?>
                    </td>
                </tr>
                 <tr>
                    <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Ngày Sinh</td>
                    <td width="643" bgcolor="#CCCCCC">
                        <input type="text" name="NGAYSINH" value="<?php echo !empty($data['NGAYSINH']) ? $data['NGAYSINH'] : ''; ?>"/>
                        <?php if (!empty($errors['NGAYSINH'])) echo $errors['NGAYSINH']; ?>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Giới Tính</td>
                    <td  bgcolor="#CCCCCC">
                        <select name="GIOITINH">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" <?php if (!empty($data['GIOITINH']) && $data['GIOITINH'] == 'Nữ') echo 'selected'; ?>>Nu</option>
                        </select>
                        <?php if (!empty($errors['GIOITINH'])) echo $errors['GIOITINH']; ?>
                    </td>
                </tr>
               
                  <tr>
                    <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Tỉnh</td>
                    <td bgcolor="#CCCCCC">
                      <select id="province" name="MATINH" size="1">
                          <?php 
                              require("./lib/config.php");
                              $result=mysqli_query($conn,"SELECT DISTINCT matp, name  FROM tinh");
                              while($data=mysqli_fetch_assoc( $result)){
                                echo "<option value ='$data[matp]'>$data[name]</option>";
                              }
                             
                              
                          ?>
                      
                      </select>
                  </td>
                </tr>
                <tr>
                    <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Huyện</td>
                    <td bgcolor="#CCCCCC">
                      <select id ="district" name="MAHUYEN" size="1">
                         
                          <?php 
                              require("./lib/config.php");
                              $result=mysqli_query($conn,"SELECT DISTINCT maqh, name  FROM huyen");
                              while($data=mysqli_fetch_assoc( $result)){
                                echo "<option value ='$data[maqh]'>$data[name]</option>";
                              }
                             
                              
                          ?>
                
                    </select>
                  </td>
                </tr>
                <tr>
                    <td bgcolor="#00FFFF" style="text-align: center; font-weight: bold;">Lớp</td>
                    <td bgcolor="#CCCCCC">
                        <select id ="class" name="MALOP" size="1">
                         
                          <?php 
                              require("./lib/config.php");
                              $result=mysqli_query($conn,"SELECT DISTINCT MALOP, TENLOP  FROM malop");
                              while($data=mysqli_fetch_assoc( $result)){
                                echo "<option value ='$data[MALOP]'>$data[TENLOP]</option>";
                              }
                             
                              
                          ?>
                
                    </select>
                    </td>
                </tr>
                  
                <tr>
                    <td><button style="width: 100%;"><strong><a href="./index.php?a=4&p=DSSV">Trở về</strong></button></a></td>
                    <td>
                        <input type="submit"  name="SV_them" value="Lưu" style="width: 100%;"/>
                        
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
