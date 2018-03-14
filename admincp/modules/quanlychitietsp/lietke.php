 
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>  
<?php
	//$sql="select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp  order by chitietsp.id_sp desc";
	//$run=mysqli_query($db,$sql);
	
	$sql="select * from chitietsp,loaisp,hieusp where chitietsp.id_hieusp=hieusp.id_hieusp && loaisp.id_loaisp=chitietsp.id_loaisp  order by chitietsp.id_sp desc";
	$run=mysqli_query($db,$sql);
	
?>
 <table width="587" id="table">
  <tbody>
    <tr>
      <th width="28">ID</th>
      <th width="72">Tên sp</th>
      <th width="72">Hình ảnh</th>
      <th width="67">Giá</th>
      <th width="81">Loại sp</th>
      <th width="72">Hiệu sp</th>
      <th width="42">Thứ tự</th>
      <th colspan="2">Quản lý</th>
    </tr>
    <?php
	  $i=0;
  	///while($dong=mysqli_fetch_array($run,MYSQLI_ASSOC))
	  while($dong=mysqli_fetch_array($run,MYSQLI_ASSOC))
	{
	  ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $dong['tensp']; ?></td>
      <td><img src="modules/quanlychitietsp/uploads/<?php echo $dong ['hinhanh']?>"width="60" height="60"></td>
      <td><?php echo $dong['gia'];?></td>
      <td><?php echo $dong['tenloaisp'];?></td>
      <td><?php echo $dong['tenhieusp'];?></td>
      
      <td><?php echo $dong['thutu'];?></td>
		<td width="58"><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp']?>">Sửa</a></td>
		<td width="55"><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong ['id_sp']?>">Xóa</a></td>
    </tr>
    <?php
	$i++;
	}
	?>
  </tbody>
</table>
