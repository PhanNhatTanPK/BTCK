<?php
	$tenmaychu = 'localhost';
	$tentaikhoan = 'root';
	$pass = '';
	$csdl = 'myclass';
	$conn = mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysqli_select_db($conn, $csdl) or die('Chưa có CSDL');
	mysqli_query($conn, "SET NAMES 'utf8'");
?>