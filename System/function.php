<?php 
//--------------------------------------------------------------------------------------
// Ket noi CSDL
//--------------------------------------------------------------------------------------

function db_connect($server = DB_SERVER,$username = DB_USERNAME,$password = DB_PASSWORD,$database = DB_DATABASE) {
	$conn = mysqli_connect($server,$username,$password);
	if ($conn) mysqli_select_db($database);
	return $conn;
}

//--------------------------------------------------------------------------------------
// Tao Recordset tu cau Query
//--------------------------------------------------------------------------------------
function db_query($query) {
	global $conn;
	$result = mysqli_query($query,$conn);
//	echo mysql_error();
	
	return $result;
}
//--------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------
// Kiem tra chuoi SQL
//--------------------------------------------------------------------------------------
function checkvalue($value,$theType,$theDefinedValue = "",$theNotDefinedValue = "") 
{
	global $conn;
  $value = get_magic_quotes_gpc() ? stripslashes($value) : $value;

  $value = $conn->real_escape_string($value);

  switch ($theType) {
    case "text":
      $value = ($value != "") ? "'" . $value . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $value = ($value != "") ? intval($value) : "NULL";
      break;
    case "double":
      $value = ($value != "") ? "'" . doubleval($value) . "'" : "NULL";
      break;
    case "date":
      $value = ($value != "") ? "'" . $value . "'" : "NULL";
      break;
    case "defined":
      $value = ($value != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $value;
}

//--------------------------------------------------------------------------------------
// Upload file
//--------------------------------------------------------------------------------------

function upload($file,$path){
	
	$tmp = $file['tmp_name'];
	$name = $file['name'];
	if(!file_exists($path)){ 
		mkdir($path); 
	}
	// Thuc hien upload len host
	$kq = move_uploaded_file($tmp,$path.$name);
	return $kq;
}
//-------------------------------------------------------------------------------------
// CHANGE PASSWORD
//------------------------------- ------------------------------------------------------
function chgpass($user,$password_old,$password){

	global $conn;
	//Kiem tra password old
	$sql = sprintf("SELECT users.* FROM users WHERE Password=md5(%s) AND Username = %s",
		checkvalue($password_old,"text"),
		checkvalue($user,"text"));
	//echo $sql;
	$result = mysqli_query($conn,$sql);
	$kq = mysqli_fetch_assoc($result);
	if($kq){	
		// Neu kiem tra password old OK thi thuc hien doi password
		$sql = sprintf("UPDATE users SET Password= md5(%s) WHERE Username=%s",
			checkvalue($password,"text"),
			checkvalue($user,"text"));
			//echo $sql;
			$result = mysqli_query($conn,$sql);
			if($result){
				return 1;
			}else{
				return 0;
			}
	}else{
		return 0;
	}
}

//-------------------------------------------------------------------------------------
// LOGOUT
//------------------------------- ------------------------------------------------------
function logout(){
	// Huy cac bien SESSION su dung lenh unset
	unset($_SESSION['login']);
	unset($_SESSION['IDuser']);
	unset($_SESSION['hoten']);
	session_destroy();
}

function check_login () {
	if (isset($_SESSION['login']) && isset($_SESSION['login'])) {
		return true;
	}
	else {
		false;
	}
}



