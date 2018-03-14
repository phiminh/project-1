

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--    Chuỗi khai báo lấy tham số của google maps   -->
<!--<script type="text/javascript" 
src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script> -->
<script type="text/javascript">
var map;
function initialize() {
      var myLatlng = new google.maps.LatLng(10.048584, 105.766016);
      var myOptions = {
    zoom: 18,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
map = new google.maps.Map(document.getElementById("div_id"), myOptions); 
  // Biến text chứa nội dung sẽ được hiển thị
var text;
text= "<b style='color:#00F' " + 
         "style='text-align:center'>Nhà của mình nè!<br />" + 
//     "<img src='citihouse-logo.jpg'  /></b>";
   var infowindow = new google.maps.InfoWindow(
    { content: text,
        size: new google.maps.Size(100,50),
        position: myLatlng
    });
       infowindow.open(map);    
    var marker = new google.maps.Marker({
      position: myLatlng, 
      map: map,
      title:"Trường ĐH GTVT TP.HCM!"
  });
}
</script>
</head>
<body onLoad="initialize()">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.62515479437!2d105.76427471431238!3d10.047758174968154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0880eefad7827%3A0x745181495055dc5!2zMzUgVsO1IFRyxrDhu51uZyBUb-G6o24sIEFuIEjDsmEsIE5pbmggS2nhu4F1LCBD4bqnbiBUaMahLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1513750108329" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div id="div_id" style="height:600px; width:700px"></div>
</body>
</html> 
