<?php
	$matp=$_POST["matp"];
	require ("./lib/config.php");
	$result=mysqli_query($conn,"SELECT  name FROM huyen WHERE matp='$matp' ");

	while ($data=mysqli_fetch_assoc($result)) {
		echo "<option> $data[name]</option>";
	}

  ?>