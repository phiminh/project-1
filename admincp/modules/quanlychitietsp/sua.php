<?php
$sql=" select * from chitietsp where id_sp='$_GET[id]'";
$run=mysqli_query($db,$sql);
$dong=mysqli_fetch_array($run); 
?>

<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" method="post" enctype="multipart/form-data">
 <table id="table">
  <tbody>
    <tr>
      <th colspan="2"><div align="center">Sửa chi tiết sp </div> </th>
    </tr>
    <tr>
      <td>Tên sp</td>
      <td><input type="text" name="tensp" value="<?php echo $dong['tensp']?>"></td>
    </tr>
    <tr>
      <td>Giá sp</td>
      <td><input type="text" name="gia"value="<?php echo $dong['gia']?>"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh"><img src="modules/quanlychitietsp/uploads/<?php echo $dong ['hinhanh']?>" width="60" height="60"/></td>
    </tr>
    <tr>
      <td>Mô tả sp</td>
      <td> <textarea name="motasp" cols="40" rows="15">
      <?php echo $dong['mota']?>
      </textarea></td>
    </tr>
	<?php
	  	$sql_loaisp="select *from loaisp";
	  
	  	$run_loaisp=mysqli_query($db,$sql_loaisp);
	  	
	  ?>
    <tr>
      <td>Loại sp</td>
      <td><select name="loaisp">
      <?php
		  while ($dong_loaisp=mysqli_fetch_array($run_loaisp)){
			  if ($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
	  ?>
      	<option selected="selected"value="<?php echo $dong_loaisp['id_loaisp']?>"><?php echo $dong_loaisp ['tenloaisp']?></option>
	<?php
		  }else{
    ?>
    <option value="<?php echo $dong_loaisp['id_loaisp']?>"><?php echo $dong_loaisp ['tenloaisp']?></option>
     <?php
			  }
		  }
		  ?>
      </select></td>
    </tr>
    
    <?php
	  	$sql_hieusp="select *from hieusp";
	  
	  	$run_hieusp=mysqli_query($db,$sql_hieusp);
	  	
	  ?>
    <tr>
     
      <td>Hiệu sp</td>
      <td><select name="hieusp">
      <?php
		  while ($dong_hieusp=mysqli_fetch_array($run_hieusp)){
			  if ($dong['id_hieusp']==$dong_hieusp['id_hieusp']){
	  ?>
      	<option selected="selected"value="<?php echo $dong_hieusp['id_hieusp']?>"><?php echo $dong_hieusp ['tenhieusp']?></option>
	<?php
		  }else{
    ?>
    <option value="<?php echo $dong_hieusp['id_hieusp']?>"><?php echo $dong_hieusp ['tenhieusp']?></option>
     <?php
			  }
		  }
		  ?>
      </select></td>
      
    </tr>
    <tr>
      <td>Thứ tự</td>
      <td><input type="text" name="thutu" value="<?php echo $dong ['thutu']?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
      	<button name="sua" value="sua">Sửa</button>
      </div></td>
    </tr>
  </tbody>
</table>
</form>