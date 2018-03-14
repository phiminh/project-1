


<?php
if (isset($_POST['timkiem'])){
   $timkiem=$_POST['timkiemtext'];
   $sql_timkiem="select * from chitietsp where tensp LIKE '%$timkiem%' or gia LIKE '%$timkiem%'";// like tương tự tương đồng
   $query_timkiem=mysqli_query($db,$sql_timkiem);
}
?>   		
<p style="text-align: center;color: red;background: #5A8EF8; padding: 10px">Sản phẩm tìm thấy </p>
<div class="sanphamall">
   <?php
   if ($count=mysqli_num_rows($query_timkiem)==0){?> <p>Không tìm thấy sản phẩm nào</p>
   <?php
}else{
  ?>

  <div class="row">
       <?php
       while ($dong_timkiem=mysqli_fetch_array($query_timkiem)){
           ?>
           <div class="col-4 text-center">

                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_timkiem['id_sp']?>">
                 <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_timkiem['hinhanh']?>" width="100" height="100"/>
                 <p style="color: #333;font-weight: 700;margin-top: 15px;"><?php echo $dong_timkiem['tensp']?></p>
                 <p style="color: #F90606;font-weight: 700;font-family: georgia"> Giá: <?php echo number_format($dong_timkiem['gia'], 0, ',', '.'); ?></p>

                 <p style="text-align: center" class="btn btn-primary"> Chi tiết</p>
            </a>
       </div>

       <?php
  }
}
?>
</div>
</div>


