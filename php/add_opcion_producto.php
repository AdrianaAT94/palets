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

            if (isset($_REQUEST['publicar_producto'])) {
                $titulo_es = $_REQUEST['nombre_es_producto'];
                $titulo_es = mysqli_real_escape_string($con, $titulo_es);
                $titulo_gl = $_REQUEST['nombre_gl_producto'];
                $titulo_gl = mysqli_real_escape_string($con, $titulo_gl);
                $titulo_en = $_REQUEST['nombre_en_producto'];
                $titulo_en = mysqli_real_escape_string($con, $titulo_en);
                $fecha = date("Y-m-d");
                $precio = $_REQUEST['precio_producto'];
                $precio = mysqli_real_escape_string($con, $precio);
                $descripcion_es = $_REQUEST['descripcion_es_producto'];
                $descripcion_es = mysqli_real_escape_string($con, $descripcion_es);
                $descripcion_gl = $_REQUEST['descripcion_gl_producto'];
                $descripcion_gl = mysqli_real_escape_string($con, $descripcion_gl);
                $descripcion_en = $_REQUEST['descripcion_en_producto'];
                $descripcion_en = mysqli_real_escape_string($con, $descripcion_en);
                $copiarFichero1 = false;
                $copiarFichero2 = false;
                $copiarFichero3 = false;
                $copiarFichero4 = false;
                $errores = "";

                //IMAGEN 1
                if (!esImagen($_FILES['imagen1_producto']['tmp_name']))  {
                        $errores = $errores . "<p>Tipo de la primera imagen no v??lido</p>";
                }
                if ( $_FILES['imagen1_producto']['tmp_name'] == "") {
                    $errores = $errores . "<p>La primera imagen es obligatoria</p>";
                }

                if (is_uploaded_file ($_FILES['imagen1_producto']['tmp_name'])) {
                    $nombreDirectorio1 = "images/productos/";
                    $nombreFichero1 = $_FILES['imagen1_producto']['name'];
                    $copiarFichero1= true;

                    $idUnico1 = time();
                    $nombreFichero1 = $idUnico1 . "-" . $nombreFichero1;
                    $nombreCompleto1 = $nombreDirectorio1 . $nombreFichero1;
                }

                 else if ($_FILES['imagen1_producto']['error'] == UPLOAD_ERR_FORM_SIZE) {
                    $maxsize1 = $_REQUEST['MAX_FILE_SIZE1'];
                    $errores = $errores . "   <p>El tama??o de la primera imagen supera el l??mite permitido ($maxsize1 bytes)</p>";
                }

                else if ($_FILES['imagen1_producto']['name'] == "")
                    $nombreFichero1 = '';
                else
                    $errores = $errores . "   <p>No se ha podido subir la primera imagen</p>";

                //IMAGEN 2
                if (!esImagen($_FILES['imagen2_producto']['tmp_name']) && $_FILES['imagen2_producto']['tmp_name'] != "") {
                        $errores = $errores . "<p>Tipo de la segunda imagen no v??lido</p>";
                }


                if (is_uploaded_file ($_FILES['imagen2_producto']['tmp_name'])) {
                    $nombreDirectorio2 = "images/productos/";
                    $nombreFichero2 = $_FILES['imagen2_producto']['name'];
                    $copiarFichero2= true;
                    
                    $idUnico2 = time();
                    $nombreFichero2 = $idUnico2 . "-" . $nombreFichero2;
                    $nombreCompleto2 = $nombreDirectorio2 . $nombreFichero2;                     
                }

                 else if ($_FILES['imagen2_producto']['error'] == UPLOAD_ERR_FORM_SIZE) {
                    $maxsize2 = $_REQUEST['MAX_FILE_SIZE2'];
                    $errores = $errores . "   <p>El tama??o de la segunda imagen supera el l??mite permitido ($maxsize2 bytes)</p>";
                }

                else if ($_FILES['imagen2_producto']['name'] == "")
                    $nombreFichero2 = '';
                else
                    $errores = $errores . "   <p>No se ha podido subir la segunda imagen</p>";

                //IMAGEN 3
                if (!esImagen($_FILES['imagen3_producto']['tmp_name']) && $_FILES['imagen3_producto']['tmp_name'] != "") {
                        $errores = $errores . "<p>Tipo de la tercera imagen no v??lido</p>";
                }


                if (is_uploaded_file ($_FILES['imagen3_producto']['tmp_name'])) {
                    $nombreDirectorio3 = "images/productos/";
                    $nombreFichero3 = $_FILES['imagen3_producto']['name'];
                    $copiarFichero3= true;

                    $idUnico3 = time();
                    $nombreFichero3  = $idUnico3 . "-" . $nombreFichero3;
                    $nombreCompleto3 = $nombreDirectorio3 . $nombreFichero3;
                }

                 else if ($_FILES['imagen3_producto']['error'] == UPLOAD_ERR_FORM_SIZE) {
                    $maxsize3 = $_REQUEST['MAX_FILE_SIZE3'];
                    $errores = $errores . "   <p>El tama??o de la tercera imagen supera el l??mite permitido ($maxsize3 bytes)</p>";
                }

                else if ($_FILES['imagen3_producto']['name'] == "")
                    $nombreFichero3 = '';
                else
                    $errores = $errores . "   <p>No se ha podido subir la tercera imagen</p>";

                //IMAGEN 4
                if (!esImagen($_FILES['imagen4_producto']['tmp_name']) && $_FILES['imagen4_producto']['tmp_name'] != "") {
                        $errores = $errores . "<p>Tipo de la cuarta imagen no v??lido</p>";
                }


                if (is_uploaded_file ($_FILES['imagen4_producto']['tmp_name'])) {
                    $nombreDirectorio4 = "images/productos/";
                    $nombreFichero4 = $_FILES['imagen4_producto']['name'];
                    $copiarFichero4= true;

                    $idUnico4 = time();
                    $nombreFichero4 = $idUnico4 . "-" . $nombreFichero4;
                    $nombreCompleto4 = $nombreDirectorio4 . $nombreFichero4;                  
                }

                 else if ($_FILES['imagen4_producto']['error'] == UPLOAD_ERR_FORM_SIZE) {
                    $maxsize4 = $_REQUEST['MAX_FILE_SIZE4'];
                    $errores = $errores . "   <p>El tama??o de la cuarta imagen supera el l??mite permitido ($maxsize4 bytes)</p>";
                }

                else if ($_FILES['imagen4_producto']['name'] == "")
                    $nombreFichero4 = '';
                else
                    $errores = $errores . "   <p>No se ha podido subir la cuarta imagen</p>";


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
                     print ("<p>No se ha podido realizar la inserci??n debido a los siguientes errores:</p>\n");
                     print ($errores);
                  }
            else {

                if ($copiarFichero1) {
                    move_uploaded_file($_FILES['imagen1_producto']['tmp_name'], "../". $nombreDirectorio1 . $nombreFichero1);
                }

                if ($copiarFichero2) {
                    move_uploaded_file($_FILES['imagen2_producto']['tmp_name'], "../". $nombreDirectorio2 . $nombreFichero2);
                }

                if ($copiarFichero3) {
                    move_uploaded_file($_FILES['imagen3_producto']['tmp_name'], "../". $nombreDirectorio3 . $nombreFichero3);
                }

                if ($copiarFichero4) {
                    move_uploaded_file($_FILES['imagen4_producto']['tmp_name'], "../". $nombreDirectorio4 . $nombreFichero4);
                }

                //generar codigo
                $key = 'pro'.'';
                $pattern = '1234567890PARDAL';
                $max = strlen($pattern)-1;
                for($i=0;$i < 9;$i++) $key .= $pattern{mt_rand(0,$max)};

                //Ejecucion de la sentencia SQL

                if ($_FILES['imagen2_producto']['tmp_name'] =="" && $_FILES['imagen3_producto']['tmp_name'] =="" && $_FILES['imagen4_producto']['tmp_name'] =="") {
                    mysqli_query($con, "insert into productos(codigo, nombre, autor, fecha, precio, descripcion, imagen1) 
                    VALUES('$key', '$titulo_es','$titulo_gl','$titulo_en', '$id_administrador[0]', '$fecha', '$precio', '$descripcion_es','$descripcion_gl','$descripcion_en', '$nombreCompleto1')");
                }

                else if ($_FILES['imagen2_producto']['tmp_name'] !="" && $_FILES['imagen3_producto']['tmp_name'] =="" && $_FILES['imagen4_producto']['tmp_name'] =="") {
                    mysqli_query($con, "insert into productos(codigo, nombre, autor, fecha, precio, descripcion, imagen1, imagen2) 
                    VALUES('$key', '$titulo_es','$titulo_gl','$titulo_en', '$id_administrador[0]', '$fecha', '$precio', '$descripcion_es','$descripcion_gl','$descripcion_en', '$nombreCompleto1', '$nombreCompleto2')");
                }

                else if ($_FILES['imagen2_producto']['tmp_name'] =="" && $_FILES['imagen3_producto']['tmp_name'] !="" && $_FILES['imagen4_producto']['tmp_name'] =="") {
                    mysqli_query($con, "insert into productos(codigo, nombre, autor, fecha, precio, descripcion, imagen1, imagen3) 
                    VALUES('$key', '$titulo_es','$titulo_gl','$titulo_en','$id_administrador[0]', '$fecha', '$precio', '$descripcion_es','$descripcion_gl','$descripcion_en', '$nombreCompleto1', '$nombreCompleto3')");
                }

                else if ($_FILES['imagen2_producto']['tmp_name'] =="" && $_FILES['imagen3_producto']['tmp_name'] =="" && $_FILES['imagen4_producto']['tmp_name'] !="") {
                    mysqli_query($con, "insert into productos(codigo, nombre, autor, fecha, precio, descripcion, imagen1, imagen4) 
                    VALUES('$key', '$titulo_es','$titulo_gl','$titulo_en', '$id_administrador[0]', '$fecha', '$precio', '$descripcion_es','$descripcion_gl','$descripcion_en', '$nombreCompleto1', '$nombreCompleto4')");
                }

                else if ($_FILES['imagen2_producto']['tmp_name'] =="" && $_FILES['imagen3_producto']['tmp_name'] !="" && $_FILES['imagen4_producto']['tmp_name'] !="") {
                    mysqli_query($con, "insert into productos(codigo, nombre, autor, fecha, precio, descripcion, imagen1, imagen3, imagen4) 
                    VALUES('$key', '$titulo_es','$titulo_gl','$titulo_en', '$id_administrador[0]', '$fecha', '$precio', '$descripcion_es','$descripcion_gl','$descripcion_en', '$nombreCompleto1', '$nombreCompleto3', '$nombreCompleto4')");
                }

                else if ($_FILES['imagen2_producto']['tmp_name'] !="" && $_FILES['imagen3_producto']['tmp_name'] =="" && $_FILES['imagen4_producto']['tmp_name'] !="") {
                    mysqli_query($con, "insert into productos(codigo, nombre, autor, fecha, precio, descripcion, imagen1, imagen2, imagen4) 
                    VALUES('$key', '$titulo_es','$titulo_gl','$titulo_en', '$id_administrador[0]', '$fecha', '$precio', '$descripcion_es','$descripcion_gl','$descripcion_en', '$nombreCompleto1', '$nombreCompleto2', '$nombreCompleto4')");
                }

                else if ($_FILES['imagen2_producto']['tmp_name'] !="" && $_FILES['imagen3_producto']['tmp_name'] !="" && $_FILES['imagen4_producto']['tmp_name'] =="") {
                    mysqli_query($con, "insert into productos(codigo, nombre, autor, fecha, precio, descripcion, imagen1, imagen2, imagen3) 
                    VALUES('$key', '$titulo_es','$titulo_gl','$titulo_en', '$id_administrador[0]', '$fecha', '$precio', '$descripcion_es','$descripcion_gl','$descripcion_en', '$nombreCompleto1', '$nombreCompleto2', '$nombreCompleto3')");
                }

                else {
                    mysqli_query($con, "insert into productos(codigo, nombre, autor, fecha, precio, descripcion, imagen1, imagen2, imagen3, imagen4) 
                    VALUES('$key', '$titulo_es','$titulo_gl','$titulo_en', '$id_administrador[0]', '$fecha', '$precio', '$descripcion_es','$descripcion_gl','$descripcion_en', '$nombreCompleto1', '$nombreCompleto2', '$nombreCompleto3', '$nombreCompleto4')");
                }

                //Redireccionamiento
                echo "<script> location.href=\"../administracion.php?list_productos\";</script>";
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
