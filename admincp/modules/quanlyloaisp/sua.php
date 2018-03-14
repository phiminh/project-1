
 
<?php
$sql=" select * from loaisp where id_loaisp=$_GET[id]";
$run=mysqli_query($db,$sql);
$dong=mysqli_fetch_array($run);
?>


<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp']?>" method="post" enctype="multipart/form-data">
 <table id="table">
  <tbody>
    <tr>
      <th colspan="2"><div align="center">Sửa loại sp</div></th>
    </tr>
    <tr>
      <td>Tên loại sp</td>
      <td> <input type="text" name="tenloaisp" value="<?php echo $dong['tenloaisp']?>"></td>
    </tr>
    <tr>
      <td>Thứ tự</td>
      <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
    </tr>
    <tr>

       <td colspan="2"> <div align="center"><input type="submit" name="sua" id="sua" value="Sửa">&nbsp;</div></td> 
    </tr>
  </tbody>
</table>
</form>
