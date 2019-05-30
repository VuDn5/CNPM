	
	<?php
       
		if(!isset($_SESSION['txtUsername']))
		{
			include ("modules/mDangNhapTaiKhoan.php");
		}
		else
		{
			include ("modules/mThongTinTaiKhoan.php");
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