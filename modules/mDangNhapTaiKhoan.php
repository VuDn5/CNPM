<div id = "frmdn" >
    <!-----Dang nhap-------->
    <link href="css/dangnhap.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    $(document).ready(function() {
            <!--From dang nhap-->
            $('a.login-window').click(function() {
            
            // Nhận được giá trị của biến từ một liên kết
            var loginBox = $(this).attr('href');

            //Fade in the Popup and add close button
            $(loginBox).fadeIn(300);
            
            //Set the center alignment padding + border
            var popMargTop = ($(loginBox).height() + 24) / 2; 
            var popMargLeft = ($(loginBox).width() + 24) / 2; 
            
            $(loginBox).css({ 
                'margin-top' : -popMargTop,
                'margin-left' : -popMargLeft
            });
            
            // Add the mask to body
            $('body').append('<div id="mask"></div>');
            $('#mask').fadeIn(300);
            
            return false;
        });
        
        // When clicking on the button close or the mask layer the popup closed
        $('a.close, #mask').live('click', function() { 
          $('#mask , .login-popup').fadeOut(300 , function() {
            $('#mask').remove();  
        }); 
        return false;
        });
        <!--End From Dang nhap-->
    });
    </script>

    <div id = "dangnhap" style="float: right;" >  
                <?php
                    if(isset($_SESSION['idUser'])){
                        require("login/login_hello.php");
                    }else{
                ?>
                      <button style="width: 100px; height: 40px;margin:5px 20px;"><a style="text-decoration:none;color:black;" href="#login-box" class="login-window">đăng nhập</a></button> 
                <?php
                    }
              ?>
                         
    </div>   
</div>                 
<?php require("login/dangnhap.php");?>  