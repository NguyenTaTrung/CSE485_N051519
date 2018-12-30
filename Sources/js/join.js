// Hàm gửi dữ liệu
function Join() {
	// Khai báo các biến dữ liệu trong form
	$username = $('#username').val();
	$password = $('#password').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'join.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			username : $username,
			password : $password
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(result) {
			$('#formJoin .btn-submit').html('Đăng nhập');
			$('#formJoin .alert').html(result); // Thông báo
		}
	});
}


function Reges(){
	$firstName = $('#firstName').val();
	$lastName = $('#lastName').val();
	$username1 = $('#username1').val();
	$password1 = $('#password1').val();


	$.ajax({
		url : 'regester.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			firstName : $firstName,
			lastName : $lastName,
			username1 : $username1,
			password1 : $password1
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(result) {
			$('#formJoin1 .btn-regester').html('Đăng ký');
			$('#formJoin1 .alert').html(result); // Thông báo
		}
	});
}

// Bắt sự kiện click vào nút bắt đầu của form
$('#formJoin .btn-submit').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	Join();
});

$('#formJoin1 .btn-regester').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	Reges();
});

// $(document).on('click', '#tk', function(){
	
// 	var nganh = $('#cateListMainSearch').val();
//      var diadiem = $('#locationMainSearch').val();
// 	$.ajax({
// 		url:'timkiemcongviec.php',
// 		method : 'POST',
// 		data:{
// 			nganh : nganh,
// 			diadiem:diadiem
// 		},
// 		success:function(data){
// 			$('#abc').html(data);
// 		},
// 		error : function(){
// 			alert('loi');
// 		}
// 	})

// });


$("#tk").click(function(){
	var nganh = $('#cateListMainSearch').val();
     var diadiem = $('#locationMainSearch').val();
	$.ajax({
		url:'timkiemcongviec.php',
		method : 'POST',
		data:{
			nganh : nganh,
			diadiem : diadiem
		},
		success:function(data){
			$('#conten').html(data);
		},
		error : function(){
			alert('loi');
		}
	})
	
})
