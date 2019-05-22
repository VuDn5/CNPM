<?php 

			//-------------------------------------------------------------------------------------
			// THEM MOI SINH VIEN
			//-------------------------------------------------------------------------------------
			function SV_them($MSSV,$HOTEN,$NGAYSINH,$GIOITINH,$matp,$maqh,$MALOP){

				// Gọi tới biến toàn cục $conn
				 global $conn;
			    
			    // Hàm kết nối
				// Insert SQL
				// Câu truy vấn thêm
			    
				$sql = sprintf("INSERT INTO sinhvien (MSSV,HOTEN,NGAYSINH,GIOITINH,matp,maqh,MALOP)
						VALUES (%s,%s,%s,%s,%s,%s,%s)",
					checkvalue($MSSV,"int"),
					checkvalue($HOTEN,"text"),
					checkvalue($NGAYSINH,"text"),	
					checkvalue($GIOITINH,"text"),	
					checkvalue($matp,"int"),
					checkvalue($maqh,"int"),
					checkvalue($MALOP,"int"));
				 //echo $sql;
				$result = mysqli_query($conn,$sql);
				return $result;
			}

			//-------------------------------------------------------------------------------------
			// CAP NHAT SINH VIEN
			//-------------------------------------------------------------------------------------
			function SV_capnhat($MSSV,$HOTEN,$NGAYSINH,$GIOITINH,$matp,$maqh,$MALOP){
				  // Gọi tới biến toàn cục $conn
			    	global $conn;
			    // Hàm kết nối
			   
				// Update SQL

			
				$sql = sprintf("UPDATE sinhvien SET MSSV=%s, HOTEN=%s, NGAYSINH=%s, GIOITINH=%s, matp=%s, maqh=%s, MALOP=%s WHERE MSSV=%s",
					checkvalue($MSSV,"int"),
					checkvalue($HOTEN,"text"),
					checkvalue($NGAYSINH,"text"),	
					checkvalue($GIOITINH,"text"),	
					checkvalue($matp,"int"),
					checkvalue($maqh,"int"),
					checkvalue($MALOP,"int"));
				echo $sql;
				$result = mysqli_query($conn,$sql);
				return $result;


			}
			//-------------------------------------------------------------------------------------

			// XOA SINH VIEN
			//-------------------------------------------------------------------------------------
			function SV_xoa($id){
				 // Gọi tới biến toàn cục $conn
			    global $conn;
			    
			    // Hàm kết nối
			    
			    // Câu truy vấn xóa
				$sql = "DELETE FROM sinhvien WHERE MSSV = $id";
				$result = mysqli_query($conn,$sql);
			}



 ?>