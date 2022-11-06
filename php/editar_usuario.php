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

$asw = mysqli_query($con, "SELECT usuario FROM administrador where login ='$login'");
$ter=mysqli_fetch_array($asw, MYSQLI_NUM);
    $esta = $ter[0];
if ($esta == "si") {
    echo "entra";
    header("Location: administracion.php");
}

$elem = $_GET['editar_usuario'];
$result = mysqli_query($con, "SELECT id, login, clave, nombre FROM administrador where id ='$elem'");
$row=mysqli_fetch_array($result, MYSQLI_NUM);
	$cod = $row[0];
	$login_usuario = $row[1];
	$clave = $row[2];
	$nombre = $row[3];

?>

<table class="tabla_add_usuario">
	<tr>
		<th>Modificar usuario</th>
	</tr>
</table>

<form action="php/editar_opcion_usuario.php" class="formulario_noticia" method="POST" enctype="multipart/form-data">
	<div class="nombre_usuario">
	    <p>Nombre del usuario:</p>
	    <input type="text" id="nombre_usuario" placeholder="Escriba aquí el nombre del usuario" name="nombre_ed_usuario" value="<?php echo $nombre;?>" required>
	</div>

	<div class="login_usuario">
	    <p>Login del usuario:</p>
	    <input type="text" id="login_usuario" placeholder="Escriba aquí el login del usuario" name="login_ed_usuario" value="<?php echo $login_usuario;?>" required>
	</div>

	<div class="contra_usuario">
	    <p>Contraseña del usuario:</p>
	    <input type="password" id="contra_usuario" placeholder="Escriba aquí la contraseña del usuario" name="contra_ed_usuario">
	</div>
	<input type="hidden" name="cod_ed_usuario" value="<?php echo $cod;?>">

	<div class="boton_noticia">
	    <input type="submit" name="editar_usuario" value="Aceptar información">
	</div>            
</form>
<?php
mysqli_close($con); 
?>