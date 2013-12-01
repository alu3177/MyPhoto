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
    echo "Haga clic sobre una imagen para ubicarla en el mapa";
    echo "\n".'<table border=2 CELLPADDING=10 WIDTH="35%">'."\n"; 
    echo '<tr><td>NOMBRE</td><td>IMAGEN</td></tr>'."\n"; 
    while ($row = mysqli_fetch_row($result)){ 
        $nombre = $row[0];
        $foto = $row[1];
        echo '<tr><td>'.$nombre.'</td><td><a href ="mapa.php?nombre='.$nombre.'"><img src="'.$foto.'" HEIGHT="200" WIDTH="200" align="middle"></a></td></tr>'."\n"; 
    } 
    echo "</table> \n";
?>

<div class="hero-unit">
<h2>Posiciones en el mapa</h2>
<p><a class="btn btn-primary btn-large" href="<?ruta_raiz();?>/mapa/fullmap.php">Pulse aquí...</a></p>
</div>

<?
    require_once ("../pie.php");
?>
