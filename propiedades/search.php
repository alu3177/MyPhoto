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
    require_once("../bbdd/bbdd.php");
    echo "Introduzca coordenadas de los puntos \n";
    echo "(si necesita datos adicionales pulse en Coordenadas)";
?>
    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span9">
          <div class="hero-unit">
            <form action="distancias.php" method="post" enctype="multipart/form-data">
                    Latitud  1: <input type="text" name="lat1"><br />
                    Longitud 1: <input type="text" name="lon1"><br />
                    Latitud  2: <input type="text" name="lat2"><br />
                    Longitud 2: <input type="text" name="lon2"><br />
                    <input type="submit" name="subir" value="Calculo de distancia"><br />
            </form>
          </div>
         
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/.fluid-container-->
<?
require_once("../pie.php");
?>