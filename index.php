<?php
    require_once("./cabecera.php");
?>
            <ul class="nav">
              <li class="active"><a href="<?ruta_raiz();?>/index.php">Home</a></li>
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
<?php
    require_once ("./menuderecha.php");
?>

    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span9">
          <div class="hero-unit">
            <h2>Proyecto PICMAPS</h2><br>
            <p> En un entorno móvil como el actual, aprovechar el valor de la ubicación geográfica se ha convertido en una herramienta clave para sacar rendimiento a información que puede ser de vital importancia para las compañías. Con esta herramienta se pueden visualizar algunos ejemplos de cómo usar la tecnología de geolocalización. </p>
          </div>
         
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/.fluid-container-->

<?php
require_once("./pie.php");
?>