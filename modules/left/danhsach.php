<?php
	
	$sql_loaisp=" select * from loaisp";
	$query=mysqli_query($db,$sql_loaisp);
?>

   		
    		<p style="text-align: center;color: white;background: #5A8EF8; padding: 10px"> LOẠI SẢN PHẨM</p>
     		<div class=" danhsachsanpham">
     			<ul>
     			<?php
					while($dong_sp=mysqli_fetch_array($query)){
				?>
     				<li> <a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp']?>"><?php echo $dong_sp['tenloaisp']?> </a></li>
     					<?php
					}
						?>
     				<!--<li> <a href="#"> Tablet</a></li>
     				<li> <a href="#"> Smartphone</a></li>
     				<li> <a href="#"> Camera</a></li>     -->
     			</ul>
     		</div> <!--Kết thúc SẢN PHẨM-->
<?php
	
	$sql_hieusp=" select * from hieusp";
	$query_hieu=mysqli_query($db,$sql_hieusp);
?>
     		
     		
     		<p style="text-align: center;color: white;background: #5A8EF8; padding: 10px"> HIỆU SẢN PHẨM</p>
     		<div class=" danhsachsanpham">
     			<ul>
     			<?php
					while($dong_hieu=mysqli_fetch_array($query_hieu)){
				?>
     				<li> <a href="index.php?xem=chitiethieusanpham&id=<?php echo $dong_hieu['id_hieusp']?>"><?php echo $dong_hieu['tenhieusp']?> </a></li>
     					<?php
					}
						?>
     				<!--<li> <a href="#"> APPLE</a></li>   -->
     				<!--<li> <a href="#"> DELL</a></li>
     				<li> <a href="#"> SONNY </a></li>
     				<li> <a href="#"> SAMSUNG </a></li>     -->
     		
     				
     			</ul>
     		</div> <!--Kết thúc LOẠI SẢN PHẨM-->
     	