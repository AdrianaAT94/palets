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

$asw = mysqli_query($con, "SELECT usuario FROM administrador where login ='$login'");
$ter=mysqli_fetch_array($asw, MYSQLI_NUM);
    $esta = $ter[0];
if ($esta == "si") {
    echo "entra";
    header("Location: administracion.php");
}

//Ejecutamos la sentencia SQL
$consulta_usuario = "SELECT * FROM administrador";
$rs_usuario = mysqli_query($con, $consulta_usuario);

//Contamos numero de registros
$num_total_usuario = mysqli_num_rows($rs_usuario);

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
$total_pa = ceil($num_total_usuario / $tam_pa);

//consulta paginada
$consulta = "SELECT * FROM administrador ORDER BY id DESC LIMIT ".$inic."," . $tam_pa;
$result = mysqli_query($con, $consulta);

//Variable que contendrá el resultado de la búsqueda 
$texto = ''; 
//Variable que contendrá el número de resgistros encontrados 
$registros = '';  
if (isset($_POST['buscar_usuario'])) {

    $busqueda = trim($_POST['buscar_usuario']);
    $busqueda = mysqli_real_escape_string($con, $busqueda);
    $entero = 0;  
    if (empty($busqueda)){ 
      $texto = '<p class="texto_busqueda">Búsqueda sin resultados<p>'; 
    }else{ 
        // Si hay información para buscar, abrimos la conexión 
        mysqli_set_charset('utf8'); // para indicar a la bbdd que vamos a mostrar la info en utf 
        //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar 
        $sql = "SELECT * FROM administrador WHERE nombre LIKE '%" .$busqueda. "%' ORDER BY nombre";  
        $resultado = mysqli_query($con, $sql); //Ejecución de la consulta 
         //Si hay resultados... 
        if (mysqli_num_rows($resultado) > 0){  
            echo '<table class="tabla_usuarios" align="center">
            <tr>
            <th>Listado de usuarios</th>
            </tr>';
            // Se almacenan las cadenas de resultado 
            while($f = mysqli_fetch_assoc($resultado)){  
                if(!isset($_GET["elem"]))
                    $elem = $f['id'];
                else
                    $elem = '';
                    echo '<tr><td><div>'.$f["nombre"]; ?>
                    <div class="iconos_bd"><div class="img1_bd"><a href="?editar_usuario=<?php echo $elem; ?>"><img src ="images/iconos_areaprivada/ap_editar.png"></a></div>
                    <div class="img2_bd"><a onclick="if(confirm('ADVERTENCIA \n Si acepta eliminar el archivo, también será eliminado de su servidor. ¿Desea borrar de forma permanente este archivo?') == false){return false;}" href="?borrar_usuario=<?php echo $elem; ?>"><img src="images/iconos_areaprivada/ap_eliminar.png"></a></div><div class="clear"></div></div>
                   <?php
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
  <form id="buscador_usuario"  method="post" action="">  
    <div class="formu_input"><input id="buscar_usuario" name="buscar_usuario" type="search" placeholder="Buscar..." autofocus > </div>
    <div class="formu_img"><input type="image" src="images/iconos_areaprivada/ap_buscar.png" alt="submit" class="boton" value="buscar"> </div>
  </form>
</div>

<table class="tabla_usuarios" align="center">
<tr>
<th>Listado de usuarios</th>
</tr>
<?php
//Mostramos los registros
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
  if(!isset($_GET["elem"]))
    $elem = $row['id'];
else
    $elem = '';
    echo '<tr><td><div>'.$row["nombre"]; ?>
    <div class="iconos_bd"><div class="img1_bd"><a href="?editar_usuario=<?php echo $elem; ?>"><img src ="images/iconos_areaprivada/ap_editar.png"></a></div>
    <div class="img2_bd"><a onclick="if(confirm('ADVERTENCIA \n Si acepta eliminar el archivo, también será eliminado de su servidor. ¿Desea borrar de forma permanente este archivo?') == false){return false;}" href="?borrar_usuario=<?php echo $elem; ?>"><img src="images/iconos_areaprivada/ap_eliminar.png"></a></div><div class="clear"></div></div>
    <?php
}
mysqli_free_result($result)
?>
</table>


<?php
echo '<div class="paginacion_usuario">';
if ($total_pa > 1) {
    if ($pa != 1) {
            echo '<a href="?list_usuario&pa='.($pa-1).'">« Anterior</a> | ';
            for ($j=1;$j<=$total_pa;$j++) {
                if ($pa == $j)
                        //si muestro el índice de la página actual, no coloco enlace
                    echo ' | '.$pa." | ";
                else
                    //si el índice no corresponde con la página mostrada actualmente,
                    //coloco el enlace para ir a esa página
                    echo '  <a class="color" href="?list_usuario&pa='.$j.'">'.$j.'</a>  ';
           }
           if ($pagi != $total_pa) {
               echo '<a href="?list_usuario&pa='.($pa+1).'"> | Siguiente »</a>';
            }
} } }
echo "</div>";
mysqli_close($con); 
?>