<!DOCTYPE html>
<html>
<body>

<h1>Ubicacion de dispositivo android : NEXUS 6, Version Android 7.1.1</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(10.488393, -66.861790), zoom:15,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_RFpXw-zbbGWk9OeWxy9AEkdoLLnj1HA&callback=myMap"></script>

</body>
</html>