<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
 <table id="table">
  <tbody>
    <tr>
      <th colspan="2"><div align="center">Thêm chi tiết sp </div> </th>
    </tr>
    <tr>
      <td>Tên sp</td>
      <td><input type="text" name="tensp"></td>
    </tr>
    <tr>
      <td>Giá sp</td>
      <td><input type="text" name="gia"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
      <td>Mô tả sp</td>
      <td><textarea name="motasp" cols="40" rows="15"></textarea></td>
    </tr>
	<?php
	  	$sql="select *from loaisp";
	  
	  	$run=mysqli_query($db,$sql);
	  	
	  ?>
    <tr>
      <td>Loại sp</td>
      <td><select name="loaisp">
      <?php
		  while ($dong=mysqli_fetch_array($run)){
	  ?>
      	<option value="<?php echo $dong['id_loaisp']?>"><?php echo $dong ['tenloaisp']?></option>
	<?php
		  }
    ?>
      </select></td>
    </tr>
    
    <?php
	  	$sql="select *from hieusp";
	  
	  	$run=mysqli_query($db,$sql);
	  	
	  ?>
    
    <tr>
      <td>Hiệu sp</td>
      <td><select name="hieusp">
      <?php
		  while ($dong=mysqli_fetch_array($run)){
	  ?>
      	<option value="<?php echo $dong['id_hieusp']?>"><?php echo $dong ['tenhieusp']?></option>
	<?php
		  }
    ?>
      </select></td>
    </tr>
    <tr>
      <td>Thứ tự</td>
      <td><input type="text" name="thutu"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
      	<button name="them" value="Thêm">Thêm</button>
      </div></td>
    </tr>
  </tbody>
</table>
</form>