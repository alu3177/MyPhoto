<?
    require_once("../cabecera.php");
?>
            <ul class="nav">
              <li><a href="<?ruta_raiz();?>/index.php">Home</a></li>
              <?
                session_start();
                if ($_SESSION["k_username"] != null) {
              ?>
                <li class="active"><a href="<?ruta_raiz();?>/imagenes/imagenes.php">Imagenes</a></li>
                <li><a href="<?ruta_raiz();?>/mapa/mapa.php">Mapa</a></li>
                <li><a href="<?ruta_raiz();?>/propiedades/search.php">Distancia</a></li>
                <li><a href="<?ruta_raiz();?>/mapa/coordslist.php">Coordenadas</a></li>
             <?
                }
              ?>
            </ul>
<?
    require_once ("../menuderecha.php");
    require_once("../bbdd/bbdd.php");
    $usuario = $_SESSION["k_username"];
    $result = seleccionartodos($usuario);
    echo "Algunas coordenadas de lugares del mundo";
    echo "\n".'<table border=2 CELLPADDING=10 WIDTH="35%">'."\n"; 
    echo '<tr><td>LUGAR</td><td>COORDENADAS</td></tr>'."\n";
    echo '<tr><td>Madrid</td><td>40.418889, -3.691944</td></td>'."\n";
    echo '<tr><td>Barcelona</td><td>41.3825, 2.176944</td></td>'."\n";
    echo '<tr><td>Tenerife</td><td>28.268611, -16.605556</td></td>'."\n";
    echo '<tr><td>Londres</td><td>51.506944, -0.1275</td></td>'."\n";
    echo '<tr><td>Paris</td><td>48.862222, 2.351111</td></td>'."\n";
    echo '<tr><td>Berlin</td><td>52.518611, 13.408333</td></td>'."\n";
    echo '<tr><td>Roma</td><td>41.9, 12.5</td></td>'."\n";
    echo '<tr><td>Nueva York</td><td>40.716667, -74.0</td></td>'."\n";
    echo '<tr><td>Los Angeles</td><td>34.05, -118.25</td></td>'."\n";
    echo '<tr><td>Buenos Aires</td><td>-34.603333, -58.381667</td></td>'."\n";
    echo '<tr><td>Tokio</td><td>35.689506, 139.6917</td></td>'."\n";
    echo '<tr><td>Pekin</td><td>39.913889, 116.391667</td></td>'."\n";
    echo '<tr><td>Dubai</td><td>25.25, 55.3</td></td>'."\n";
    echo '<tr><td>Sydney</td><td>-33.859972, 151.211111</td></td>'."\n";
    echo "</table> \n";
?>


<?
    require_once ("../pie.php");
?>
