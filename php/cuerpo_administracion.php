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
$result = mysqli_query($con, "SELECT usuario FROM administrador where login ='$login'");
$row=mysqli_fetch_array($result, MYSQLI_NUM);
	$user = $row[0];

?>
<div class="listas">
	<div class="lista_opcions_admin">
		<ul>
			<li class="ofertas_admin"><img src="./images/iconos_areaprivada/ap_ofertas.png">OFERTAS
				<div class="lista_subopcions_oferta">
					<ul>
						<a href="?list_ofertas"><li class="list_ofertas">LISTADO DE OFERTAS</li></a>
						<a href="?add_oferta"><li class="add_oferta">AÑADIR OFERTA</li></a>
					</ul>
				</div>
			</li>
			<li class="noticias_admin"><img src="./images/iconos_areaprivada/ap_noticias.png">NOTICIAS
				<div class="lista_subopcions_noticia">
					<ul>
						<a href="?list_noticias"><li class="list_noticias">LISTADO DE NOTICIAS</li></a>
						<a href="?add_noticia"><li class="add_noticia">AÑADIR NOTICIA</li></a>
					</ul>
				</div>
			</li>
			<li class="productos_admin"><img src="./images/iconos_areaprivada/ap_productos.png">PRODUCTOS
				<div class="lista_subopcions_producto">
					<ul>
						<a href="?list_productos"><li class="list_productos">LISTADO DE PRODUCTOS</li></a>
						<a href="?add_producto"><li class="add_producto">AÑADIR PRODUCTO</li></a>
					</ul>
				</div>
			</li>
			<li class="slider_admin"><img src="./images/iconos_areaprivada/ap_slider.png">DATOS SLIDER
				<div class="lista_subopcions_slider">
					<ul>
						<a href="?list_slider"><li class="list_slider">FOTOS DE SLIDER</li></a>
						<a href="?add_slider"><li class="add_slider">AÑADIR FOTO SLIDER</li></a>
					</ul>
				</div>
			</li>
			<a class="no_estilo" href="?editar_clave"><li class="clave_user"><img src="./images/iconos_areaprivada/ap_usuarios.png">CONTRASEÑA</li></a>
			<?php if ($user == "no") { ?>
			<li class="usuarios_admin"><img src="./images/iconos_areaprivada/ap_usuarios.png">USUARIOS
				<div class="lista_subopcions_usuario">
					<ul>
						<a href="?list_usuarios"><li class="list_usuarios">LISTADO DE USUARIOS</li></a>
						<a href="?add_usuario"><li class="add_usuario">AÑADIR USUARIO</li></a>
					</ul>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<div class="cuerpo_opcion_admin">
	<?php if (isset($_GET['list_ofertas'])) { ?>
	<div class="l_ofertas">
		<div class="ofertas_fila1">
			<div>
				<h2>OFERTAS</h2>
			</div>
			<div>
				<a href="?add_oferta"><p class="enl_oferta">Añadir oferta</p></a>
			</div>
			<div class="oculto">
				
			</div>
			<div class="clear"></div>
		</div>
        <div class="en_oferta"><?php include('ofertas.php')?></div>
	</div><?php }?>
	<?php if (isset($_GET['add_oferta'])) { ?>
	<div class="a_ofertas">
		<div class="ofertas_fila1">
			<div>
				<h2>OFERTAS</h2>
			</div>
			<div>
				
			</div>
			<div class="oculto">
			</div>
			<div class="clear"></div>
		</div>
        <div class="in_oferta"><?php include('add_oferta.php')?></div>
	</div><?php }?>
<?php if (isset($_GET['list_noticias'])) { ?>
	<div class="l_noticias">
		<div class="noticias_fila1">
			<div>
				<h2>NOTICIAS</h2>
			</div>
			<div>
				<a href="?add_noticia"><p class="enl_noticia">Añadir noticia</p></a>
			</div>
			<div class="oculto">
				
			</div>
			<div class="clear"></div>
		</div>
        <div class="en_noticia"><?php include('noticias.php')?></div>
	</div><?php }?>
	<?php if (isset($_GET['add_noticia'])) { ?>
	<div class="a_noticias">
		<div class="noticias_fila1">
			<div>
				<h2>NOTICIAS</h2>
			</div>
			<div>
				
			</div>
			<div class="oculto">
			</div>
			<div class="clear"></div>
		</div>
        <div class="in_noticia"><?php include('add_noticia.php')?></div>
	</div><?php }?>
<?php if (isset($_GET['list_usuarios'])) { ?>
	<div class="l_usuarios">
		<div class="usuarios_fila1">
			<div>
				<h2>USUARIOS</h2>
			</div>
			<div>
				<a href="?add_usuario"><p class="enl_usuario">Añadir usuario</p></a>
			</div>
			<div class="oculto">
				
			</div>
			<div class="clear"></div>
		</div>
        <div class="en_usuario"><?php include('usuarios.php')?></div>
	</div><?php }?>
	<?php if (isset($_GET['add_usuario'])) { ?>
	<div class="a_usuarios">
		<div class="usuarios_fila1">
			<div>
				<h2>USUARIOS</h2>
			</div>
			<div>
				
			</div>
			<div class="oculto">
			</div>
			<div class="clear"></div>
		</div>
        <div class="in_usuario"><?php include('add_usuario.php')?></div>
	</div><?php }?>
<?php if (isset($_GET['list_productos'])) { ?>
	<div class="l_productos">
		<div class="productos_fila1">
			<div>
				<h2>PRODUCTOS</h2>
			</div>
			<div>
				<a href="?add_producto"><p class="enl_producto">Añadir productos</p></a>
			</div>
			<div class="oculto">
				
			</div>
			<div class="clear"></div>
		</div>
        <div class="en_producto"><?php include('productos.php')?></div> 
	</div><?php }?>
	<?php if (isset($_GET['add_producto'])) { ?>
	<div class="a_productos">
		<div class="productos_fila1">
			<div>
				<h2>PRODUCTOS</h2>
			</div>
			<div>
				
			</div>
			<div class="oculto">
				
			</div>
			<div class="clear"></div>
		</div>
        <div class="in_producto"><?php include('add_producto.php')?></div>		
	</div><?php }?>
	<?php if (isset($_GET['list_slider'])) { ?>
	<div class="l_slider">
		<div class="slider_fila1">
			<div>
				<h2>FOTOS DE SLIDER</h2>
			</div>
			<div>
				<a href="?add_slider"><p class="enl_slider">Añadir foto slider</p></a>
			</div>
			<div class="oculto">
				
			</div>
			<div class="clear"></div>
		</div>
        <div class="en_slider"><?php include('slider.php')?></div> 
	</div><?php }?>
	<?php if (isset($_GET['add_slider'])) { ?>
	<div class="a_slider">
		<div class="slider_fila1">
			<div>
				<h2>FOTOS DE SLIDER</h2>
			</div>
			<div>
				
			</div>
			<div class="oculto">
				
			</div>
			<div class="clear"></div>
		</div>
        <div class="in_slider"><?php include('add_slider.php')?></div>		
	</div><?php }?>
	<?php if (isset($_GET['borrar_oferta'])) { ?>
        <div><?php include('borrar_oferta.php')?></div>	
        <?php }?>
	<?php if (isset($_GET['borrar_noticia'])) { ?>
        <div><?php include('borrar_noticia.php')?></div>	
        <?php }?>
    <?php if (isset($_GET['borrar_producto'])) { ?>
        <div><?php include('borrar_producto.php')?></div>	
        <?php }?>
    <?php if (isset($_GET['borrar_slider'])) { ?>
        <div><?php include('borrar_slider.php')?></div>	
        <?php }?>
    <?php if (isset($_GET['borrar_usuario'])) { ?>
        <div><?php include('borrar_usuario.php')?></div>	
        <?php }?>
    <?php if (isset($_GET['editar_clave'])) { ?>
    	<div class="ed_clave">
    		<div>
				<h2>CONTRASEÑA</h2>
			</div>
        <div class="in_clave"><?php include('editar_clave.php')?></div></div>
        <?php }?>
    <?php if (isset($_GET['editar_oferta'])) { ?>
    	<div class="ed_oferta">
    		<div>
				<h2>OFERTAS</h2>
			</div>
        <div class="in_oferta"><?php include('editar_oferta.php')?></div></div>
        <?php }?>
    <?php if (isset($_GET['editar_noticia'])) { ?>
    	<div class="ed_noticia">
    		<div>
				<h2>NOTICIAS</h2>
			</div>
        <div class="in_noticia"><?php include('editar_noticia.php')?></div></div>
        <?php }?>
    <?php if (isset($_GET['editar_usuario'])) { ?>
    	<div class="ed_usuario">
    		<div>
				<h2>USUARIOS</h2>
			</div>
        <div class="in_usuario"><?php include('editar_usuario.php')?></div></div>
        <?php }?>
    <?php if (isset($_GET['editar_producto'])) { ?>
		<div class="ed_producto">
			<div>
				<h2>PRODUCTOS</h2>
			</div>
        <div class="in_producto"><?php include('editar_producto.php')?></div></div>
        <?php }?>
    <?php if (isset($_GET['editar_slider'])) { ?>
		<div class="ed_slider">
			<div>
				<h2>FOTOS DE SLIDER</h2>
			</div>
        <div class="in_slider"><?php include('editar_slider.php')?></div></div>
        <?php }?>


	<?php if (!isset($_GET['list_ofertas']) && !isset($_GET['add_producto']) && !isset($_GET['add_oferta']) && !isset($_GET['list_productos']) 
	&& !isset($_GET['borrar_oferta']) && !isset($_GET['borrar_producto']) && !isset($_GET['editar_oferta']) && !isset($_GET['editar_producto'])
	&& !isset($_GET['list_slider']) && !isset($_GET['add_slider']) && !isset($_GET['borrar_slider']) && !isset($_GET['editar_slider'])
	&& !isset($_GET['list_noticias']) && !isset($_GET['add_noticia']) && !isset($_GET['borrar_noticia']) && !isset($_GET['editar_noticia'])
	&& !isset($_GET['list_usuarios']) && !isset($_GET['add_usuario']) && !isset($_GET['borrar_usuario']) && !isset($_GET['editar_usuario'])
	&& !isset($_GET['editar_clave'])) {?>
		<div class="l_ofertas">
		<div class="ofertas_fila1">
			<div>
				<h2>OFERTAS</h2>
			</div>
			<div>
				<a href="?add_oferta"><p class="enl_oferta">Añadir oferta</p></a>
			</div>
			<div>
			</div>
			<div class="clear"></div>
		</div>
        <div class="en_oferta"><?php include('ofertas.php')?></div>
	</div><?php } ?>
	<div class="clear"></div>
</div>
<div class="clear"></div>