<?php
	if (isset($_GET['ac'])&&$_GET['ac']=='logout'){
		unset($_SESSION['dangnhap']);// bỏ duy nhất 1 session được chỉ định.
		header('location:login.php');
	}
?>





	 <div class="menu">
		<ul>
			<!-- <li><a href="index.php">Trang chủ</a></li> -->
			<li><a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sp</a></li>
			<li><a href="index.php?quanly=quanlyhieusp&ac=them">Quản lý hiệu sp</a></li>
			<li><a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết sp</a></li>
			<li><a href="index.php?quanly=quanlytintuc&ac=them">Quản lý tin tức</a></li>
			
			
			<li><a href="index.php?ac=logout">Đăng xuất</a></li>
		</ul>
	</div> 