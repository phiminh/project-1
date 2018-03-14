<?php
	if (isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
	}else{
		$get_trang='';
	}
		if ($get_trang == '' || $get_trang == 1){
			$trang1 = 0;
		}else{
			$trang1=($get_trang*16)-16;
		}
	$sql_all="select * from chitietsp limit $trang1,16";
	$query_all=mysqli_query($db,$sql_all);
?>
     		
     		<p style="text-align: center;color: white;background: #5A8EF8; padding: 10px"> TẤT CẢ SẢN PHẨM</p>
     		<div class="sanphamall">
     			<ul>
     			<?php
					while ($dong_all=mysqli_fetch_array($query_all)){
				?>
     				
					<li><a href="index.php?xem=chitietsanpham&idhieusp=<?php echo $dong_all['id_hieusp']?>&id=<?php echo $dong_all['id_sp']?>">
     				    <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh']?>" width="100" height="100"/>
     					<p><?php echo $dong_all['tensp']?></p>
     					
     					<p style="color: #F90606"> Giá sp: <?php echo $dong_all['gia']?></p>
     					<p style="color: #F90606;text-align: center"> Chi tiết</p>
     				</li>
     				<?php
					}
					?>
     				
     				
     			<!--	<li><a href="#">
     				    <img src="imag/Iphone.png" width="100" height="100"/>
     					<p>Tên sp: Iphone 7 Plus 32GB</p>
     					
     					<p style="color: #F90606"> Giá sp: 16.000.000 đ</p>
     					<p style="color: #F90606;text-align: center"> Chi tiết</p>
     				</a></li>
     				
     				
     				<li><a href="#">
     				    <img src="imag/Iphone.png" width="100" height="100"/>
     					<p>Tên sp: Iphone 7 Plus 32GB</p>
     					
     					<p style="color: #F90606"> Giá sp: 16.000.000 đ</p>
     					<p style="color: #F90606;text-align: center"> Chi tiết</p>
     				</a></li>
     				
     				
     				<li><a href="#">
     				    <img src="imag/Iphone.png" width="100" height="100"/>
     					<p>Tên sp: Iphone 7 Plus 32GB</p>
     					
     					<p style="color: #F90606"> Giá sp: 16.000.000 đ</p>
     					<p style="color: #F90606;text-align: center"> Chi tiết</p>
     				</a></li>
     				
     				
     				<li><a href="#">
     				    <img src="imag/Iphone.png" width="100" height="100"/>
     					<p>Tên sp: Iphone 7 Plus 32GB</p>
     					
     					<p style="color: #F90606"> Giá sp: 16.000.000 đ</p>
     					<p style="color: #F90606;text-align: center"> Chi tiết</p>
     				</a></li>
     				
     				<li><a href="#">
     				    <img src="imag/Iphone.png" width="100" height="100"/>
     					<p>Tên sp: Iphone 7 Plus 32GB</p>
     					
     					<p style="color: #F90606"> Giá sp: 16.000.000 đ</p>
     					<p style="color: #F90606;text-align: center"> Chi tiết</p>
     				</a></li>
     				
     				<li><a href="#">
     				    <img src="imag/Iphone.png" width="100" height="100"/>
     					<p>Tên sp:Iphone 7 Plus 32GB</p>
     					
     					<p style="color: #F90606"> Giá sp: 16.000.000 đ</p>
     					<p style="color: #F90606;text-align: center"> Chi tiết</p>
     				</a></li>
     				
     				<li><a href="#">
     				    <img src="imag/Iphone.png" width="100" height="100"/>
     					<p>Tên sp:Iphone 7 Plus 32GB</p>
     					
     					<p style="color: #F90606"> Giá sp: 16.000.000 đ</p>
     					<p style="color: #F90606;text-align: center"> Chi tiết</p>
     				</a></li>
     				-->
     				
     			</ul>
     		</div>
	<p style="clear: both">
		
	</p>
	Trang:
	<?php
		$sql_trang="select * from chitietsp";
		$query_trang=mysqli_query($db,$sql_trang);
		$count=mysqli_num_rows($query_trang);
		$a=ceil($count/16);
		for ($b=1;$b<=$a;$b++){
			echo '<a href="?trang='.$b.'"style="text-decoration:none;">'.' '.$b.' '.'</a>';
		}
		
	?>
	<?php 
			echo '</br>';
			if ($get_trang >=1)
				echo ' Trang hiện tại :'.$get_trang
?>