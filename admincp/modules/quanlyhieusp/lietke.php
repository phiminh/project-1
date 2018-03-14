
<?php
	$sql="select * from hieusp order by id_hieusp desc";
	$run=mysqli_query($db,$sql);
?>
<table width="800" id="table">
<tr>
    <th width="200">ID</th>
    <th width="400">Tên hiệu sp</th>
    
    <th colspan="2">Quản lý</th>
  </tr>
  <?php
  $i=0;
  	while($dong=mysqli_fetch_array($run))
	{
	?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenhieusp']; ?></td>
    
    <td width="89"><a href="index.php?quanly=quanlyhieusp&ac=sua&id=<?php echo $dong['id_hieusp'] ?>">Sửa</a></td>
    <td width="91"><a href="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['id_hieusp'] ?>">Xóa</a></td>
  </tr>
  <?php
  	$i++;
	}
	?>
</table>
