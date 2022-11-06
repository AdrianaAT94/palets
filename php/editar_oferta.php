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

$elem = $_GET['editar_oferta'];
$result = mysqli_query($con, "SELECT codigo, nombre_es, nombre_gl, nombre_en, pdf, imagen, texto_es, texto_gl, texto_en FROM ofertas where codigo ='$elem'");
$row=mysqli_fetch_array($result, MYSQLI_NUM);
	$cod = $row[0];
	$nombre_es = $row[1];
	$nombre_gl = $row[2];
	$nombre_en = $row[3];
	$pdf = $row[4];
	$imagen = $row[5];
	$texto_es = $row[6];
	$texto_gl = $row[7];
	$texto_en = $row[8];

?>

<table class="tabla_add_oferta">
	<tr>
		<th>Modificar Oferta</th>
	</tr>
</table>

<form action="php/editar_opcion_oferta.php" class="formulario_oferta" method="POST" enctype="multipart/form-data">
	<div class="titulo_oferta">
	    <p>Título de la oferta (español):</p>
	    <input type="text" id="titulo_ed_oferta" placeholder="Escriba aquí el título de la oferta" value="<?php echo $nombre_es;?>" name="titulo_es_ed_oferta" required>
	</div>
	<div class="titulo_oferta">
	    <p>Título de la oferta (gallego):</p>
	    <input type="text" id="titulo_ed_oferta" placeholder="Escriba aquí el título de la oferta" value="<?php echo $nombre_gl;?>" name="titulo_gl_ed_oferta" required>
	</div>
	<div class="titulo_oferta">
	    <p>Título de la oferta (ingles):</p>
	    <input type="text" id="titulo_ed_oferta" placeholder="Escriba aquí el título de la oferta" value="<?php echo $nombre_en;?>" name="titulo_en_ed_oferta" required>
	</div>
		<input type="hidden" name="cod_ed_oferta" value="<?php echo $cod;?>">
	<div class="imagen_oferta">
	    <p>Seleccione una imagen:</p>
	    <?php if ($imagen != "") 
	    	echo'<p><img src="'.$imagen.'" style="width: 120px;  HEIGHT:100px ; display:inline" class="form-control" value ="'.$imagen.'"></p>'; ?>
	    <input type="hidden" name="MAX_ED_FILE_SIZE" value="800400">
	    <input type="file" id="imagen_ed_oferta" name="imagen_ed_oferta">
	</div>

	<div class="pdf_oferta">
	    <p>Seleccione un pdf:</p>
	    <input type="file" id="pdf_ed_oferta" name="pdf_ed_oferta">
	</div>

	<div class="texto_oferta">
	    <p>Descripción de la oferta (español):</p>
		<textarea class="des_oferta" id="descripcion_oferta" placeholder="Editor de texto" name="descripcion_es_ed_oferta"><?php echo $texto_es;?></textarea>
	</div>

	<div class="texto_oferta">
	    <p>Descripción de la oferta (gallego):</p>
		<textarea class="des_oferta" id="descripcion_oferta" placeholder="Editor de texto" name="descripcion_gl_ed_oferta"><?php echo $texto_gl;?></textarea>
	</div>

	<div class="texto_oferta">
	    <p>Descripción de la oferta (ingles):</p>
		<textarea class="des_oferta" id="descripcion_oferta" placeholder="Editor de texto" name="descripcion_en_ed_oferta"><?php echo $texto_en;?></textarea>
	</div>

	<div class="boton_oferta">
	    <input type="submit" name="editar_oferta" value="Aceptar información">
	</div>            
</form>
<?php
mysqli_close($con); 
?>