<table class="tabla_add_noticia">
	<tr>
		<th>Añadir Noticia</th>
	</tr>
</table>

<form action="php/add_opcion_noticia.php" class="formulario_noticia" method="POST" enctype="multipart/form-data">
	<div class="titulo_noticia">
	    <p>Título de la noticia (español):</p>
	    <input type="text" id="titulo_noticia" placeholder="Escriba aquí el título de la noticia" name="titulo_es_noticia" required>
	</div>

	<div class="titulo_noticia">
	    <p>Título de la noticia (gallego):</p>
	    <input type="text" id="titulo_noticia" placeholder="Escriba aquí el título de la noticia" name="titulo_gl_noticia" required>
	</div>

	<div class="titulo_noticia">
	    <p>Título de la noticia (ingles):</p>
	    <input type="text" id="titulo_noticia" placeholder="Escriba aquí el título de la noticia" name="titulo_en_noticia" required>
	</div>

	<div class="imagen_noticia">
	    <p>Seleccione una imagen:</p>
	    <input type="hidden" name="MAX_FILE_SIZE" value="800400">
	    <input type="file" id="imagen_noticia" name="imagen_noticia">
	</div>

	<div class="texto_noticia">
	    <p>Descripción de la noticia (español):</p>
		<textarea class="des_noticia" id="descripcion_noticia" placeholder="Editor de texto" name="descripcion_es_noticia"></textarea>
	</div>

	<div class="texto_noticia">
	    <p>Descripción de la noticia (gallego):</p>
		<textarea class="des_noticia" id="descripcion_noticia" placeholder="Editor de texto" name="descripcion_gl_noticia"></textarea>
	</div>

	<div class="texto_noticia">
	    <p>Descripción de la noticia (ingles):</p>
		<textarea class="des_noticia" id="descripcion_noticia" placeholder="Editor de texto" name="descripcion_en_noticia"></textarea>
	</div>

	<div class="boton_noticia">
	    <input type="submit" name="publicar_noticia" value="Publicar noticia">
	</div>            
</form>

