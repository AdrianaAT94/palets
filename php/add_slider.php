<table class="tabla_add_slider">
	<tr>
		<th>Añadir Vehiculo de Slider</th>
	</tr>
</table>

<form action="php/add_opcion_slider.php" class="formulario_slider" method="POST" enctype="multipart/form-data">
	<div class="titulo_slider">
		<p>Nombre del slide</p>
	    <input type="text" id="titulo_slider" placeholder="Escriba aquí el nombre de la imagen" name="titulo_slider" required>
	</div>

	<div class="imagen_slider">
	    <p>Seleccione una imagen:</p>
	    <input type="hidden" name="MAX_FILE_SIZE" value="800400">
	    <input type="file" id="imagen_slider" name="imagen_slider">
	</div>

	<div class="boton_slider">
	    <input type="submit" name="publicar_slider" value="Publicar foto en slider">
	</div>            
</form>

