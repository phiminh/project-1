<?php
	include('../config.php');
	
	$tensp=$_POST['tensp'];
	$mota=($_POST['motasp']);
	$gia=$_POST['gia'];
	$loaisp=$_POST['loaisp'];
	$hieusp=$_POST['hieusp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		//them
		$sql="insert into chitietsp (tensp,thutu,mota,gia,id_loaisp,id_hieusp,hinhanh) values ('$tensp','$thutu','$mota','$gia','$loaisp','$hieusp','$hinhanh')";
		$statement = $db->prepare($sql);
 		//Getting error in this line
		$statement->execute();
		//mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&loai=them');

	}elseif(isset($_POST['sua'])){
		//sua
		$id=$_GET['id'];
		if ($hinhanh!=''){
		$sql="update chitietsp set tensp='$tensp',thutu='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp',id_hieusp='$hieusp',hinhanh='$hinhanh' where id_sp='$id'";
		}else{
			$sql="update chitietsp set tensp='$tensp',thutu='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp',id_hieusp='$hieusp' where id_sp='$id'";
		}
		$statement = $db->prepare($sql);
 		//Getting error in this line
    	$statement->execute();
		header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
	}else{
		//xoa
		$id=$_GET['id'];
		$sql="delete from chitietsp where id_sp='$id'";
		$statement = $db->prepare($sql);
 		//Getting error in this line
    	$statement->execute();
		//mysqli_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
		
	}
?>






