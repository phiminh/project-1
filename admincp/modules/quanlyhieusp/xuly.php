<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenhieusp=$_POST['tenhieusp'];
	
	if(isset($_POST['them'])){
		//them
		$sql="insert into hieusp (tenhieusp) values ('$tenhieusp')";
		$statement = $db->prepare($sql);
 		//Getting error in this line
		$statement->execute();
		//mysql_query($sql);
		header('location:../../index.php?quanly=quanlyhieusp&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update hieusp set tenhieusp='$tenhieusp' where id_hieusp='$id'";
		$statement = $db->prepare($sql);
 		//Getting error in this line
    	$statement->execute();
		header('location:../../index.php?quanly=quanlyhieusp&ac=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from hieusp where id_hieusp='$id'";
		$statement = $db->prepare($sql);
 		//Getting error in this line
    	$statement->execute();
		//mysqli_query($sql);
		header('location:../../index.php?quanly=quanlyhieusp&ac=them');
		
	}
?>






