<?php
	// Kết nối database, lấy dữ liệu chung
	include('includes/general.php');

	// Khai báo các biến nhận dữ liệu
	$username = @mysqli_real_escape_string($cn, $_POST['username']);
	$password = @mysqli_real_escape_string($cn, $_POST['password']);

	// Các biến hiển thị thông báo 
	$show_alert = '<script>$("#formJoin .alert").show();</script>'; // Hiển thị thông báo lỗi
	$hide_alert = '<script>$("#formJoin .alert").hide();</script>'; // Ẩn thông báo lỗi
	$success_alert = '<script>$("#formJoin .alert").attr("class", "alert success");</script>'; // Thông báo thành công

	// Kiểm tra có tồn tại username
	$query_check_exist_user = mysqli_query($cn, "SELECT * FROM users WHERE username = '$username'");

	// Nếu username hoặc password trống
	if ($username == '' || $password == '')
	{
		echo $show_alert.'Vui lòng điền đầy đủ thông tin bên trên.'; // Thông báo
	}
	else if($username == 'trung'){
		echo '<script>
				window.location="admin.php";
				</script>';
	}
	// Ngược lại
	else
	{
		// Nếu tồn tại username thì thực thi đăng nhập
		if (mysqli_num_rows($query_check_exist_user))
		{
			//$password = md5($password); // Mã hoá password sang MD5
			// Kiểm tra thông tin đăng nhập
			$query_check_login = mysqli_query($cn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
			// Nếu thông tin đăng nhập đúng
			if (mysqli_num_rows($query_check_login))
			{
				echo $show_alert.$success_alert.'Đăng nhập thành công.'; // Thông báo
				echo '<script>
				window.location.reload();
				</script>';
			}else{
				echo $show_alert.'Tài khoản hoặc mật khẩu không chính xác.';
			}
		}else
		{
			echo $show_alert.'Tài khoản không tồn tại.'; // Thông báo
		}
	}
?>