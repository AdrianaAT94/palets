<?php
header("Content-Type: text/html;charset=utf-8");
//creamos la sesion
@session_start();
$login = $_SESSION['administrador']; 
if(!isset($_SESSION['administrador'])) {
    header("Location: ../administracion.php");
}

//Conexion con la base
include('conexion.php');

//Ejecutamos la sentencia SQL
$consulta_productos = "SELECT * FROM productos";
$rs_productos = mysqli_query($con, $consulta_productos);

//Contamos numero de registros
$num_total_productos = mysqli_num_rows($rs_productos);

//Limito la busqueda
$tam_pagi = 10;

//examino la página a mostrar y el inicio del registro a mostrar
if(!isset($_GET["pagi"]))
    $pagi="";
else
    $pagi = $_GET["pagi"];

if (!$pagi) {
   $ini = 0;
   $pagi = 1;
}
else {
   $ini = ($pagi - 1) * $tam_pagi;
}
//calculo el total de páginas
$total_pagi = ceil($num_total_productos / $tam_pagi);

//consulta paginada
$consulta = "SELECT * FROM productos ORDER BY id DESC LIMIT ".$ini."," . $tam_pagi;
$result = mysqli_query($con, $consulta);

//Variable que contendrá el resultado de la búsqueda 
$texto = ''; 
//Variable que contendrá el número de resgistros encontrados 
$registros = '';  
if (isset($_POST['buscar_producto'])) {

    $busqueda = trim($_POST['buscar_producto']);
    $busqueda = mysqli_real_escape_string($con, $busqueda);
    $entero = 0;  
    if (empty($busqueda)){ 
      $texto = '<p class="texto_busqueda">Búsqueda sin resultados<p>'; 
    }else{ 
        // Si hay información para buscar, abrimos la conexión 
        mysqli_set_charset('utf8'); // para indicar a la bbdd que vamos a mostrar la info en utf 
        //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar 
        $sql = "SELECT * FROM productos WHERE nombre_es LIKE '%" .$busqueda. "%' ORDER BY nombre_es";  
        $resultado = mysqli_query($con, $sql); //Ejecución de la consulta 
         //Si hay resultados... 
        if (mysqli_num_rows($resultado) > 0){  
            echo '<table class="tab_productos" align="center">
            <tr>
            <th>Listado de Vehículos</th>
            <th>Autor</th>
            <th>Fecha</th>
            </tr>
            </table>
            <table class="tabla_productos">';
            // Se almacenan las cadenas de resultado 
            while($fila = mysqli_fetch_assoc($resultado)){  
                if(!isset($_GET["elem"]))
                    $elem = $fila['codigo'];
                else
                    $elem = '';

                    echo '<tr><td><div class="img_producto"><img class="img_producto" src="'.$fila["imagen1"].'"></div>'; ?>
                    <div class="iconos_bd"><div class="img1_bd"><a href="?editar_producto=<?php echo $elem; ?>"><img src ="images/iconos_areaprivada/ap_editar.png"></a></div>
                    <div class="img2_bd"><a onclick="if(confirm('ADVERTENCIA \n Si acepta eliminar el archivo, también será eliminado de su servidor. ¿Desea borrar de forma permanente este archivo?') == false){return false;}" href="?borrar_producto=<?php echo $elem; ?>"><img src="images/iconos_areaprivada/ap_eliminar.png"></a></div><div class="clear"></div></div>
                    <?php echo '<div class="nombre_producto">'.$fila["nombre_es"].'</div></div>
                    <div class="clear"></td>';
                  $autor=mysqli_query($con, "select nombre from administrador WHERE id = ".$fila["autor"]);
                    while ($fil=mysqli_fetch_array($autor, MYSQLI_ASSOC)) {
                        echo '<td>'.utf8_encode($fil["nombre"]).'</td>';
                    }
                $fecha_b = strtotime($fila['fecha']);
                $dia_b = date('d',$fecha_b);
                $mes_b = date('m',$fecha_b);
                $ano_b = date('Y',$fecha_b);
                $meses_b = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                echo '<td><time datetime="'.$fila['fecha'].'"> '.$dia_b." de ".$meses_b[$mes_b-1]. " del ".$ano_b.'</time></td></tr>';
            }
            mysqli_free_result($result);
            echo '</table>';
        }  
        else{ 
            $texto = "<p class='texto_busqueda'>No hay resultados</p>";   
        } 
    } 

echo $texto; 
} else {

?>
<div class="buscador">
  <form id="buscador_producto"  method="post" action="">  
    <div class="formu_input"><input id="buscar_producto" name="buscar_producto" type="search" placeholder="Buscar..." autofocus > </div>
    <div class="formu_img"><input type="image" src="images/iconos_areaprivada/ap_buscar.png" alt="submit" class="boton" value="buscar"> </div>
  </form>
</div>

<table class="tab_productos" align="center">
<tr>
<th>Listado de Productos</th>
<th>Autor</th>
<th>Fecha</th>
</tr>
</table>
<table class="tabla_productos">
<?php
//Mostramos los registros
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
  if(!isset($_GET["elem"]))
    $elem = $row['codigo'];
else
    $elem = '';

    echo '<tr><td><div class="img_producto"><img class="img_producto" src="'.$row["imagen1"].'"></div>'; ?>
    <div class="iconos_bd"><div class="img1_bd"><a href="?editar_producto=<?php echo $elem; ?>"><img src ="images/iconos_areaprivada/ap_editar.png"></a></div>
    <div class="img2_bd"><a onclick="if(confirm('ADVERTENCIA \n Si acepta eliminar el archivo, también será eliminado de su servidor. ¿Desea borrar de forma permanente este archivo?') == false){return false;}" href="?borrar_producto=<?php echo $elem; ?>"><img src="images/iconos_areaprivada/ap_eliminar.png"></a></div><div class="clear"></div></div>
    <?php echo '<div class="nombre_producto">'.$row["nombre_es"].'</div></div><div class="clear"></td>';
$autor=mysqli_query($con, "select nombre from administrador WHERE id = ".$row["autor"]);
    while ($fil=mysqli_fetch_array($autor, MYSQLI_ASSOC)) {
        echo '<td>'.utf8_encode($fil["nombre"]).'</td>';
    }
$fecha = strtotime($row['fecha']);
$dia = date('d',$fecha);
$mes = date('m',$fecha);
$ano = date('Y',$fecha);
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
echo '<td><time datetime="'.$row['fecha'].'"> '.$dia." de ".$meses[$mes-1]. " del ".$ano.'</time></td></tr>';
}
mysqli_free_result($result)
?>
</table>


<?php
echo '<div class="paginacion_productos">';
if ($total_pagi > 1) {
    if ($pagi != 1) {
            echo '<a href="?list_productos&pagi='.($pagi-1).'">« Anterior</a> | ';
            for ($j=1;$j<=$total_pagi;$j++) {
                if ($pagi == $j)
                        //si muestro el índice de la página actual, no coloco enlace
                    echo ' | '.$pagi." | ";
                else
                    //si el índice no corresponde con la página mostrada actualmente,
                    //coloco el enlace para ir a esa página
                    echo '  <a class="color" href="?list_productos&pagi='.$j.'">'.$j.'</a>  ';
           }
           if ($pagi != $total_pagi) {
               echo '<a href="?list_productos&pagi='.($pagi+1).'"> | Siguiente »</a>';
            }
} } } 
echo "</div>";
mysqli_close($con); 
?>