<table class="tabla_add_oferta">
	<tr>
		<th>Añadir Oferta</th>
	</tr>
</table>

<form action="php/add_opcion_oferta.php" class="formulario_oferta" method="POST" enctype="multipart/form-data">
	<div class="titulo_oferta">
	    <p>Título de la oferta (español):</p>
	    <input type="text" id="titulo_oferta" placeholder="Escriba aquí el título de la oferta" name="titulo_es_oferta" required>
	</div>
	<div class="titulo_oferta">
	    <p>Título de la oferta (gallego):</p>
	    <input type="text" id="titulo_oferta" placeholder="Escriba aquí el título de la oferta" name="titulo_gl_oferta" required>
	</div>
	<div class="titulo_oferta">
	    <p>Título de la oferta (ingles):</p>
	    <input type="text" id="titulo_oferta" placeholder="Escriba aquí el título de la oferta" name="titulo_en_oferta" required>
	</div>

	<div class="imagen_oferta">
	    <p>Seleccione una imagen:</p>
	    <input type="hidden" name="MAX_FILE_SIZE" value="800400">
	    <input type="file" id="imagen_oferta" name="imagen_oferta">
	</div>

	<div class="pdf_oferta">
	    <p>Seleccione un pdf:</p>
	    <input type="file" id="pdf_oferta" name="pdf_oferta">
	</div>

	<div class="texto_oferta">
	    <p>Descripción de la oferta (español):</p>
		<textarea class="des_oferta" id="descripcion_oferta" placeholder="Editor de texto" name="descripcion_es_oferta"></textarea>
	</div>

	<div class="texto_oferta">
	    <p>Descripción de la oferta (gallego):</p>
		<textarea class="des_oferta" id="descripcion_oferta" placeholder="Editor de texto" name="descripcion_gl_oferta"></textarea>
	</div>

	<div class="texto_oferta">
	    <p>Descripción de la oferta (ingles):</p>
		<textarea class="des_oferta" id="descripcion_oferta" placeholder="Editor de texto" name="descripcion_en_oferta"></textarea>
	</div>

	<div class="boton_oferta">
	    <input type="submit" name="publicar_oferta" value="Publicar oferta">
	</div>            
</form>

