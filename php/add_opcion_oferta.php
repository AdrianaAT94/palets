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

            if (isset($_REQUEST['publicar_oferta'])) {
                $titulo_es = $_REQUEST['titulo_es_oferta'];
                $titulo_es = mysqli_real_escape_string($con, $titulo_es);
                $titulo_gl = $_REQUEST['titulo_gl_oferta'];
                $titulo_gl = mysqli_real_escape_string($con, $titulo_gl);
                $titulo_en = $_REQUEST['titulo_en_oferta'];
                $titulo_en = mysqli_real_escape_string($con, $titulo_en);
                $descripcion_es = $_REQUEST['descripcion_es_oferta'];
                $descripcion_es = mysqli_real_escape_string($con, $descripcion_es);
                $descripcion_gl = $_REQUEST['descripcion_gl_oferta'];
                $descripcion_gl = mysqli_real_escape_string($con, $descripcion_gl);
                $descripcion_en = $_REQUEST['descripcion_en_oferta'];
                $descripcion_en = mysqli_real_escape_string($con, $descripcion_en);
                $fecha = date("Y-m-d");
                $copiarFichero = false;
                $copiarPDF = false;
                $errores = "";

                //IMAGEN
                if (!esImagen($_FILES['imagen_oferta']['tmp_name']) && $_FILES['imagen_oferta']['tmp_name'] != "") {
                        $errores = $errores . "<p>Tipo de la imagen no válido</p>";
                }
              
                if (is_uploaded_file ($_FILES['imagen_oferta']['tmp_name'])) {
                    $nombreDirectorio = "images/ofertas/";
                    $nombreFichero = $_FILES['imagen_oferta']['name'];
                    $copiarFichero = true;

                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" . $nombreFichero;
                    $nombreCompleto = $nombreDirectorio . $nombreFichero;
                }

                 else if ($_FILES['imagen_oferta']['error'] == UPLOAD_ERR_FORM_SIZE) {
                    $maxsize = $_REQUEST['MAX_FILE_SIZE'];
                    $errores = $errores . "   <p>El tamaño de la imagen supera el límite permitido ($maxsize bytes)</p>";
                }

                else if ($_FILES['imagen_oferta']['name'] == "")
                    $nombreFichero = '';
                else
                    $errores = $errores . "   <p>No se ha podido subir la imagen</p>";


                 //PDF

                if ($_FILES['pdf_oferta']['type'] != "" && $_FILES['pdf_oferta']['type'] != "application/pdf")  {                        
                    $errores = $errores . "<p>No se ha seleccionado un pdf.</p>";
                }

                if (is_uploaded_file ($_FILES['pdf_oferta']['tmp_name'])) {
                    $nombreDirectoriopdf = "descargas/";
                    $nombreFicheropdf = $_FILES['pdf_oferta']['name'];
                    $copiarPDF = true;

                    $idUnicopdf = time();
                    $nombreFicheropdf = $idUnicopdf . "-" . $nombreFicheropdf;
                    $nombreCompletopdf = $nombreDirectoriopdf . $nombreFicheropdf;
                     
                }

                else if ($_FILES['pdf_oferta']['name'] == "")
                    $nombreFicheropdf = '';
                else
                    $errores = $errores . "   <p>No se ha podido subir el pdf</p>";



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
                    move_uploaded_file($_FILES['imagen_oferta']['tmp_name'], "../". $nombreDirectorio . $nombreFichero);
                }

                if ($copiarPDF) {
                    move_uploaded_file($_FILES['pdf_oferta']['tmp_name'], "../". $nombreDirectoriopdf . $nombreFicheropdf);
                }

                //generar codigo
                $key = 'ofr'.'';
                $pattern = '1234567890PARDAL';
                $max = strlen($pattern)-1;
                for($i=0;$i < 9;$i++) $key .= $pattern{mt_rand(0,$max)};

                //Ejecucion de la sentencia SQL
                mysqli_query($con, "insert into ofertas (codigo, nombre_es, nombre_gl, nombre_en, fecha, pdf, autor, imagen, texto_es, texto_gl, texto_en) values ('$key','$titulo_es','$titulo_gl','$titulo_en','$fecha','$nombreCompletopdf','$id_administrador[0]','$nombreCompleto','$descripcion_es','$descripcion_gl','$descripcion_en')");
               
                //Redireccionamiento
                echo "<script> location.href=\"../administracion.php?list_ofertas\";</script>";
                
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