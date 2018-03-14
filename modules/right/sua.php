<?php
  // hien file de sua
$sql=" select * from dangky where id =$_GET[id]";
$run=mysqli_query($db,$sql);
$dong=mysqli_fetch_array($run);




?>


<!-- <form action="modules/right/xacnhan.php?id=<?php echo $dong['id']?>" method="post" enctype="multipart/form-data"> -->
  <form action="index.php?xem=xacnhan&id=<?php echo $dong['id']?>" method="post" enctype="multipart/form-data">
 <table id="table">
  <tbody>
    <tr>
      <th colspan="2"><div align="center">SỬA THÔNG TIN KHÁCH HÀNG</div></th>
    </tr>
    <tr>
      <td>Tên khách hàng</td>
      <td> <input type="text" name="hotenkhachhang" value="<?php echo $dong['hotenkhachhang']?>"></td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td><input type="text" name="matkhau" value="<?php echo $dong['matkhau']?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email" value="<?php echo $dong['email']?>"></td>
    </tr>
    <tr>
      <td>Số điện thoại</td>
      <td><input type="text" name="sodienthoai" value="<?php echo $dong['sodienthoai']?>"></td>
    </tr>
    <tr>
      <td>Địa chỉ</td>
      <td><input type="diachi" name="diachi" value="<?php echo $dong['diachi']?>"></td>
    </tr>



     <tr>

       <td colspan="2"> <div align="center"><input type="submit" name="xacnhan" id="xacnhan" value="Xác nhận">&nbsp;</div></td> 
    </tr> 
  </tbody>
</table>
</form>
<style type="text/css">
  #table {
    font-family: geogia;
    border-collapse: collapse;
    width: 100%;
    font-size: 20px;
}

#table td, #table th {
    border: 1px solid #ddd;
    padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
   /* background-color: #5A8EF8;*/
   background-color: #333;

    
    color: white;
}
</style>
