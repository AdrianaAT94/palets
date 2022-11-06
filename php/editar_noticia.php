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

$elem = $_GET['editar_noticia'];
$result = mysqli_query($con, "SELECT codigo, nombre_es, nombre_gl, nombre_en, imagen, texto_es, texto_gl, texto_en FROM noticias where codigo ='$elem'");
$row=mysqli_fetch_array($result, MYSQLI_NUM);
	$cod = $row[0];
	$nombre_es = $row[1];
	$nombre_gl = $row[2];
	$nombre_en = $row[3];
	$imagen = $row[4];
	$texto_es = $row[5];
	$texto_gl = $row[6];
	$texto_en = $row[7];

?>

<table class="tabla_add_noticia">
	<tr>
		<th>Modificar Noticia</th>
	</tr>
</table>

<form action="php/editar_opcion_noticia.php" class="formulario_noticia" method="POST" enctype="multipart/form-data">
	<div class="titulo_noticia">
	    <p>Título de la noticia (español):</p>
	    <input type="text" id="titulo_ed_noticia" placeholder="Escriba aquí el título de la noticia" value="<?php echo $nombre_es;?>" name="titulo_es_ed_noticia" required>
	</div>
	<div class="titulo_noticia">
	    <p>Título de la noticia (gallego):</p>
	    <input type="text" id="titulo_ed_noticia" placeholder="Escriba aquí el título de la noticia" value="<?php echo $nombre_gl;?>" name="titulo_gl_ed_noticia" required>
	</div>
	<div class="titulo_noticia">
	    <p>Título de la noticia (ingles):</p>
	    <input type="text" id="titulo_ed_noticia" placeholder="Escriba aquí el título de la noticia" value="<?php echo $nombre_en;?>" name="titulo_en_ed_noticia" required>
	</div>
		<input type="hidden" name="cod_ed_noticia" value="<?php echo $cod;?>">
	<div class="imagen_noticia">
	    <p>Seleccione una imagen:</p>
	    <?php if ($imagen != "") 
	    	echo'<p><img src="'.$imagen.'" style="width: 120px;  HEIGHT:100px ; display:inline" class="form-control" value ="'.$imagen.'"></p>'; ?>
	    <input type="hidden" name="MAX_ED_FILE_SIZE" value="800400">
	    <input type="file" id="imagen_ed_noticia" name="imagen_ed_noticia">
	</div>
	
	<div class="texto_noticia">
	    <p>Descripción de la noticia (español):</p>
		<textarea class="des_noticia" id="descripcion_noticia" placeholder="Editor de texto" name="descripcion_es_ed_noticia"><?php echo $texto_es;?></textarea>
	</div>
	
	<div class="texto_noticia">
	    <p>Descripción de la noticia (gallego):</p>
		<textarea class="des_noticia" id="descripcion_noticia" placeholder="Editor de texto" name="descripcion_gl_ed_noticia"><?php echo $texto_gl;?></textarea>
	</div>
	
	<div class="texto_noticia">
	    <p>Descripción de la noticia (ingles):</p>
		<textarea class="des_noticia" id="descripcion_noticia" placeholder="Editor de texto" name="descripcion_en_ed_noticia"><?php echo $texto_en;?></textarea>
	</div>

	<div class="boton_noticia">
	    <input type="submit" name="editar_noticia" value="Aceptar información">
	</div>            
</form>
<?php
mysqli_close($con); 
?>