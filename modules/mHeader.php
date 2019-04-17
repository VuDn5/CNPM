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
   
</div>



<div>	
	<?php
		if(isset($_SESSION['maTaiKhoan']))
		{
			include ("modules/mThongTinTaiKhoan.php");
		}
		else
		{
			include ("modules/mDangNhapTaiKhoan.php");
		}
	?>
</div>
<div id = "header">
	<div class="row">
		<div class="logo">
			<a href="index.php"><img src="images/logo.jpg" ></a>                
		</div>
		<h1 >LQV HIGH SCHOOL</h1>
		<div id="hr"></div>
		<p id="sub">Never Give Up Backing To The Future</p>
	</div>
</div>