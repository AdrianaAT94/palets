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
$consulta_noticias = "SELECT * FROM noticias";
$rs_noticias = mysqli_query($con, $consulta_noticias);

//Contamos numero de registros
$num_total_noticias = mysqli_num_rows($rs_noticias);

//Limito la busqueda
$tam_pag = 10;

//examino la página a mostrar y el inicio del registro a mostrar
if(!isset($_GET["pagina"]))
    $pagina="";
else
    $pagina = $_GET["pagina"];

if (!$pagina) {
   $inicio = 0;
   $pagina = 1;
}
else {
   $inicio = ($pagina - 1) * $tam_pag;
}
//calculo el total de páginas
$total_paginas = ceil($num_total_noticias / $tam_pag);
/*consulta paginada*/
$consulta = "SELECT * FROM noticias ORDER BY id DESC LIMIT ".$inicio."," . $tam_pag;
$result = mysqli_query($con, $consulta);

//Variable que contendrá el resultado de la búsqueda 
$texto = ''; 
//Variable que contendrá el número de resgistros encontrados 
$registros = '';  
if (isset($_POST['buscar_noticia'])) {

    $busqueda = trim($_POST['buscar_noticia']);
    $busqueda = mysqli_real_escape_string($con, $busqueda);
    $entero = 0;  
    if (empty($busqueda)){ 
      $texto = '<p class="texto_busqueda">Búsqueda sin resultados<p>'; 
    }else{ 
        // Si hay información para buscar, abrimos la conexión 
        mysqli_set_charset('utf8'); // para indicar a la bbdd que vamos a mostrar la info en utf 
        //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar 
        $sql = "SELECT * FROM noticias WHERE nombre_es LIKE '%" .$busqueda. "%' ORDER BY nombre_es";  
        $resultado = mysqli_query($con, $sql); //Ejecución de la consulta 
         //Si hay resultados... 
        if (mysqli_num_rows($resultado) > 0){  
            echo '<table class="tabla_noticias" align="center">
                <tr>
                <th>Listado de noticias</th>
                <th>Autor</th>
                <th>Fecha</th>
                </tr>';
            // Se almacenan las cadenas de resultado 
            while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))
            {

              if(!isset($_GET["elem"]))
                $elem = $fila['codigo'];
            else
                $elem = '';
            echo '<tr><td><div>'.$fila["nombre_es"]; ?>
            <div class="iconos_bd"><div class="img1_bd"><a href="?editar_noticia=<?php echo $elem; ?>"><img src ="images/iconos_areaprivada/ap_editar.png"></a></div>
            <div class="img2_bd"><a onclick="if(confirm('ADVERTENCIA \n Si acepta eliminar el archivo, también será eliminado de su servidor. ¿Desea borrar de forma permanente este archivo?') == false){return false;}" href="?borrar_noticia=<?php echo $elem; ?>"><img src="images/iconos_areaprivada/ap_eliminar.png"></a></div><div class="clear"></div></div></div></td>
            <?php $autor=mysqli_query($con, "select nombre from administrador WHERE id =".$fila["autor"]);
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
  <form id="buscador_noticia"  method="post" action="">  
    <div class="formu_input"><input id="buscar_noticia" name="buscar_noticia" type="search" placeholder="Buscar..." autofocus > </div>
    <div class="formu_img"><input type="image" src="images/iconos_areaprivada/ap_buscar.png" alt="submit" class="boton" value="buscar"> </div>
    <div class="clear"></div>
  </form>
</div>

<table class="tabla_noticias" align="center">
<tr>
<th>Listado de noticias</th>
<th>Autor</th>
<th>Fecha</th>
</tr>
<?php
//Mostramos los registros
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{

  if(!isset($_GET["elem"]))
    $elem = $row['codigo'];
else
    $elem = '';
echo '<tr><td><div>'.$row["nombre_es"]; ?>
<div class="iconos_bd"><div class="img1_bd"><a href="?editar_noticia=<?php echo $elem; ?>"><img src ="images/iconos_areaprivada/ap_editar.png"></a></div>
<div class="img2_bd"><a onclick="if(confirm('ADVERTENCIA \n Si acepta eliminar el archivo, también será eliminado de su servidor. ¿Desea borrar de forma permanente este archivo?') == false){return false;}" href="?borrar_noticia=<?php echo $elem; ?>"><img src="images/iconos_areaprivada/ap_eliminar.png"></a></div><div class="clear"></div></div></div></td>
<?php $autor=mysqli_query($con, "select nombre from administrador WHERE id =".$row["autor"]);
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
echo '<div class="paginacion_noticias">';
if ($total_paginas > 1) {
    if ($pagina != 1) {
            echo '<a href="?list_noticias&pagina='.($pagina-1).'">« Anterior</a> | ';
            for ($i=1;$i<=$total_paginas;$i++) {
                if ($pagina == $i)
                        //si muestro el índice de la página actual, no coloco enlace
                    echo ' | '.$pagina." | ";
                else
                    //si el índice no corresponde con la página mostrada actualmente,
                    //coloco el enlace para ir a esa página
                    echo '  <a class="color" href="?list_noticias&pagina='.$i.'">'.$i.'</a>  ';
           }
           if ($pagina != $total_paginas)
               echo '<a href="?list_noticias&pagina='.($pagina+1).'"> | Siguiente »</a>';
} } }
echo "</div>";
mysqli_close($con); 
?>