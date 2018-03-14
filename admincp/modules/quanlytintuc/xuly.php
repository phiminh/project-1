<?php
  include('../config.php');
  
  $tentintuc=$_POST['tentintuc'];
  $noidung=($_POST['noidung']);
  
  $hinhanh=$_FILES['hinhanh']['name'];
  $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
  move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
  
  if(isset($_POST['them'])){
    //them
    $sql="insert into tintuc (tentintuc, noidung, hinhanh) values ('$tentintuc','$noidung','$hinhanh')";
    $statement = $db->prepare($sql);
    //Getting error in this line
    $statement->execute();
    //mysql_query($sql);
    header('location:../../index.php?quanly=quanlytintuc&loai=them');

  }elseif(isset($_POST['sua'])){
    //sua
    $id=$_GET['id'];
    if ($hinhanh!=''){
    $sql="update tintuc set tentintuc='$tentintuc', noidung='$noidung',hinhanh='$hinhanh' where idtintuc='$id'";
    }else{
      $sql="update tintuc set tentintuc='$tentintuc',noidung='$noidung' where idtintuc='$id'";
    }
    $statement = $db->prepare($sql);
    //Getting error in this line
      $statement->execute();
    header('location:../../index.php?quanly=quanlytintuc&ac=sua&id='.$id);
  }else{
    //xoa
    $id=$_GET['id'];
    $sql="delete from tintuc where idtintuc='$id'";
    $statement = $db->prepare($sql);
    //Getting error in this line
      $statement->execute();
    //mysqli_query($sql);
    header('location:../../index.php?quanly=quanlytintuc&ac=them');
    
  }
?>






