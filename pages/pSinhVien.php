<div class="bottomheader">
	<div class="container">
		<ul>
			<li class="dropdown">
				<a href="../index.php"><b>Trang chủ</b></a>
			
			<li class="dropdown">
				<a href="index.php?a=2&p=Diem"><b>Xem điểm</b></a>
			</li>
			
			<li class="dropdown">
				<a href=""><b>Thời khóa biểu</b></a>
			</li>
		</ul>
	</div> <!-- end container -->
</div> <!-- end bottomheader -->

<div>
	<?php 

				$p=(isset($_GET['p'])?$_GET['p']:'pHome');
					$action=(isset($_GET['action'])?$_GET['action']:'');

            	
				switch($p)
				{		

					case "Home": 		require("pages/pHome.php");
											break;	

					case "Diem": 		require("pages/sinhvien/xemdiemsv.php");
											break;	
					case "TKB": 	    require("pages/TKBSV.php");
											break;	
					

		
				}
		
 ?>
</div>