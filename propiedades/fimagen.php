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
?>
    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span9">
          <div class="hero-unit">
            <form action="propiedades.php" method="post" enctype="multipart/form-data">
                    Archivo: <input type="file" name="imagen">
                    <input type="hidden" name="MAX_FILE_SIZE" value="4500000">
                    <input type="submit" name="subir" value="Subir imagen"><br />
            </form>
          </div>
         
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/.fluid-container-->
<?
require_once("../pie.php");
?>