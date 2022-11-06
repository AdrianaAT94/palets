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

            //ID de administrador             
            $administrador = mysqli_query($con, "SELECT id FROM administrador WHERE login = '$login'");
            $id_administrador=mysqli_fetch_array($administrador, MYSQLI_NUM);

            if (isset($_REQUEST['publicar_slider'])) {
                $titulo = $_REQUEST['titulo_slider'];
                $titulo = mysqli_real_escape_string($con, $titulo);
                $fecha = date("Y-m-d");
                $copiarFichero = false;
                $copiarPDF = false;
                $errores = "";

                //IMAGEN
                //IMAGEN 1
                if (!esImagen($_FILES['imagen_slider']['tmp_name']))  {
                        $errores = $errores . "<p>Tipo de la imagen no válido</p>";
                }
                if ( $_FILES['imagen_slider']['tmp_name'] == "") {
                    $errores = $errores . "<p>La imagen es obligatoria</p>";
                }
              
                if (is_uploaded_file ($_FILES['imagen_slider']['tmp_name'])) {
                    $nombreDirectorio = "images/slider/";
                    $nombreFichero = $_FILES['imagen_slider']['name'];
                    $copiarFichero = true;

                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" . $nombreFichero;
                    $nombreCompleto = $nombreDirectorio . $nombreFichero;
                }

                 else if ($_FILES['imagen_slider']['error'] == UPLOAD_ERR_FORM_SIZE) {
                    $maxsize = $_REQUEST['MAX_FILE_SIZE'];
                    $errores = $errores . "   <p>El tamaño de la imagen supera el límite permitido ($maxsize bytes)</p>";
                }

                else if ($_FILES['imagen_slider']['name'] == "")
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
                     print ("<p>No se ha podido realizar la inserción debido a los siguientes errores:</p>\n");
                     print ($errores);
                  }
              else {

                if ($copiarFichero) {
                    move_uploaded_file($_FILES['imagen_slider']['tmp_name'], "../". $nombreDirectorio . $nombreFichero);
                }

                //generar codigo
                $key = 'sld'.'';
                $pattern = '1234567890PARDAL';
                $max = strlen($pattern)-1;
                for($i=0;$i < 9;$i++) $key .= $pattern{mt_rand(0,$max)};

                //Ejecucion de la sentencia SQL
                mysqli_query($con, "insert into slider (codigo, nombre, fecha, autor, imagen) values ('$key','$titulo','$fecha','$id_administrador[0]','$nombreCompleto')");
               
                //Redireccionamiento
                echo "<script> location.href=\"../administracion.php?list_slider\";</script>";
                
            }
        }
        

        function esImagen($path) {
            $imageSizeArray = @getimagesize($path);
            $imageTypeArray = $imageSizeArray[2];
            return (bool)(in_array($imageTypeArray, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP)));
        }
        mysqli_close($con); 
        ?>
    </body>
</html> 