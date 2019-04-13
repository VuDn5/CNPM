document.addEventListener("DOMContentLoaded",function(){
	//khai báo các biến cần dùng
	var nut = document.querySelector('.nut'),
		menutrai = document.querySelector('.menutrai'),
		den = document.querySelector('.den');
		khoito = document.querySelector('.noidungto');
		//khi click vào nút xanh
	nut.onclick = function(){
		den.classList.add('len');

		//cho cả khối to dịch sang phải
		khoito.classList.add('dichphai');
	}
	den.onclick = function(){
		den.classList.remove("len");
		khoito.classList.remove('dichphai');
	}
},false)