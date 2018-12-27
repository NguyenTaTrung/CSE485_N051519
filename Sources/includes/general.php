<?php
	// Kết nối với file connectdb.php
	include('connectdb.php');
	// Lấy múi giờ chung cho site
	date_default_timezone_set('Asia/Saigon'); 
	$date_current = '';
	$date_current = date("Y-m-d H:i:sa");
?>
