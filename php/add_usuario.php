<?php 

include('../conexion.php');

$asw = mysqli_query($con, "SELECT usuario FROM administrador where login ='$login'");
$ter=mysqli_fetch_array($asw, MYSQLI_NUM);
    $esta = $ter[0];
if ($esta == "si") {
    echo "entra";
    header("Location: administracion.php");
}

?>

<table class="tabla_add_usuario">
	<tr>
		<th>Añadir Usuario</th>
	</tr>
</table>

<form action="php/add_opcion_usuario.php" class="formulario_usuario" method="POST" enctype="multipart/form-data">
	<div class="nombre_usuario">
	    <p>Nombre del usuario:</p>
	    <input type="text" id="nombre_usuario" placeholder="Escriba aquí el nombre del usuario" name="nombre_usuario" required>
	</div>

	<div class="login_usuario">
	    <p>Login del usuario:</p>
	    <input type="text" id="login_usuario" placeholder="Escriba aquí el login del usuario" name="login_usuario" required>
	</div>

	<div class="contra_usuario">
	    <p>Contraseña del usuario:</p>
	    <input type="password" id="contra_usuario" placeholder="Escriba aquí la contraseña del usuario" name="contra_usuario" required>
	</div>


	<div class="boton_usuario">
	    <input type="submit" name="publicar_usuario" value="Guardar usuario">
	</div>            
</form>

