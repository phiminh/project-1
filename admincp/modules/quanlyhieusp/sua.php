

<?php
$sql=" select * from hieusp where id_hieusp=$_GET[id]";
$run=mysqli_query($db,$sql);
$dong=mysqli_fetch_array($run);
?>


<form action="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['id_hieusp']?>" method="post" enctype="multipart/form-data">
 <table id="table">
  <tbody>
    <tr>
      <th colspan="2"><div align="center">Sửa hiệu sp</div></th>
    </tr>
    <tr>
      <td>Tên hiệu sp</td>
      <td> <input type="text" name="tenhieusp" value="<?php echo $dong['tenhieusp']?>"></td>
    </tr>
    <tr>
      
      
    </tr>
    <tr>
      <td colspan="2"> <div align="center"><input type="submit" name="sua" id="sua" value="Sửa">&nbsp;</div></td>
    </tr>
  </tbody>
</table>
</form>
