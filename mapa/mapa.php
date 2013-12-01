<?php
    require_once ("../cabecera.php");
  ?>
            <ul class="nav">
              <li><a href="<?ruta_raiz();?>/index.php">Home</a></li>
              <?
                  session_start();
                  if ($_SESSION["k_username"] != null) {
              ?>
              <li><a href="<?ruta_raiz();?>/imagenes/imagenes.php">Imagenes</a></li>
              <li class="active"><a href="<?ruta_raiz();?>/mapa/mapa.php">Mapa</a></li>
              <li><a href="<?ruta_raiz();?>/propiedades/search.php">Distancia</a></li>
              <li><a href="<?ruta_raiz();?>/mapa/coordslist.php">Coordenadas</a></li>

              <?
                }
              ?>
            </ul>
<?  
    require_once ("../menuderecha.php");
    require_once ("../bbdd/bbdd.php");
    //require_once ("listado.php");
    $nombre = $_GET['nombre'];
    $row = seleccionarll($nombre);
    $longitud = $row[0];
    $latitud = $row[1];

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
    var lon = '<?php echo $longitud;?>'
    var lat = '<?php echo $latitud;?>'
    var nom = '<?php echo $nombre;?>'
    var latlng = new google.maps.LatLng(lat, lon);
    var zoomy = 3;
    if (lon != 0) {
        zoomy = 14;
    }
    else {
        latlng = new google.maps.LatLng(50.1725, 9.15);
    }
    var myOptions = {
      zoom: zoomy,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.SATELLITE
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
    if (lon != 0) {
      var marcador = new google.maps.Marker({
          position: latlng,
          map: map,
          title: nom
      });
    }
  }
  window.onload=initialize;
</script>
    <div class="hero-unit" id="map_canvas"></div>

<?
    require_once("../pie.php");
?>