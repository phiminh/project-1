<div class="left">
	<?php
	if (isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else
	{
		$tam='';
	}if ($tam=='them'){
		include('modules/quanlytintuc/them.php');
	}if ($tam=='sua'){
		include('modules/quanlytintuc/sua.php');
	}
	?>
</div>
<div class="right">
	<?php
	include('modules/quanlytintuc/lietke.php');
	?>
</div>