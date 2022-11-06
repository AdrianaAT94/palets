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

$elem = $_GET['editar_producto'];
$result = mysqli_query($con, "SELECT codigo, nombre_es, nombre_gl, nombre_en, precio, descripcion_es, descripcion_gl, descripcion_en, imagen1, imagen2, imagen3, imagen4 FROM productos where codigo ='$elem'");
$row=mysqli_fetch_array($result, MYSQLI_NUM);
	$cod = $row[0];
	$nombre_es = $row[1];
	$nombre_gl = $row[2];
	$nombre_en = $row[3];
	$precio = $row[4];
	$descripcion_es = $row[5];
	$descripcion_gl = $row[6];
	$descripcion_en = $row[7];
	$imagen1 = $row[8];
	$imagen2 = $row[9];
	$imagen3 = $row[10];
	$imagen4 = $row[11];
?>

<table class="tabla_add_producto">
	<tr>
		<th>Modificar Producto</th>
	</tr>
</table>

<form action="php/editar_opcion_producto.php" class="formulario_producto" method="POST" enctype="multipart/form-data">
	<div class="titulo_producto">
	    <p>Nombre del producto (español):</p>
	    <input type="text" id="nombre_producto" placeholder="Escriba aquí el nombre del producto" name="nombre_es_ed_producto" value="<?php echo $nombre_es;?>" required>
		<input type="hidden" name="cod_ed_producto" value="<?php echo $cod;?>">
	</div>
	<div class="titulo_producto">
	    <p>Nombre del producto (gallego):</p>
	    <input type="text" id="nombre_producto" placeholder="Escriba aquí el nombre del producto" name="nombre_gl_ed_producto" value="<?php echo $nombre_gl;?>" required>
		<input type="hidden" name="cod_ed_producto" value="<?php echo $cod;?>">
	</div>
	<div class="titulo_producto">
	    <p>Nombre del producto (ingles):</p>
	    <input type="text" id="nombre_producto" placeholder="Escriba aquí el nombre del producto" name="nombre_en_ed_producto" value="<?php echo $nombre_en;?>" required>
		<input type="hidden" name="cod_ed_producto" value="<?php echo $cod;?>">
	</div>

	<div class="precio_producto">
	    <p>Precio del producto:</p>
	    <input type="text" id="precio_producto" placeholder="Escriba aquí el precio del producto" name="precio_ed_producto" value="<?php echo $precio;?>" required>
	</div>

	<div class="texto_producto">
	    <p>Descripción del producto (español):</p>
		<textarea class="desc_producto" id="descripcion_producto" placeholder="Editor de texto" name="descripcion_es_ed_producto"><?php echo $descripcion_es;?></textarea>
	</div>

	<div class="texto_producto">
	    <p>Descripción del producto (gallego):</p>
		<textarea class="desc_producto" id="descripcion_producto" placeholder="Editor de texto" name="descripcion_gl_ed_producto"><?php echo $descripcion_gl;?></textarea>
	</div>

	<div class="texto_producto">
	    <p>Descripción del producto (ingles):</p>
		<textarea class="desc_producto" id="descripcion_producto" placeholder="Editor de texto" name="descripcion_en_ed_producto"><?php echo $descripcion_en;?></textarea>
	</div>

	<div class="imagenes_producto">
		<h3>Imágenes de producto</h3>
		<h5>SELECCIONE IMÁGEN PRINCIPAL</h5>
		<div class="imagen_producto">
		    <p>Seleccione una imagen:</p>
			<?php if ($imagen1 != "") 
	    		echo'<p><img src="'.$imagen1.'" style="width: 120px;  HEIGHT:100px ; display:inline" class="form-control" value ="'.$imagen1.'"></p>'; ?>	    	<input type="hidden" name="MAX_FILE_SIZE1" value="800400">
		    <input type="file" id="imagen1_ed_producto" name="imagen1_ed_producto">
		</div>
		
		<h5>SELECCIONE IMÁGENES SECUNDARIAS</h5>
		<div class="imagen_producto">
		    <p>Seleccione una imagen:</p>
			<?php if ($imagen2 != "") 
		    	echo'<p><img src="'.$imagen2.'" style="width: 120px;  HEIGHT:100px ; display:inline" class="form-control" value ="'.$imagen2.'"></p>'; ?>	    	<input type="hidden" name="MAX_FILE_SIZE2" value="800400">
		    <input type="file" id="imagen2_ed_producto" name="imagen2_ed_producto">
		</div>
		<div class="imagen_producto">
		    <p>Seleccione una imagen:</p>
			<?php if ($imagen3 != "") 
	    		echo'<p><img src="'.$imagen3.'" style="width: 120px;  HEIGHT:100px ; display:inline" class="form-control" value ="'.$imagen3.'"></p>'; ?>	    	<input type="hidden" name="MAX_FILE_SIZE3" value="800400">
		    <input type="file" id="imagen3_ed_producto" name="imagen3_ed_producto">
		</div>
		<div class="imagen_producto">
		    <p>Seleccione una imagen:</p>
			<?php if ($imagen4 != "") 
	    		echo'<p><img src="'.$imagen4.'" style="width: 120px;  HEIGHT:100px ; display:inline" class="form-control" value ="'.$imagen4.'"></p>'; ?>	    	<input type="hidden" name="MAX_FILE_SIZE4" value="800400">
		    <input type="file" id="imagen4_ed_producto" name="imagen4_ed_producto">
		</div>
	</div>

	<div class="boton_producto">
	    <input type="submit" name="editar_producto" value="Aceptar información">
	</div>            
</form>
<?php
mysqli_close($con); ?>