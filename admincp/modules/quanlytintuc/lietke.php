<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<?php
  $sql="select * from tintuc order by idtintuc desc";
 // echo $sql; 
  $run=mysqli_query($db,$sql)  ;
  
?>
<table width="600" id="table">
  
    <tr>
      <th width="36">ID</th>
      <th width="144">Tên tin tức</th>
      <th width="103">Hình ảnh</th>
      <th width="168">Nội dung</th>
     
      <th colspan="2">Quản lý</th>
    </tr>
  <?php
  $i=0;
    while($dong=mysqli_fetch_array($run))
  {
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $dong ['tentintuc']; ?></td>
    <td><img src="modules/quanlytintuc/upload/<?php echo $dong ['hinhanh']?>"width="60" height="60"></td>
    <td><?php echo $dong['noidung'];?></td>
      
    <td width="58"><a href="index.php?quanly=quanlytintuc&ac=sua&id=<?php echo $dong['idtintuc']?>">Sửa</a></td>
    <td width="63"><a href="modules/quanlytintuc/xuly.php?id=<?php echo $dong ['idtintuc']?>">Xóa</a></td>
  </tr>
  <?php
    $i++;
  }
  ?>

</table>
