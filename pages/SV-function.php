<?php
//-------------------------------------------------------------------------------------
// THEM MOI SANPHAM
//-------------------------------------------------------------------------------------
function SV_them($Masv,$HoTen,$NgaySinh,$GioiTinh,$MaTinh,$MaHuyen,$HKTT,$MaNganh,$Nganh,$Toan,$Ly,$Hoa,$Sinh,$Su,$Dia,$Tin,$AV){
	// Insert SQL
	$sql = sprintf("INSERT INTO sinhvien (Masv,HoTen,NgaySinh,GioiTinh,MaTinh,MaHuyen, HKTT,MaNganh,Nganh,Toan,Ly,Hoa,Sinh,Su,Dia,Tin,AV) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%$,%$,%$)",
		checkvalue($Masv,"text"),
		checkvalue($HoTen,"text"),
		checkvalue($NgaySinh,"date"),
		checkvalue($GioiTinh,"text"),
		checkvalue($MaTinh,"text"),
		checkvalue($MaHuyen,"text"),
		checkvalue($HKTT,"text"),
		checkvalue($MaNganh,"text"),
		checkvalue($Nganh,"text"),
		checkvalue($Toan,"float"),		
		checkvalue($Ly,"float"),		
		checkvalue($Hoa,"float"),
		checkvalue($Sinh,"float"),
		checkvalue($Su,"float"),
		checkvalue($Dia,"float"),
		checkvalue($Tin,"float"),
		checkvalue($AV,"float"));
	
	 //echo $sql;
	$result = mysqli_query($sql);
	return $result;
}
	
//-------------------------------------------------------------------------------------
// CAP NHAT sanpham
//-------------------------------------------------------------------------------------
function SV_capnhat($Masv,$HoTen,$NgaySinh,$GioiTinh,$MaTinh,$MaHuyen,$HKTT,$MaNganh,$Nganh,$Toan,$Ly,$Hoa,$Sinh,$Su,$Dia,$Tin,$AV){
	// Update SQL
	$sql = sprintf("UPDATE sinhvien SET Masv=%s,HoTen=%s,NgaySinh=%s,GioiTinh=%s,MaTinh=%s,MaHuyen=%s,HKTT=%s,MaNganh=%s,Nganh=%s,Toan=%s,Ly=%s,Hoa=%s,Sinh=%s,Su=%s,Dia=%s,Tin=%s,AV=%s WHERE Masv=%s",
		checkvalue($Masv,"text"),
		checkvalue($HoTen,"text"),
		checkvalue($NgaySinh,"date"),
		checkvalue($GioiTinh,"text"),
		checkvalue($MaTinh,"text"),
		checkvalue($MaHuyen,"text"),
		checkvalue($HKTT,"text"),
		checkvalue($MaNganh,"text"),
		checkvalue($Nganh,"text"),
		checkvalue($Toan,"float"),		
		checkvalue($Ly,"float"),		
		checkvalue($Hoa,"float"),
		checkvalue($Sinh,"float"),
		checkvalue($Su,"float"),
		checkvalue($Dia,"float"),
		checkvalue($Tin,"float"),
		checkvalue($AV,"float"));
	echo $sql;
	$result = mysqli_query($sql);
	return $result;
}

//-------------------------------------------------------------------------------------
// XOA sanpham
//-------------------------------------------------------------------------------------
function SV_xoa($id){
	$sql = "DELETE FROM sinhvien WHERE Masv = $id";
	$result = mysqli_query($sql);
	return $result;
}

