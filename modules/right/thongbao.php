<h3>Đăng ký thành viên thành công</h3>
<?php

   $sql="select * from dangky where id_loaisp=$_GET[id]";
   $run=mysqli_query($db,$sql);
   $dong=mysqli_fetch_array($run);
?>

<table width="100%" border="1">
<tr>
    <td>ID</td>
    <td>Họ tên khách hàng</td>
    <td>Mật khẩu</td>
    <td>Email</td>
    <td>Địa chỉ</td>
    <td>Số điện thoai</td>
    
  </tr>
  <?php
  $i=0;
    while($dong=mysqli_fetch_array($run))
  {
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['hotenkhachhang']; ?></td>
    <td><?php echo $dong['matkhau']; ?></td>
    <td><?php echo $dong['email']; ?></td>
    <td><?php echo $dong['diachi']; ?></td>
    <td><?php echo $dong['sodienthoai']; ?></td>

    
  </tr>
  <?php
    $i++;
  }
  ?>
</table>


