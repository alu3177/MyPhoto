<?
require_once("../cabecera.php");
?>
<ul class="nav">
<li><a href="<?ruta_raiz();?>/index.php">Home</a></li>
<?
session_start();
if ($_SESSION["k_username"] != null) {
    ?>
    <li><a href="<?ruta_raiz();?>/imagenes/imagenes.php">Imagenes</a></li>
    <li><a href="<?ruta_raiz();?>/mapa/mapa.php">Mapa</a></li>
    <li><a href="<?ruta_raiz();?>/propiedades/search.php">Distancia</a></li>
    <li><a href="<?ruta_raiz();?>/mapa/coordslist.php">Coordenadas</a></li>
    <?
}
?>
</ul>
<?
require_once ("../menuderecha.php");
require_once("coordenadas.php");
require_once("../bbdd/bbdd.php");
$usuario = $_SESSION["k_username"];

$lat1 = $_POST["lat1"];
$lon1 = $_POST["lon1"];
$lat2 = $_POST["lat2"];
$lon2 = $_POST["lon2"];
$midlat = (($lat1 + $lat2) / 2);
$midlon = (($lon1 + $lon2) / 2);
$km = 100;


$dist = proximidad($lon1, $lat1, $lon2, $lat2);
$near = cercania($lon1, $lat1, $lon2, $lat2, $km);

echo "La distancia entre los puntos indicados es de $dist kilometros";

if ($near){
    echo "  (Los puntos estan a menos de $km kilometros)";
}
else{
    echo "  (Los puntos estan a mas de $km kilometros)";
}

?>


<style type="text/css">
html { height: 100% }
body { height: 100%; margin: 50px; padding: 0px }
#map_canvas { height: 60% }
</style>
<script type="text/javascript"
src="https://maps.google.com/maps/api/js?v=3.exp&sensor=true">
</script>
<script type="text/javascript">
function initialize(){
    var lat1 = '<?php echo $lat1?>';
    var lon1 = '<?php echo $lon1?>';
    var lat2 = '<?php echo $lat2?>';
    var lon2 = '<?php echo $lon2?>';
    var midlat = '<?php echo $midlat?>';
    var midlon = '<?php echo $midlon?>';
    var latlng = new google.maps.LatLng(midlat, midlon);
    var latlng1 = new google.maps.LatLng(lat1, lon1);
    var latlng2 = new google.maps.LatLng(lat2, lon2);
    var myOptions = {
    zoom: 5,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.SATELLITE
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    
    var mark1 = new google.maps.Marker({
        position: new google.maps.LatLng(lat1, lon1),
        map: map
    });
    
    var mark2 = new google.maps.Marker({
        position: new google.maps.LatLng(lat2, lon2),
        map: map
    });
    
    google.maps.event.addListener(mark1, 'dragstart', function(){
        updatePolyline();
    });
    
    google.maps.event.addListener(mark1, 'drag', function(){
        updatePolyline();
    });
    
    google.maps.event.addListener(mark1, 'dragend', function(){
        updatePolyline();
    });

    google.maps.event.addListener(mark2, 'dragstart', function(){
        updatePolyline();
    });
    
    google.maps.event.addListener(mark2, 'drag', function(){
        updatePolyline();
    });
    
    google.maps.event.addListener(mark2, 'dragend', function(){
        updatePolyline();
    });
    
    pathcoords = [latlng1, latlng2];
    
    path = new google.maps.Polyline({
        path: pathcoords,
    });
    
    path.setMap(map);
}

window.onload=initialize;
</script>
<div class="hero-unit" id="map_canvas"></div>
<?
require_once("../pie.php");
?>