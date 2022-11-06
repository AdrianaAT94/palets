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
$consulta_slider = "SELECT * FROM slider";
$rs_slider = mysqli_query($con, $consulta_slider);

//Contamos numero de registros
$num_total_slider = mysqli_num_rows($rs_slider);

//Limito la busqueda
$tam_pa = 10;

//examino la página a mostrar y el inicio del registro a mostrar
if(!isset($_GET["pa"]))
    $pa="";
else
    $pa = $_GET["pa"];

if (!$pa) {
   $inic = 0;
   $pa = 1;
}
else {
   $inic = ($pa - 1) * $tam_pa;
}
//calculo el total de páginas
$total_pa = ceil($num_total_slider / $tam_pa);

//consulta paginada
$consulta = "SELECT * FROM slider ORDER BY id DESC LIMIT ".$inic."," . $tam_pa;
$result = mysqli_query($con, $consulta);

//Variable que contendrá el resultado de la búsqueda 
$texto = ''; 
//Variable que contendrá el número de resgistros encontrados 
$registros = '';  
if (isset($_POST['buscar_slider'])) {

    $busqueda = trim($_POST['buscar_slider']);
    $busqueda = mysqli_real_escape_string($con, $busqueda);
    $entero = 0;  
    if (empty($busqueda)){ 
      $texto = '<p class="texto_busqueda">Búsqueda sin resultados<p>'; 
    }else{ 
        // Si hay información para buscar, abrimos la conexión 
        mysqli_set_charset('utf8'); // para indicar a la bbdd que vamos a mostrar la info en utf 
        //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar 
        $sql = "SELECT * FROM slider WHERE nombre LIKE '%" .$busqueda. "%' ORDER BY nombre";  
        $resultado = mysqli_query($con, $sql); //Ejecución de la consulta 
         //Si hay resultados... 
        if (mysqli_num_rows($resultado) > 0){  
            echo '<table class="tab_slider" align="center">
            <tr>
            <th>Listado de fotos slider</th>
            <th>Autor</th>
            <th>Fecha</th>
            </tr>
            </table>
            <table class="tabla_slider">';
            // Se almacenan las cadenas de resultado 
            while($f = mysqli_fetch_assoc($resultado)){  
                if(!isset($_GET["elem"]))
                    $elem = $f['codigo'];
                else
                    $elem = '';
                    echo '<tr><td><div class="img_slider"><img class="img_slider" src="'.$f["imagen"].'"></div>'; ?>
                    <div class="iconos_bd"><div class="img1_bd"><a href="?editar_slider=<?php echo $elem; ?>"><img src ="images/iconos_areaprivada/ap_editar.png"></a></div>
                    <div class="img2_bd"><a onclick="if(confirm('ADVERTENCIA \n Si acepta eliminar el archivo, también será eliminado de su servidor. ¿Desea borrar de forma permanente este archivo?') == false){return false;}" href="?borrar_slider=<?php echo $elem; ?>"><img src="images/iconos_areaprivada/ap_eliminar.png"></a></div><div class="clear"></div></div>
                    <?php echo '<div class="nombre_slider">'.$f["nombre"].'</div></div><div class="clear"></td>';
                  $autor=mysqli_query($con, "select nombre from administrador WHERE id = ".$f["autor"]);
                    while ($fil=mysqli_fetch_array($autor, MYSQLI_ASSOC)) {
                        echo '<td>'.utf8_encode($fil["nombre"]).'</td>';
                    }
                $fecha_b = strtotime($f['fecha']);
                $dia_b = date('d',$fecha_b);
                $mes_b = date('m',$fecha_b);
                $ano_b = date('Y',$fecha_b);
                $meses_b = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                echo '<td><time datetime="'.$f['fecha'].'"> '.$dia_b." de ".$meses_b[$mes_b-1]. " del ".$ano_b.'</time></td></tr>';
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
  <form id="buscador_slider"  method="post" action="">  
    <div class="formu_input"><input id="buscar_slider" name="buscar_slider" type="search" placeholder="Buscar..." autofocus > </div>
    <div class="formu_img"><input type="image" src="images/iconos_areaprivada/ap_buscar.png" alt="submit" class="boton" value="buscar"> </div>
  </form>
</div>

<table class="tab_slider" align="center">
<tr>
<th>Listado de Fotos</th>
<th>Autor</th>
<th>Fecha</th>
</tr>
</table>
<table class="tabla_slider">
<?php
//Mostramos los registros
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
  if(!isset($_GET["elem"]))
    $elem = $row['codigo'];
else
    $elem = '';
    echo '<tr><td><div class="img_slider"><img class="img_slider" src="'.$row["imagen"].'"></div>'; ?>
    <div class="iconos_bd"><div class="img1_bd"><a href="?editar_slider=<?php echo $elem; ?>"><img src ="images/iconos_areaprivada/ap_editar.png"></a></div>
    <div class="img2_bd"><a onclick="if(confirm('ADVERTENCIA \n Si acepta eliminar el archivo, también será eliminado de su servidor. ¿Desea borrar de forma permanente este archivo?') == false){return false;}" href="?borrar_slider=<?php echo $elem; ?>"><img src="images/iconos_areaprivada/ap_eliminar.png"></a></div><div class="clear"></div></div>
    <?php echo '<div class="nombre_slider">'.$row["nombre"].'</div></div><div class="clear"></td>';
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
echo '<div class="paginacion_slider">';
if ($total_pa > 1) {
    if ($pa != 1) {
            echo '<a href="?list_slider&pa='.($pa-1).'">« Anterior</a> | ';
            for ($j=1;$j<=$total_pa;$j++) {
                if ($pa == $j)
                        //si muestro el índice de la página actual, no coloco enlace
                    echo ' | '.$pa." | ";
                else
                    //si el índice no corresponde con la página mostrada actualmente,
                    //coloco el enlace para ir a esa página
                    echo '  <a class="color" href="?list_slider&pa='.$j.'">'.$j.'</a>  ';
           }
           if ($pagi != $total_pa) {
               echo '<a href="?list_slider&pa='.($pa+1).'"> | Siguiente »</a>';
            }
} } }
echo "</div>";
mysqli_close($con); 
?>