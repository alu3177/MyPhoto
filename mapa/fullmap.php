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
    $rows = seleccionarfotos('rodri');
    //var_dump($rows);
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
    var latlng = new google.maps.LatLng(51.507222, -0.1275);
    var myOptions = {
        zoom: 11,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    var coordsx0 = '<?php echo $rows[0][0];?>';
    var coordsy0 = '<?php echo $rows[0][1];?>';
    var coordsx1 = '<?php echo $rows[1][0];?>';
    var coordsy1 = '<?php echo $rows[1][1];?>';
    var coordsx2 = '<?php echo $rows[2][0];?>';
    var coordsy2 = '<?php echo $rows[2][1];?>';
    var coordsx3 = '<?php echo $rows[3][0];?>';
    var coordsy3 = '<?php echo $rows[3][1];?>';
    var coordsx4 = '<?php echo $rows[4][0];?>';
    var coordsy4 = '<?php echo $rows[4][1];?>';
    var coordsx5 = '<?php echo $rows[5][0];?>';
    var coordsy5 = '<?php echo $rows[5][1];?>';
    var coordsx6 = '<?php echo $rows[6][0];?>';
    var coordsy6 = '<?php echo $rows[6][1];?>';
    var coordsx7 = '<?php echo $rows[7][0];?>';
    var coordsy7 = '<?php echo $rows[7][1];?>';
    var coordsx8 = '<?php echo $rows[8][0];?>';
    var coordsy8 = '<?php echo $rows[8][1];?>';
    var coordsx9 = '<?php echo $rows[9][0];?>';
    var coordsy9 = '<?php echo $rows[9][1];?>';
    
    var mark0 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx0, coordsy0),
        map: map
    });
    
    var mark1 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx1, coordsy1),
        map: map
    });
    
    var mark2 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx2, coordsy2),
        map: map
    });
    
    
    var mark3 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx3, coordsy3),
        map: map
    });
    
    var mark4 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx4, coordsy4),
        map: map
    });
    
    var mark5 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx5, coordsy5),
        map: map
    });
    
    var mark6 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx6, coordsy6),
        map: map
    });
    
    var mark7 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx7, coordsy7),
        map: map
    });
    
    var mark8 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx8, coordsy8),
        map: map
    });
    
    var mark9 = new google.maps.Marker({
        position: new google.maps.LatLng(coordsx9, coordsy9),
        map: map
    });
    
    var info0 = new google.maps.InfoWindow;
    var info1 = new google.maps.InfoWindow;
    var info2 = new google.maps.InfoWindow;
    var info3 = new google.maps.InfoWindow;
    var info4 = new google.maps.InfoWindow;
    var info5 = new google.maps.InfoWindow;
    var info6 = new google.maps.InfoWindow;
    var info7 = new google.maps.InfoWindow;
    var info8 = new google.maps.InfoWindow;
    var info9 = new google.maps.InfoWindow;

    var content0 = "Big Ben";
    var content1 = "Buckingham Palace";
    var content2 = "Camden Town";
    var content3 = "Canary Wharf";
    var content4 = "City";
    var content5 = "Piccadilly Circus";
    var content6 = "Tower Bridge";
    var content7 = "Tower of London";
    var content8 = "Trafalgar Square";
    var content9 = "Wembley Stadium";
    
    google.maps.event.addListener(mark0, 'click', function(){
        info0.setContent(content0);
        info0.open(map, mark0);
    });
    
    google.maps.event.addListener(mark1, 'click', function(){
        info1.setContent(content1);
        info1.open(map, mark1);
    });
    
    google.maps.event.addListener(mark2, 'click', function(){
        info2.setContent(content2);
        info2.open(map, mark2);
    });
    
    google.maps.event.addListener(mark3, 'click', function(){
        info3.setContent(content3);
        info3.open(map, mark3);
    });
    
    google.maps.event.addListener(mark4, 'click', function(){
        info4.setContent(content4);
        info4.open(map, mark4);
    });
    
    google.maps.event.addListener(mark5, 'click', function(){
        info5.setContent(content5);
        info5.open(map, mark5);
    });
    
    google.maps.event.addListener(mark6, 'click', function(){
        info6.setContent(content6);
        info6.open(map, mark6);
    });
    
    google.maps.event.addListener(mark7, 'click', function(){
        info7.setContent(content7);
        info7.open(map, mark7);
    });
    
    google.maps.event.addListener(mark8, 'click', function(){
        info8.setContent(content8);
        info8.open(map, mark8);
    });
    
    google.maps.event.addListener(mark9, 'click', function(){
        info9.setContent(content9);
        info9.open(map, mark9);
    });
}

  window.onload=initialize;
</script>
    <div class="hero-unit" id="map_canvas"></div>

<?
    require_once("../pie.php");
?>