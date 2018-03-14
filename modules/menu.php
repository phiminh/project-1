


<div class="col-12 menu  bg-primary ">
  <nav class="navbar navbar-toggleable-md navbar-light wrap-menu">
   <!-- <a class="navbar-brand" href="#">Navbar</a> -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="index.php">TRANG CHỦ<span class="sr-only">(current)</span></a>
       </li>


       <!-- <li class="nav-item">
         <a class="nav-link" href="index.php?xem=tintuc"> Tin tức</a>
       </li> -->
       
       <li class="nav-item">
         <a class="nav-link" href="index.php?xem=lienhe"> LIÊN HỆ </a>
       </li>
       

      <li class="nav-item">
         <a class="nav-link" href="index.php?xem=giohang"> GIỎ HÀNG</a>
       </li>
       <!-- <li class="nav-item">
         <a class="nav-link" href="index.php?xem=chitietloaisanpham&id=1"> Sản phẩm</a>
       </li> -->
       <!-- <li class="nav-item">
         <a class="nav-link" href="index.php?xem=chitietloaisanpham&id=1"> Hướng dẫn</a>
       </li> -->
   
       <li class="nav-item">
         <a class="nav-link" href="index.php?xem=dangky">ĐĂNG KÝ</a>
       </li>

       


       <li class="nav-item">
         <a class="nav-link" href="index.php?xem=thanhtoan"> ĐĂNG NHẬP</a>
       </li>
      <li class="nav-item">
         <a href="index.php?xem=xongthanhtoan" style="float: right">
<?php
// if (isset($_SESSION ['id'])){
//    echo 'Xin chào : ' . $_SESSION ['id'];

// }
?>  
</a>
       </li>
       




     </ul>
     <form class="form-inline my-2 my-lg-0" action="index.php" method="post" enctype="multipart/form-data">


      <!-- <div class="timkiemform"> -->
        <input type="text" id="timkiemform" class="form-control mr-sm-2" name="timkiemtext" size="25"/>
        <input type="submit" id="timkiembtn" class="btn btn-outline-success my-2 my-sm-0 bg-danger text-white" name="timkiem" value="Tìm kiếm" placeholder="Tìm kiếm..."/>
      </form>
    </div>
  </nav>

</div>

