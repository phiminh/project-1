
<?php
 session_start();
  $id = $_SESSION['id'];
  $sql="select * from dangky where id = $id";
  $run=mysqli_query($db,$sql);
?>  

<div> 
  <?php
    $i=0;
    while($dong=mysqli_fetch_array($run))
  {
  ?>
    <!--Thông tin thành viên-->
    <h3>Thông tin thành viên</h3> </font>
    <p><h3><font color="#FF0000 ">Xin vui lòng xác nhận các thông tin sau để gửi đơn hàng </font></h3>
    <h4><span style="font-weight: bold;">Họ tên thành viên: <td><?php echo $dong['hotenkhachhang']; ?></td></span></h4>
    <h4><span style="font-weight: bold;">Mật khẩu: <td><?php echo $dong['matkhau']; ?></td></span></h4>
    <h4><span style="font-weight: bold;">Email: <td><?php echo $dong['email']; ?></td></span></h4>
    <h4><span style="font-weight: bold;">Số điện thoại: <td><?php echo $dong['sodienthoai']; ?></td></span></h4>
    <h4><span style="font-weight: bold;">Địa chỉ: <td><?php echo $dong['diachi']; ?></td></span></h4>
    
    <td> <a href="index.php?xem=sua&id=<?php echo $dong['id'] ?>"><td colspan="2"><div align="left"><input type="submit" name ="sua" class="btn btn-outline-success col-md-2 col-md-offset-2 bg-danger text-white" name="sua" value="Sửa thông tin" ></div></td></td></a>    
    <td> <a href="index.php?xem=thanhcong&id=<?php echo $dong['id'] ?>"><td colspan="2"><div align="left"><input type="submit" name ="xacnhan" class="btn btn-outline-success col-md-2 col-md-offset-2 bg-danger text-white" name="xacnhan" value="Gửi đơn hàng"></div></td></a> </p>  
   
  <?php
    $i++;
  }
  ?>
  </div>






















