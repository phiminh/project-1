
<?php 
// include('../config.php'); 

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

if (isset($_POST ['xacnhan'])) {
  session_start();
  $id = $_SESSION['id'];
  $hotenkhachhang=$_POST['hotenkhachhang'];
  $matkhau = $_POST['matkhau'];
  $email   = $_POST['email'];
  $diachi  = $_POST['diachi'];
  $sodienthoai=$_POST['sodienthoai'];
  $sql="update dangky set hotenkhachhang='$hotenkhachhang',matkhau='$matkhau' ,email='$email' ,diachi='$diachi' ,sodienthoai ='$sodienthoai' where id ='$id'";

  $run_query =mysqli_query($db,$sql);
  
  if ($run_query){


   echo '<script> alert("Đổi thông tin thành công"); window.location="index.php?xem=xongthanhtoan&id=.$id";</script>';
  } else{
  	echo '<script> alert("Đổi thông tin không thành công"); window.location="index.php?xem=sua&id=.$id";</script>';
   // print_r($_POST);
		
     // echo '<script> window.location="index.php?xem=xacnhan&id=.$id;</script>';
  }
}
?>      
 


