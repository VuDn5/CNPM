<div id = "frmdn" >
    <form name="frmLogin" action="index.php?a=10" method="post" onsubmit="return KiemTraDangNhap()">
        Tài khoản: <input class="frm" name="txtUS" type="text" id="txtUS" size="15" maxlength="20" width="15">
        Mật khẩu: <input class="frm" name="txtPS" type="password" id="txtPS" size="15" maxlength="20" width="15"><br>
        <input type="submit" value="Đăng nhập" class="fa fa-user">
    </form>
    <script type="text/javascript">
        function KiemTraDangNhap()
        {
            var username = document.getElementById("txtUS");
	    var password = document.getElementById("txtPS");	
            if(username.value == "" || password.value == "")
            {
                username.focus();
                password.focus();
                alert("Tên đăng nhập hoặc mật khẩu không được rỗng");
                return false;
            }

            return true;
        }
    </script>
</div>