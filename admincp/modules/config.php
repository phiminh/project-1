<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webbanhangcongnghe';
	//$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass)or die('Không kết nối được');
	//mysql_select_database($csdl);
	$db=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl);
	 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>