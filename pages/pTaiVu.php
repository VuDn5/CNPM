
<div class="bottomheader">
	<div class="container">
		<ul>
			<li class="dropdown">
				<a href="#"><b>Trang chủ</b></a>
			</li>
			<li class="dropdown">
				<a href=""><b>DS Sinh Viên</b></a>
			</li>
			<li class="dropdown">
				<a href="#"><b>DS Giáo Viên</b></a>
			</li>
			<li class="dropdown">
				<a href=""><b>Sổ điểm</b></a>
			</li>
			
			<li class="dropdown">
				<a href=""><b>Thống kê lương</b></a>
			</li>
		</ul>
	</div> <!-- end container -->
	</div> <!-- end bottomheader -->

<div>

<?php 
	

		

            	$p=(isset($_GET['p'])?$_GET['p']:'trangchu');
				switch($p)
				{		
					
					
					case "DSSV": 	require("pages/DSSV.php");
											break;	
					case "DSGV": 	    require("pages/DSGV.php");
											break;															
					
				}
		
 ?>
</div>