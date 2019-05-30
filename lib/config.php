<?php
$servername = "localhost";
$database = "cnpm";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, 'UTF8');
// Check connection
if (!$conn) { die("Connection failed: " . mysqli_connect_error());
}

?>

<!-- <?php
	define('SOTRANG',8);
?>
<?php
	define('SOTRANGCL',12);
?> -->