<?php
session_start();
?>
<h1>Giỏ hàng của bạn</h1>

<h3 style="float: right">
<?php
// if (isset($_SESSION ['id'])){
// 	echo 'Xin chào : ' . $_SESSION ['dangnhap'];
// }
?>	
</h3>







<?php 




 /*
$sql="select * from chitietsp where id_sp ";

$query=mysqli_query($db,$sql);
*/
?>  
<table class="table table-bordered table-cart">
 <thead>
 	<tr>
      <td style="max-width: 5%">STT</td>
      <td style="max-width: 30%">Hình ảnh</td>
      <td style="max-width: 25%">Tên sản phẩm</td>
      <td style="max-width: 25%">Giá</td>
      <td style="max-width: 5%">Số lượng</td>
      <td style="max-width: 10%">Thành tiền</td>
      
    </tr>
 </thead>
  <tbody >
    <?php
     
	  $i=1;
	  //while ($dong=mysqli_fetch_array($query)){ 
	  ?>
	 <?php
	 


// them san pham
	if (isset($_GET['add'])&& !empty($_GET['add'])){
		$id=$_GET['add'];
		@$_SESSION['cart_'.$id]+=1;
		echo '<script> window.location="index.php?xem=giohang";</script>';
	}
// cong san pham
	if (isset($_GET['them'])){
	$_SESSION['cart_'.$_GET['them']]+=1;
	echo '<script> window.location="index.php?xem=giohang";</script>';
}
//tru san pham
	if (isset($_GET['tru'])){
	$_SESSION['cart_'.$_GET['tru']]--;
	echo '<script> window.location="index.php?xem=giohang";</script>';
}
// xoa san pham
	if (isset($_GET['xoa'])){
	$_SESSION['cart_'.$_GET['xoa']]=0;
	echo '<script> window.location="index.php?xem=giohang";</script>';
}

//hien thi san pham da them
	$thanhtien=0;
	foreach($_SESSION as $name => $value){
		if ($value >0){
			if (substr($name,0,5)=='cart_'){
				$id=substr($name,5,strlen($name));
				$sql="select * from chitietsp where id_sp='".$id."'";
				$query=mysqli_query($db,$sql);
				while ($dong=mysqli_fetch_array($query)){ 
					
				$tongtien=$dong['gia']*$value;	
					
	?>
   
    <tr>
      <td><?php echo $i;?></td>
      
      <td><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']?>" width="100" height="100"/></td>
      <td><?php echo $dong['tensp'].'<br/>' ?>  </td>
      <td style="font-weight: 700;font-family: georgia"><?php echo number_format($dong['gia'], 0, ',', '.').' VND'?></td>
      
      <td><?php echo $value.'<a href ="index.php?xem=giohang&them='.$id.'">[+]</a><a href ="index.php?xem=giohang&tru='.$id.'">[-]</a><a href="index.php?xem=giohang&xoa='.$id.'"> Xóa</a><br/> <br/><br/>'?> </td>
      <td style="font-weight: 700;font-family: georgia"><?php echo number_format($tongtien, 0, ',', '.').' VND'?></td>
      
      

	

    </tr>
    <?php
	$i++;
	}
	?>
  
   <?php
while ($dong=mysqli_fetch_array($query)){ 
	
	?>
		<?php 
$tongtien=$dong['gia']*$value;
					

				}
				
			}
			
}
	  }
	  ?>

	
    
  </tbody>
  <td colspan="2" style="text-align: center;font-weight: 700;padding: 15px";><?php $thanhtien=0;
	foreach($_SESSION as $name => $value){
		if ($value >0){
			if (substr($name,0,5)=='cart_'){
				$id=substr($name,5,strlen($name));
				$sql="select * from chitietsp where id_sp='".$id."'";
				$query=mysqli_query($db,$sql);
				while ($dong=mysqli_fetch_array($query)){
					$tongtien=$dong['gia']*$value;
					
				}

			}
			$thanhtien+=$tongtien;
		}
		
	}
		  echo "Tổng tiền";
	  
?> </td>
	<td colspan="4" style="color: #F90606;font-weight: 700;font-family: georgia; text-align: right;padding: 15px">
		<?php 
			if ($thanhtien==0){
	echo 'Giỏ hàng trống';
		}else{
			echo $thanhtien." ".'VND';

		}

	  
	?>

	</td>

	<?php
	//include("modules/right/form_cart.php");
	

?>	
</table>

<p style="font-weight: bold;"> <a href="index.php?xem=thanhtoan"><td colspan="2"><div align="center"><input type="submit" id="thanhtoanbtn" class="btn btn-outline-success my-2 my-sm-0 bg-danger text-white" name="thanhtoan" value="Thanh toán" placeholder="Thanh toán..."/></div></td></a> </p>

