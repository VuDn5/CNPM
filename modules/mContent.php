
<?php
    $a = (isset($_GET['a'])) ? $_GET['a'] : 1; 
    
    switch ($a) {
        case 1:
            include ("pages/pHome.php");
            break;
	case 2:
            include ("pages/pSinhVien.php");
            break;
	case 3:
            include ("pages/pGiaoVien.php");
            break;
	case 4:
            include ("pages/pTaiVu.php");
            break;
        default:
            break;
    }
?>