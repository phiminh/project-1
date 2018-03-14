
<?php
	$sql="select * from loaisp order by id_loaisp desc";
	$run=mysqli_query($db,$sql);
?>
<table width="800" id="table">
<tr>
    <th width="120">ID</th>
    <th width="360">Tên sp</th>
    <th width="103">Thứ tự</th>
    <th colspan="2">Quản lý</th>
  </tr>
  <?php
  $i=0;
  	while($dong=mysqli_fetch_array($run))
	{
	?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenloaisp']; ?></td>
    <td><?php echo $dong['thutu']; ?></td>
    <td width="103"><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>">Sửa</a></td>
    <td width="90"><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>">Xóa</a></td>
  </tr>
  <?php
  	$i++;
	}
	?>
</table>








