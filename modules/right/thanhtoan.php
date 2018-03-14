

 <?php
 session_start(); // duy trì đăng nhập
 if (isset($_POST['dangnhap'])) {
	$tentaikhoan=$_POST['tentaikhoan'];
	$matkhau=$_POST['matkhau'];
 	$sql_dangnhap="select * from dangky where hotenkhachhang='$tentaikhoan' and matkhau ='$matkhau'limit 1 "; // chọn tất cả đăng ký điều kiện....
	$run_dangnhap=mysqli_query($db,$sql_dangnhap);
	$count_dangnhap=mysqli_num_rows($run_dangnhap);  //đếm đăng nhập
 	if ($count_dangnhap == 0) {  //đăng nhập sai
 		echo '<script> window.location="index.php?xem=thanhtoan"; alert(" Tên tài khoản hoặc mật khẩu không tồn tại")</script>';
       
 	}else{
        // lay id cua khach hang dang nhap
        $row = ( mysqli_fetch_array( $run_dangnhap, MYSQLI_NUM ) );
 		$_SESSION['id']=  $row[0] ;
 		
 		//header('location:index.php?xem=giohang');
 		echo '<script> window.location="index.php?xem=xongthanhtoan";</script>';
        // echo '<script> window.location="index.php?xem=giohang";</script>';
 		# code...
 	}
 	}
	# code...

?>



<html>
<header>
<script language="JavaScript">
   function checkinput(){
        tentaikhoan=document.myform.tentaikhoan;
        matkhau=document.myform.matkhau;
        
        if(tentaikhoan.value==""){
            alert("Vui lòng nhập đầy đủ Họ tên");
            tentaikhoan.focus();
            return false;
        }
        if(matkhau.value==""){
            alert("Chưa nhập mật khẩu");
            matkhau.focus();
            return false;
        }
       
        }
        
        else alert('OK, đã nhập đúng dữ liệu');
        return true;
    }
</script>
</head>

<body>

<form name="myform" action="" method="post" enctype="multipart/form-data" onsubmit="return checkinput();">
	<h2>Đăng nhập thành viên để thanh toán giỏ hàng</h2> </font>
  <p><strong><font color="#FF0000">Xin vui lòng nhập đúng tài khoản thành viên </font></strong>
	      <div class="form-group row">
    <label class="col-sm-2 col-form-label">Tên tài khoản </label>
        <div class="col-sm-6">
            <input type="text" name ="tentaikhoan" placeholder="Họ và tên " class="form-control">
            
        </div>
    </div>

    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Mật khẩu</label>
    <div class="col-sm-6">
      <input type="password" name ="matkhau" placeholder="Mật khẩu" class="form-control">
    </div>
    </div>
    <p style="font-weight: bold;"> <a href="index.php?xem=thanhtoan"><td colspan="2"><div align="left"><input type="submit" name ="dangnhap" class="btn btn-outline-success col-md-1 col-md-offset-2 bg-danger text-white" name="dangnhap" value="Đăng nhập" placeholder="Đăng nhập..."/></div></td></a> </p>  

</form>
</body>
</html> 

