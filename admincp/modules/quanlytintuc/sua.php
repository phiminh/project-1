<?php
$sql=" select * from tintuc where idtintuc ='$_GET[id]'";
$run=mysqli_query($db,$sql);
$dong=mysqli_fetch_array($run); 
?>

<form action="modules/quanlytintuc/xuly.php?id=<?php echo $dong['idtintuc']?>" method="post" enctype="multipart/form-data">
 <table width="100%" border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Sửa tin tức </div> </td>
    </tr>
    <tr>
      <td>Tên tin tức </td>
      <td><input type="text" name="tentintuc" value="<?php echo $dong['tentintuc']?>"></td>
    </tr>

    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh"><img src="modules/quanlytintuc/upload/<?php echo $dong ['hinhanh']?>" width="60" height="60"/></td>
    </tr>
    <tr>
      <td>Nội dung</td>
      <td> <textarea name="noidung" cols="40" rows="15">
      <?php echo $dong['noidung']?>
      </textarea></td>
    </tr>
  
    <tr>
      <td colspan="2"><div align="center">
        <button name="sua" value="sua">Sửa</button>
      </div></td>
    </tr>
  </tbody>
</table>
</form>