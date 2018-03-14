<?php
$sql_chitiet="select * from chitietsp where id_hieusp='$_GET[id]'";
$query=mysqli_query($db,$sql_chitiet);
?>


<?php
$sql_hieusp="select * from hieusp where id_hieusp='$_GET[id]'";
$query_hieusp=mysqli_query($db,$sql_hieusp);
$dong_hieusp=mysqli_fetch_array($query_hieusp);
?>


<p style="text-align: center;color: white;background: #5A8EF8; padding: 10px"> <?php echo $dong_hieusp['tenhieusp']?></p>
<div class="sanphamall">
   <div class="row">
        <?php
        while ($dong_chitiet=mysqli_fetch_array($query)) {
         ?>
         <div class="col-4 text-center">
              
         
          <a href="index.php?xem=chitietsanpham&idhieusp=<?php echo $dong_chitiet['id_hieusp']?>&id=<?php echo $dong_chitiet['id_sp']?>&idloaisp=<?php echo $dong_chitiet['id_loaisp']?>">
             <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']?>" width="100" height="100"/>
             <p style="color: #333;font-weight: 700;margin-top: 15px;"><?php echo $dong_chitiet['tensp']?></p>

             <p style="color: #F90606;font-weight: 700;font-family: georgia"> Giá sp: <?php echo $dong_chitiet['gia']?></p>
             <p style="text-align: center" class="btn btn-primary"> Chi tiết</p>
        </a>
   </div>
   <?php
}
?>
</div>
</div>