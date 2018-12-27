<?php
// Kết nối database, lấy dữ liệu chung
include('includes/general.php');

// Khai báo các biến nhận dữ liệu
$firstName = @mysqli_real_escape_string($cn, $_POST['firstName']);
$lastName = @mysqli_real_escape_string($cn, $_POST['lastName']);
$username1 = @mysqli_real_escape_string($cn, $_POST['username1']);
$password1 = @mysqli_real_escape_string($cn, $_POST['password1']);

// Các biến hiển thị thông báo 
$show_alert = '<script>$("#formJoin1 .alert").show();</script>'; // Hiển thị thông báo lỗi
$hide_alert = '<script>$("#formJoin1 .alert").hide();</script>'; // Ẩn thông báo lỗi
$success_alert = '<script>$("#formJoin1 .alert").attr("class", "alert success");</script>'; // Thông báo thành công

// Kiểm tra có tồn tại username
$query_check_exist_user = mysqli_query($cn, "SELECT * FROM users WHERE username = '$username1'");


	if ($username1 == '' || $password1 == '')
	{
		echo $show_alert.'Vui lòng điền đầy đủ tài khoản và mật khẩu.'; // Thông báo
	}
	// Ngược lại
	else
	{
        if (mysqli_num_rows($query_check_exist_user)>0)
		{
            echo $show_alert.'Tài khoản tồn tại.';
        }else
        {
		if (strlen($password1) < 6 || strlen($password1) > 50)
		{
			echo $show_alert.'Mật khẩu trong khoảng từ 6-50 ký tự.'; // Thông báo
		}
		// Nếu username chứa khoảng trắng và ký tự đặc biệt
		else if (!preg_match('/((?=.*\d)(?=.*[A-Z]))/', $password1))
		{
			echo $show_alert.'Mật khẩu phải ít nhất 1 ký tự viết hoa và 1 chữ số.'; // Thông báo
		}
		else
		{
		//$password = md5($password); // Mã hoá password sang MD5
		// Thêm thông tin người dùng vào table users 
		$query_create_user = mysqli_query($cn, "INSERT INTO users VALUES (
			    '',
				'$firstName',
				'$lastName',
				'$username1',
				'$password1',
				'$date_current' 
			)");
		echo $show_alert.$success_alert.'Đăng ký tài khoản thành công.'; // Thông báo(không cần cũng được)
		echo '<script>
		alert("Đăng ký tài khoản thành công");
		window.location.reload();
		</script>';
        }
    }
}
?>