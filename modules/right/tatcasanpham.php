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
     		<div class="sanphamall col-12 text-center">
     			<div class="row">
                         <?php
                              while ($dong_all=mysqli_fetch_array($query_all)){
                         ?>
                              <div class="col-4 wrap-product">
                                   <a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_all['id_loaisp'] ?>&id=<?php echo $dong_all['id_sp']?>">
                              
                                  <div class="wrap-img img-thumbnail">
                                       <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh']?>" class=" img-fluid img-product rounded" />
                                  </div>

                                   <p class="product-name"><?php echo $dong_all['tensp']?></p>
                                   
                                   <p style="color: #bd0103;font-weight: 700;font-family: georgia"> Giá sản phẩm: <?php echo number_format($dong_all['gia'], 0, ',', '.'); ?></p>
                                   <p style="color: white;text-align: center;font-weight: bold;" class="btn btn-primary"> Chi tiết</p>
                              </div>
                         <?php
                              }
                         ?>          
                    </div>    
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

