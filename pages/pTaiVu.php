
<div class="bottomheader">
	<div class="container">
		<ul>
			<li class="dropdown">
				<a href="?a=4"><b>Trang chủ</b></a>
			</li>
		
			<li class="dropdown">
				<a href=""><b>Thống kê lương</b></a>
			</li>
		</ul>
	</div> <!-- end container -->
	</div> <!-- end bottomheader -->

<div>
	<div>
		<p style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large">CHÀO MỪNG BẠN ĐẾN TRANG QUẢN LÝ CỦA TÀI VỤ</p>
	</div>
<?php 

				$p=(isset($_GET['p'])?$_GET['p']:'pHome');
					$action=(isset($_GET['action'])?$_GET['action']:'');

            	
				switch($p)
				{		

					case "Home": 		require("pages/pHome.php");
											break;	

					
													break;							
					case 'LUONG':       require("pages/LUONG.php");
													break;	

		
				}
		
 ?>
</div>