<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once '../Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();
$idioma = $_GET['lan'];

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Palets</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/funciones_admin.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/desktop.css"/>

    <?php
    if ($deviceType == 'tablet' ) { 
        header ("Location: ../administracion.php");
    } if ($deviceType == 'phone' ){ 
        header ("Location: ../administracion.php");
    }
    ?>
    </head>
    <body>
<?php
header("Content-Type: text/html;charset=utf-8");
//creamos la sesion
@session_start();
$login = $_SESSION['administrador']; 
if(!isset($_SESSION['administrador'])) {
    header("Location: ../administracion.php");
}

//Conexion con la base
include('../conexion.php');

if (isset($_REQUEST['editar_slider'])) {
	$cod = $_REQUEST['cod_ed_slider'];
	$titulo = $_REQUEST['titulo_ed_slider'];
  $titulo = mysqli_real_escape_string($con, $titulo);
	$copiarFichero = false;
	$errores = "";

//IMAGEN
        if (!esImagen($_FILES['imagen_ed_slider']['tmp_name']) && $_FILES['imagen_ed_slider']['tmp_name'] !="" ) {
            $errores = $errores . "<p>Tipo de imagen no válido</p>";
        }
      
        if (is_uploaded_file ($_FILES['imagen_ed_slider']['tmp_name'])) {
            $nombreDirectorio = "images/slider/";
            $nombreFichero = $_FILES['imagen_ed_slider']['name'];
            $copiarFichero = true;

            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
            $nombreCompleto = $nombreDirectorio . $nombreFichero;
        }

         else if ($_FILES['imagen_ed_slider']['error'] == UPLOAD_ERR_FORM_SIZE) {
            $maxsize = $_REQUEST['MAX_ED_FILE_SIZE'];
            $errores = $errores . "   <p>El tamaño de la imagen supera el límite permitido ($maxsize bytes)</p>";
        }

        else if ($_FILES['imagen_ed_slider']['name'] == "")
            $nombreFichero = '';
        else
            $errores = $errores . "   <p>No se ha podido subir la imagen</p>";

        if ($errores != "") { ?>
            <div class="cabecera administracion"><?php include('cabecera_admin_fallo.php')?></div>
            <div class="listas">
                <div class="lista_opcions_admin">
                    <ul>
                        <li class="volver_admin">VOLVER
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
             <div class="fallo_insercion">                     
             <?php
             print ("<p>No se ha podido realizar la modificación debido a los siguientes errores:</p>\n");
             print ($errores);
          }
      else {

        if ($copiarFichero) {
            move_uploaded_file($_FILES['imagen_ed_slider']['tmp_name'], "../". $nombreDirectorio . $nombreFichero);
        }

       //Ejecucion de la sentencia SQL

        if ($_FILES['imagen_ed_slider']['tmp_name'] !="") {
       		mysqli_query($con, "update slider set nombre='$titulo', imagen='$nombreCompleto' where codigo='$cod'");
       	}

       	else {
       		mysqli_query($con, "update slider set nombre='$titulo' where codigo='$cod'");
       	}
        
        //Redireccionamiento
        echo "<script> location.href=\"../administracion.php?list_slider\";</script>";
        
    }
}




function esImagen($path) {
    $imageSizeArray = @getimagesize($path);
    $imageTypeArray = $imageSizeArray[2];
    return (bool)(in_array($imageTypeArray, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP)));
}
@mysqli_close($con); 
?>

</body>
</html>