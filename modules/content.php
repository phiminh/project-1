<div class="content">
	<div class="row">
		<div class="col-3">
			<div class="left">
				<?php
				include('modules/left/danhsach.php');
				?>
			</div>
		</div>
		<div class="col-9">
			<div class="right">
				<?php
				if (isset($_GET['xem']))
				{
					$tam=$_GET['xem'];

				}
				else{
					$tam='';
				}
				if ($tam=='chitietloaisanpham')
				{
					include('modules/right/chitietloaisanpham.php');
				}elseif ($tam=='chitiethieusanpham')
				{
					include('modules/right/chitiethieusanpham.php');
				}elseif ($tam=='chitietsanpham')
				{
					include('modules/right/chitietsanpham.php');
				}elseif (isset($_POST['timkiem']))
				{
					include('modules/right/search.php');
				}elseif ($tam=='giohang')
				{
					include('modules/right/cart.php');	
				}elseif ($tam=='dangky')
				{
					include('modules/right/dangky.php');	
				}elseif ($tam=='thanhtoan')
				{
					include('modules/right/thanhtoan.php');	
				}elseif ($tam=='thongbao')
				{
					include('modules/right/thongbao.php');	
				}elseif ($tam=='thoat')
				{
					include('modules/right/thoat.php');	
				}elseif ($tam=='xongthanhtoan')
				  {
				 	include('modules/right/xongthanhtoan.php');	
				 }elseif ($tam=='sua')
				  {
				 	include('modules/right/sua.php');	
				 }elseif ($tam=='xacnhan')
				  {
				 	include('modules/right/xacnhan.php');	
				 }elseif ($tam=='thanhcong')
				{
					include('modules/right/thanhcong.php');
				}elseif ($tam=='tintuc')
				{
					include('modules/right/tintuc.php');
				}elseif ($tam=='lienhe')
				{
					include('modules/right/lienhe.php');
				}elseif ($tam=='tatcatintuc')
				{
					include('modules/right/tatcatintuc.php');		
				}else
				
				include('modules/right/tatcasanpham.php');

				?>
				
			</div>
		</div>
	</div>
</div>