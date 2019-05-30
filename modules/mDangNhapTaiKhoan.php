
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý nhân sự</title>
<body style="margin-top:100px;">
    <div id = "frmdn" style="width: 100%; ">
        <form name="frmLogin" action="index.php?a=1" method="post" onsubmit="return KiemTraDangNhap()" style="float: right; margin-top: 10px;">
                    <td nowrap="nowrap" align="right">Tên đăng nhập:</td>
                    <td><input class="frm" type="text" name="Username" value="" id="txtUS" size="15" maxlength="20" width="15" /></td>
                    <td nowrap="nowrap" align="right">Mật khẩu:</td>
                    <td><input class="frm" type="password" name="Password"d="txtPS" size="15" maxlength="20" width="15" /></td>
                    <td nowrap="nowrap" align="right">&nbsp;</td>
                    <tr>
                        <td>  &nbsp; </td>              
                        <td > <input  type="radio" name="rdodn" value="tv" checked >Tài Vụ 
                             <input type="radio" name="rdodn" value="gv" > Giáo Vụ
                          </td>
                    </tr>
                                <td><input name="submit" type="submit" value="Đăng nhập" /></td>
                </table>
        </div>
        </form>
</body>

<?php
    if (isset($_POST['submit'])) {
        $Username = mysqli_real_escape_string($conn, $_POST['Username']);
        $Password = mysqli_real_escape_string($conn, $_POST['Password']);
        $type = mysqli_real_escape_string($conn, $_POST["rdodn"]);
      
        if ($type=='gv') {
            $sql = "SELECT * FROM giaovu WHERE MSGV='$Username' and matkhau='$Password'";  
        }
        else{
            $sql="SELECT * FROM taivu WHERE MSTV='$Username' and matkhau='$Password'";
                   
        }   

        $query=mysqli_query($conn, $sql);
        $num_row=mysqli_num_rows($query);
        if ($num_row!=0) {
            $row=mysqli_fetch_array($query);

            $_SESSION["matkhau"]=$row['matkhau'];
            $_SESSION["matkhau"]=$row['matkhau'];
            $_SESSION["HOTEN"]=$row['HOTEN'];
            $_SESSION["HOTEN"]=$row['HOTEN'];
		if ($type=='gv') {
			header("location: ./index.php?a=0&id=3");
		}
       	 	else{
			header("location: ./index.php?a=0&id=4");
        	}
        }
        else {
            echo " Tên hoặc mật khẩu sai";
        }
        
        }
  ?>