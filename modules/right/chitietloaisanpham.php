<?php
$sql_chitiet="select * from chitietsp where id_loaisp='$_GET[id]'";
$query=mysqli_query($db,$sql_chitiet);
?>


<?php
$sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
$query_loaisp=mysqli_query($db,$sql_loaisp);
$dong_loaisp=mysqli_fetch_array($query_loaisp);
?>




<p style="text-align: center;color: white;background: #5A8EF8; padding: 10px"> <?php echo $dong_loaisp['tenloaisp']?></p>
<div class="sanphamall">
   <div class="row">
        <?php
        while ($dong_chitiet=mysqli_fetch_array($query)){
         ?>
         <div class="col-4 text-center">
          <a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_chitiet['id_loaisp']?>&id=<?php echo $dong_chitiet['id_sp']?>">
             <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']?>" width="100" height="100"/>
             <p style="color: #333;font-weight: 700;margin-top: 15px;"><?php echo $dong_chitiet['tensp']?></p>

             <p style="color: #F90606;font-weight: 700;font-family: georgia"> Giá: <?php echo number_format($dong_chitiet['gia'], 0, ',', '.'); ?></p>
             <p style="text-align: center" class="btn btn-primary"> Chi tiết</p>
        </a>
   </div>
   <?php
}
?>
</div>
</div>


