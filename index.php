<?php
session_start();
error_reporting(0); 
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/css1.css"/> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Website bán hàng công nghệ </title>
</head>

<body>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<?php
				include('admincp/modules/config.php');
				include('modules/top.php');
				include('modules/header.php');
				include('modules/menu.php');
				include('modules/content.php');
				include('modules/footer.php');
				?>
			</div>
		</div>

	</div>

</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>