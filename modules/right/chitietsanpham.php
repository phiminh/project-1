<?php
$sql_chitietsp="select * from chitietsp where id_sp=$_GET[id]";
$query_chitietsp=mysqli_query($db,$sql_chitietsp);
$dong_chitietsp=mysqli_fetch_array($query_chitietsp);
?>

<div class="row">

  <div class="col-12 wrap-title">
    <h1 class="text-center">Chi tiết sản phẩm </h1>
  </div>

  <div class="col-4 text-center img-thumbnail">
    <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh']?>"/>
  </div>

  <div class="col-8 wrap-product-info">
    <h2><?php echo $dong_chitietsp['tensp']?></h2>
    <hr>
    <div class="price">
      Giá sản phẩm: <?php echo number_format($dong_chitietsp['gia'], 0, ',', '.') .' VNĐ' ?>
    </div>
    <hr>
    <a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp']?>">
      <img src="imag/buy.png" width="270" height="93" />
    </a>
  </div>
  <div class="col-12 product-description">
    <div class=" title-description">
      <h4 class="">
        Thông số kỹ thuật
      </h4>
      <div class="text">
        <?php echo $dong_chitietsp['mota']?>
      </div>
    </div>
  </div>
</div>


<?php
$sql_spcungloai="select * from chitietsp where id_loaisp='$_GET[idloaisp]'and chitietsp.id_sp<>$_GET[id]";

$query_spcungloai=mysqli_query($db,$sql_spcungloai);
?>


<p style="text-align: center;color: white;background: #5A8EF8; padding: 10px">SẢN PHẨM CÙNG LOẠI </p>
<div class="sanphamall">
  <div class="row">
    <?php
    while ($dong_spcungloai=mysqli_fetch_array($query_spcungloai)){
      ?>

      <div class="col-3 text-center">
      <a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_spcungloai['id_loaisp'] ?>&id=<?php echo $dong_spcungloai['id_sp']?>">

       <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_spcungloai['hinhanh']?>" width="100" height="100"/>
       <p style="color: #333;font-weight: 700;margin-top: 15px;"><?php echo $dong_spcungloai['tensp']?></p>

       <p style="color: #F90606;font-weight: 700;font-family: georgia"> Giá: <?php echo number_format($dong_spcungloai['gia'], 0, ',', '.'); ?></p>
       <p style="text-align: center" class="btn btn-primary"> Chi tiết</p>
     </a>
   </div>
   <?php
 }
 ?>
</div>
