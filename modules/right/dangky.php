<?php
if (isset($_POST ['dangky'])) {
 
  $hotenkhachhang=$_POST['hotenkhachhang'];
  $matkhau = $_POST['matkhau'];
  $email   = $_POST['email'];
  $diachi  = $_POST['diachi'];
  $sodienthoai=$_POST['sodienthoai'];
  $sql_dangky= "insert into dangky (hotenkhachhang,matkhau,email,diachi,sodienthoai) 
  value ('$hotenkhachhang','$matkhau', '$email', '$diachi', '$sodienthoai')"; 

  $run_query =mysqli_query($db,$sql_dangky);
  
  if ($run_query){
 
    echo '<script> window.location="index.php?xem=thongbao";</script>';
  } else{
   
    echo '<script> window.location="index.php?xem=dangky";</script>';
  }
}
?>

<html>
<header>
<script language="JavaScript">
    function checkinput(){
        hotenkhachhang=document.myform.hotenkhachhang;
        matkhau=document.myform.matkhau;
      //  password1=document.myform.password1;
      //  hoten=document.myform.hoten;
        diachi=document.myform.diachi;
        email=document.myform.email;
        sodienthoai=document.myform.sodienthoai;
        reg1=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
        testmail=reg1.test(email.value);
        if(hotenkhachhang.value==""){
            alert("Vui lòng nhập đầy đủ Họ tên");
            hotenkhachhang.focus();
            return false;
        }
        if(matkhau.value==""){
            alert("Chưa nhập mật khẩu");
            matkhau.focus();
            return false;
        }
        // if(password1.value==""||password1.value!==password.value){
        //     alert("Mật khẩu lần 2 chưa khớp");
        //     password1.focus();
        //     return false;
        // }
        // if(hoten.value==""){
        //     alert("Hãy nhập vào họ tên của bạn");
        //     hoten.focus();
        //     return false;
        // }
        if(diachi.value==""){
            alert("Chưa nhập địa chỉ");
            diachi.focus();
            return false;
        }
        if(!testmail){
            alert("Địa chỉ email không hợp lệ");
            email.focus();
            return false;
        }
        if(isNaN(sodienthoai.value)){
            alert("Số điện thoại chưa chính xác");
            sodienthoai.focus();
            return false;
        }
        else alert('OK, đã nhập đúng dữ liệu');
        return true;
    }
</script>
</head>

<body>
<form name="myform" method="post" action="index.php?xem=dangky" onsubmit="return checkinput();">
  <h2>Đăng ký thành viên</h2> </font>
  <p><strong><font color="#FF0000">Xin vui lòng nhập đầy đủ các thông tin </font></strong>
        <!-- <table align="center">
          <p><strong><font color="#FF0000">Đăng ký thành viên</font></strong>
             </p>
          <tr>
            <td>Xin vui lòng nhập đúng<br />
              các thông tin cá nhân</td>
          </tr>
          <p></p> -->
          <div class="form-group row">
    <label class="col-sm-2 col-form-label">Họ tên khách hàng</label>
        <div class="col-sm-6">
            <input type="text" name ="hotenkhachhang" placeholder="Họ và tên" class="form-control">
            
        </div>
    </div>

    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Mật khẩu</label>
    <div class="col-sm-6">
      <input type="password" name ="matkhau" placeholder="Mật khẩu" class="form-control">
    </div>
    </div>
    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="text"  name ="email" placeholder="Content@gmail.com" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Số điện thoại</label>
    <div class="col-sm-6">
      <input type="text"  name ="sodienthoai" placeholder="Số điện thoại" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Địa chỉ</label>
    <div class="col-sm-6">
      <input type="text"  name ="diachi" placeholder="Địa chỉ" class="form-control">
    </div>
  </div>


  <p style="font-weight: bold;"> <a href="index.php?xem=dangky"><td colspan="2"><div align="left"><input type="submit" name ="dangky" class="btn btn-outline-success col-md-1 col-md-offset-2 bg-danger text-white" name="dangky" value="Đăng ký" placeholder="Đăng ký..."/></div></td></a> </p>  
      </form>
</body>
</html> 


<!--
  <html>
<head>
<title>Check Form Register</title>
<META name="Author" content="Scorpion">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="JavaScript">
    function checkinput(){
        username=document.myform.username;
        password=document.myform.password;
        password1=document.myform.password1;
        hoten=document.myform.hoten;
        diachi=document.myform.diachi;
        email=document.myform.email;
        dienthoai=document.myform.dienthoai;
        reg1=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
        testmail=reg1.test(email.value);
        if(username.value==""){
            alert("Hãy chọn tên đăng nhập");
            username.focus();
            return false;
        }
        if(password.value==""){
            alert("Chưa nhập mật khẩu");
            password.focus();
            return false;
        }
        if(password1.value==""||password1.value!==password.value){
            alert("Mật khẩu lần 2 chưa khớp");
            password1.focus();
            return false;
        }
        if(hoten.value==""){
            alert("Hãy nhập vào họ tên của bạn");
            hoten.focus();
            return false;
        }
        if(diachi.value==""){
            alert("Chưa nhập địa chỉ");
            diachi.focus();
            return false;
        }
        if(!testmail){
            alert("Địa chỉ email không hợp lệ");
            email.focus();
            return false;
        }
        if(isNaN(dienthoai.value)){
            alert("Số điện thoại chưa chính xác");
            dienthoai.focus();
            return false;
        }
        else alert('OK, đã nhập đúng dữ liệu');
        return true;
    }
</script>
</head>

<body>
<form name="myform" method="post" action="http://sechiakinhnghiem.blogspot.com" onsubmit="return checkinput();">
        <table align="center">
          <p><strong><font color="#FF0000">Đăng ký thành viên</font></strong>
             </p>
          <tr>
            <td>Xin vui lòng nhập đúng<br />
              các thông tin cá nhân</td>
          </tr>
          <p></p>
          <tr>
            <td><b>Tên đăng nhập:</b></td>
            <td><input type="text" name="username" /></td>
          </tr>
          <tr>
            <td><b>Mật khẩu:</b></td>
            <td><input type="password" name="password" /></td>
          </tr>
          <tr>
            <td><b>Nhập lại Mật khẩu:</b></td>
            <td><input type="password" name="password1" /></td>
          </tr>
          <tr>
            <td><b>Họ tên:</b></td>
            <td><input type="text" size="30" name="hoten" /></td>
          </tr>
          <tr>
            <td><b>Địa chỉ:</b></td>
            <td><input type="text" size="30" name="diachi" /></td>
          </tr>
          <tr>
            <td><b>Email:</b></td>
            <td><input type="text" size="30" name="email" /></td>
          </tr>
          <tr>
            <td><b>Số điện thoại:</b></td>
            <td><input type="text" size="20" name="dienthoai" /></td>
          </tr>
          <p align="center"> </p>
        </table>
        <p align="center">
            <input type="submit" value="Đăng ký" style="color:yellow;background:green">
            <input type="reset" value="Làm lại" style="color:yellow;background:green">
        </p>
      </form>
</body>
</html>


-->

