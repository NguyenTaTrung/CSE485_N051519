<?php
	$namehost = 'localhost';
	$userhost = 'root';
	$passhost = '';
	$database = 'loginmember';

	// Lệnh kết nối tới database
	$cn = mysqli_connect($namehost, $userhost, $passhost, $database);

	// Nếu kết nối database thất bạn sẽ báo lỗi
	if (!$cn)
	{
		echo 'Could not connect to database.';
	}
	else{
		mysqli_set_charset($cn,'utf8');
	}
?>