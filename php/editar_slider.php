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

$elem = $_GET['editar_slider'];
$result = mysqli_query($con, "SELECT codigo, nombre, imagen FROM slider where codigo ='$elem'");
$row=mysqli_fetch_array($result, MYSQLI_NUM);
	$cod = $row[0];
	$nombre = $row[1];
	$imagen = $row[2];

?>

<table class="tabla_add_slider">
	<tr>
		<th>Modificar Vehiculo de Slider</th>
	</tr>
</table>

<form action="php/editar_opcion_slider.php" class="formulario_slider" method="POST" enctype="multipart/form-data">
	<div class="titulo_slider">
		<p>Nombre del slide</p>
	    <input type="text" id="titulo_ed_slider" placeholder="Escriba aquí el nombre de la imagen" value="<?php echo $nombre;?>" name="titulo_ed_slider" required>
	</div>
		<input type="hidden" name="cod_ed_slider" value="<?php echo $cod?>">
	<div class="imagen_slider">
	    <p>Seleccione una imagen:</p>
	    <?php if ($imagen != "") 
	    	echo'<p><img src="'.$imagen.'" style="width: 120px;  HEIGHT:100px ; display:inline" class="form-control" value ="'.$imagen.'"></p>'; ?>
	    <input type="hidden" name="MAX_ED_FILE_SIZE" value="800400">
	    <input type="file" id="imagen_ed_slider" name="imagen_ed_slider" value="<?php echo $imagen;?>">
	</div>

	<div class="boton_slider">
	    <input type="submit" name="editar_slider" value="Aceptar información">
	</div>            
</form>
<?php
mysqli_close($con); 
?>