<table class="tabla_add_producto">
	<tr>
		<th>Añadir Productos</th>
	</tr>
</table>

<form action="php/add_opcion_producto.php" class="formulario_producto" method="POST" enctype="multipart/form-data">
	<div class="titulo_producto">
	    <p>Nombre del producto (español):</p>
	    <input type="text" id="nombre_producto" placeholder="Escriba aquí el nombre del producto" name="nombre_es_producto" required>
	</div>

	<div class="titulo_producto">
	    <p>Nombre del producto (gallego):</p>
	    <input type="text" id="nombre_producto" placeholder="Escriba aquí el nombre del producto" name="nombre_gl_producto" required>
	</div>

	<div class="titulo_producto">
	    <p>Nombre del producto (ingles):</p>
	    <input type="text" id="nombre_producto" placeholder="Escriba aquí el nombre del producto" name="nombre_en_producto" required>
	</div>


	<div class="precio_producto">
	    <p>Precio del producto:</p>
	    <input type="text" id="precio_producto" placeholder="Escriba aquí el precio del producto" name="precio_producto" required>
	</div>

	<div class="texto_producto">
	    <p>Descripción del producto (español):</p>
		<textarea class="desc_producto" id="descripcion_producto" placeholder="Editor de texto" name="descripcion_es_producto"></textarea>
	</div>

	<div class="texto_producto">
	    <p>Descripción del producto (gallego):</p>
		<textarea class="desc_producto" id="descripcion_producto" placeholder="Editor de texto" name="descripcion_gls_producto"></textarea>
	</div>

	<div class="texto_producto">
	    <p>Descripción del producto (ingles):</p>
		<textarea class="desc_producto" id="descripcion_producto" placeholder="Editor de texto" name="descripcion_en_producto"></textarea>
	</div>


	<div class="imagenes_producto">
		<h3>Imágenes de producto</h3>
		<h5>SELECCIONE IMÁGEN PRINCIPAL</h5>
		<div class="imagen_producto">
		    <p>Seleccione una imagen:</p>
	    	<input type="hidden" name="MAX_FILE_SIZE1" value="800400">
		    <input type="file" id="imagen1_producto" name="imagen1_producto">
		</div>
		
		<h5>SELECCIONE IMÁGENES SECUNDARIAS</h5>
		<div class="imagen_producto">
		    <p>Seleccione una imagen:</p>
	    	<input type="hidden" name="MAX_FILE_SIZE2" value="800400">
		    <input type="file" id="imagen2_producto" name="imagen2_producto">
		</div>
		<div class="imagen_producto">
		    <p>Seleccione una imagen:</p>
	    	<input type="hidden" name="MAX_FILE_SIZE3" value="800400">
		    <input type="file" id="imagen3_producto" name="imagen3_producto">
		</div>
		<div class="imagen_producto">
		    <p>Seleccione una imagen:</p>
	    	<input type="hidden" name="MAX_FILE_SIZE4" value="800400">
		    <input type="file" id="imagen4_producto" name="imagen4_producto">
		</div>
	</div>

	<div class="boton_producto">
	    <input type="submit" name="publicar_producto" value="Publicar producto">
	</div>            
</form>