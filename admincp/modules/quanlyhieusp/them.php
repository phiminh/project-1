<!-- <form action="modules/quanlyhieusp/xuly.php" method="post" enctype="multipart/form-data">
 <table width="100%" border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Thêm hiệu sp</div></td>
    </tr>
    <tr>
      <td>Tên hiệu sp</td>
      <td> <input type="text" name="tenhieusp"></td>
    </tr>
    
    <tr>
      <td colspan="2"> <div align="center"><input type="submit" name="them" id="them" value="Thêm">&nbsp;</div></td>
    </tr>
  </tbody>
</table>
</form>
 -->

<div class="background-wrap">
  <div class="background"></div>
</div>

<form action="modules/quanlyhieusp/xuly.php" method="post" enctype="multipart/form-data">
  <h1 id="litheader">THÊM HIỆU SP</h1>
  <div class="inset">
    <p>
      <input type="text" name="tenhieusp" id="tenhieusp" placeholder="Tên hiệu sp">
    </p>
    
    <!-- <input class="loginLoginValue" type="hidden" name="service" value="login" /> -->
  </div>
  <p class="p-container">
    <input type="submit" name="them" id="them" value="THÊM">
  </p>
</form>



<style type="text/css">
  
html,body {
  height: 100%;
  margin: 0;
  padding: 0;
}

.left {
  background: #1b1b1b;
  color: #FFF;
  font-family: "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-size: 12px;
  line-height: 1;
  
}

.background-wrap {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  overflow: hidden;
}

.background {
 
  background-size: cover;
  filter: blur(10px);
  height: 105%;
  position: relative;
  width: 105%;
  right: -2.5%;
  left: -2.5%;
  top: -2.5%;
  bottom: -2.5%;
}


form {
  background: #111;
  border: 1px solid #191919;
  border-radius: .4em;
  bottom: 0;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
  height: 350px;
  left: 0;
 /* margin: auto;*/
  overflow: hidden;
  /*position: absolute;*/
  right: 0;
  top: 0;
  width: 300px;
}


.inset {
  border-top: 1px solid #19191a;
  padding: 20px;
}

form h1 {
  font-family: 'Audiowide';
  border-bottom: 1px solid #000;
  font-size: 18px;
  padding: 15px 0;
  position: relative;
  text-align: center;
  text-shadow: 0 1px 0 #000;
}

form h1 {
  color: #FFbb00;
  font-family: Audiowide;
  /*font-weight: normal;*/
}

form h1.poweron {
  color: #ffffff;
  transition: all 0.5s;
  animation: flicker 1s ease-in-out 1 alternate, neon 1.5s ease-in-out infinite alternate;
  animation-delay: 0s, 1s;
}


input[type=text], input[type=password] {
  /*background: linear-gradient(#1f2124,#27292c);*/
  border: 1px solid #222;
  border-radius: .3em;
  box-shadow: 0 1px 0 rgba(255,255,255,0.1);
  color: #FFF;
  font-size: 13px;
  margin-bottom: 20px;
  padding: 8px 5px;
  width: 100%;
}

input[type=text]:disabled, input[type=password]:disabled {
  color: #999;
}


.p-container {
  padding: 0 20px 20px;
}



.p-container span {
  color: #0d93ff;
  display: block;
  float: left;
  padding-top: 8px;
}

input[type=submit] {
  background: #fb0;
  border: 1px solid rgba(0,0,0,0.4);
  border-radius: .3em;
  box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), inset 0 10px 10px rgba(255,255,255,0.1);
  color: #873C00;
  cursor: pointer;
  font-size: 13px;
  font-weight: bold;
  height: 40px;
  padding: 5px 20px;
  width: 100%;
}

.denied {
  color: white !important;
  text-shadow: 0 0 1px black;
  background: #EE0000 !important;
}

input[type=submit]:hover, input[type=submit]:focus {
  box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), inset 0 -10px 10px rgba(255,255,255,0.1);
}

input[type=text]:hover:not([disabled]), 
input[type=text]:focus, 
input[type=password]:hover:not([disabled]), 
input[type=password]:focus, 
label:hover ~ input[type=text], 
label:hover ~ input[type=password] {
  background: #27292c;
}



input[type="checkbox"]:checked ~ .checkbox {
  transition: all 0.3s;
  border-bottom: 2px solid #ffcc00;
  border-right: 2px solid #ffcc00;
}

</style>


