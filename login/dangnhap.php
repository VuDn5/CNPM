<div id="login-box"class="login-popup">  
    <a href="index.php" class="close"><img src="images/close_pop.png" class="btn_close" title="Đóng" alt="Close" /></a>
          <form method="post" class="signin" action="login/xulydangnhap.php">
                <fieldset class="textbox" style="text-align: center;">
            	<label class="username">
                <span style="font-size:16px">Username</span>
                <input id="Username" name="txtUsername" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                
                <label class="password">
                <span style="font-size:16px">Password</span>
                <input id="Password" name="txtPassword" value="" type="password" placeholder="Password">
                </label>
                <!-- <tr>
                                
                    <td> <input style="width: 20px;" type="radio" name="rdodn" value="tv" checked>Tài Vụ 
                     <input style="width: 20px;" type="radio" name="rdodn" value="gv" />Giáo Vụ
                    </td>
                </tr>
                <br>
                <tr>
                
                    <td><input  style="width: 20px;" type="checkbox" name="chkNhoMK" value=1> Nhớ mật khẩu?  </td>
                </tr> -->
                <input  class="submit button" name="bntdangnhap" type="submit" value="Đăng nhập" />               
                <input name="xuly" type="hidden" id="xuly" value="1" />
                </fieldset>
          </form>
</div>      
        
        
