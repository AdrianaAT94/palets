
        <div class="cabecera">
            <div class="redes_sociales pc">
                <div class="twitter">
                    <a href="#" target="_blank"><img src="images/botones/twitter.png" alt=""></a>
                </div>
                <div class="face">
                    <a href="#" target="_blank"><img src="images/botones/facebook.png" alt=""></a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="idiomas">
                <div class="lng_gl">
                    <a href="?lan=gl">
                        <img src="images/botones/gl.png" alt="GL">
                    </a>
                </div>
                <div class="lng_esp">
                    <a href="?lan=es">
                        <img src="images/botones/es.png" alt="ES">
                    </a>
                </div>
                <div class="lng_en">
                    <a href="?lan=en">
                        <img src="images/botones/en.png" alt="EN">
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="submenu_contacto pc">
                <div class="cont_peq tel">
                    <div class="img_cont_peq">
                         <a href="tel:666666666"><img src="images/botones/telf.png" alt="telf"></a>
                    </div>
                    <div class="text_cont_peq">
                        <h3>
                            <a href="tel:666666666">+34666666666</a>
                        </h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="cont_peq correo">
                    <div class="img_cont_peq">
                        <a href="mailto:correo@correo.com"><img src="images/botones/correo.png" alt="correo"></a>                        
                    </div>
                    <div class="text_cont_peq">
                        <h3>
                            <a href="mailto:correo@correo.com">correo@correo.com</a>
                        </h3>
                    </div>
                    <div class="clear"></div>
                </div>                
                <div class="cont_peq ubi">
                    <div class="img_cont_peq">
                        <img src="images/botones/ubi.png" alt="ubicacion">                        
                    </div>
                    <div class="text_cont_peq">
                        <h3>
                            Ribeira
                        </h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="logo_central">
                <img src="" alt="LOGO" />
            </div>
            <div class="menu_movil mvl tablet">
                <div class="img_menu_movil">
                    <img src="images/botones/menu_movil.png">
                </div>

                <div class="contenido_menu_movil">
                    <ul>                    
                        <li><a href="inicio.php?lan=en#seccion1">BUSINESS</a></li>
                        <li><a href="inicio.php?lan=en#seccion2">PRODUCTS</a></li>
                        <li><a href="inicio.php?lan=en#seccion3">QUALITY</a></li>
                        <li><a href="inicio.php?lan=en#seccion7">OFFERS</a></li>
                        <li><a href="inicio.php?lan=en#seccion4">NEWS</a></li>
                        <li><a href="inicio.php?lan=en#seccion5">CONTACT</a></li>
                        <div class="clear"></div>                    
                    </ul>
                </div>
            </div>          
            <div class="header">
                <?php 
                //Ejecutamos la sentencia SQL
                $consulta_slider = "SELECT * FROM slider ORDER BY id DESC LIMIT 5";
                $rs_slider = mysqli_query($con, $consulta_slider);
                $i = 1;
                ?>
                <div class="slider">
                    <?php 
                    while($row = mysqli_fetch_assoc($rs_slider)) {  
                        if ($i == 1){ ?>                            
                            <div class="image_slider uno"><img src="<?php echo $row['imagen']; ?>" alt="Slider1"></div>  
                        <?php } 
                        if ($i == 2){ ?>
                            <div class="image_slider dos"><img src="<?php echo $row['imagen']; ?>" alt="Slider2"></div>                             
                        <?php }
                        if ($i == 3){ ?>
                            <div class="image_slider tres"><img src="<?php echo $row['imagen']; ?>" alt="Slider3"></div>                             
                        <?php }
                        if ($i == 4){ ?>
                            <div class="image_slider cuatro"><img src="<?php echo $row['imagen']; ?>" alt="Slider4"></div>                             
                        <?php }
                        if ($i == 5){ ?>
                            <div class="image_slider cinco"><img src="<?php echo $row['imagen']; ?>" alt="Slider5"></div>                             
                        <?php }
                        $i++;                                                    
                    } ?>                          
                </div>
                <div class="degradado">
                </div>
            </div>
            <div class="pc">
            <div class="menu pc">
                <div class="contenido_variable">
                    <ul class="menu_principal">
                        <li class="boton_seccion1 smoothScroll"><a href="inicio.php?lan=en#seccion1">BUSINESS</a></li>
                        <li class="boton_seccion2 smoothScroll"><a href="inicio.php?lan=en#seccion2">PRODUCTS</a></li>
                        <li class="boton_seccion3 smoothScroll"><a href="inicio.php?lan=en#seccion3">QUALITY</a></li>
                        <li class="boton_seccion3 smoothScroll"><a href="inicio.php?lan=en#seccion7">OFFERS</a></li>
                        <li class="boton_seccion4 smoothScroll"><a href="inicio.php?lan=en#seccion4">NEWS</a></li>
                        <li class="boton_seccion5 smoothScroll"><a href="inicio.php?lan=en#seccion5">CONTACT</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            </div>     
        </div>
        <div class="cuerpo">
            <div class="seccion seccion1" id ="seccion1">
                <div class="contenido_variable">
                    <div class="titulo_seccion der">
                        <h1><span class="grande">BUSINESS</span></h1>
                    </div>
                    <div class="columna_izquierda">
                        <div class="imagen_columna">
                            <img src="images/palet.jpg" />
                        </div>
                    </div>
                    <div class="columna_derecha">
                        <div class="texto_que">
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>   
            <div class="seccion seccion2" id="seccion2">
                <?php 
                //Ejecutamos la sentencia SQL
                $consulta_productos = "SELECT * FROM productos ORDER BY id DESC LIMIT 6";
                $rs_productos = mysqli_query($con, $consulta_productos);
                $rs_productos2 = mysqli_query($con, $consulta_productos);
                $i = 1;
                ?>
                <div class="contenido_variable">
                    <div class="titulo_seccion der">
                        <h1><span class="grande">PRODUCTS</span></h1>
                    </div>
                    <div class="productos">                        
                    <?php 
                    while($row2 = mysqli_fetch_assoc($rs_productos)) {  
                        if ($i == 1){ ?>                         
                            <div class="item_producto activo" id="producto1">
                                <img src="<?php echo $row2['imagen1']; ?>" alt="Producto1">
                            </div>                            
                        <?php } 
                        if ($i == 2){ ?>                       
                            <div class="item_producto" id="producto2">
                                <img src="<?php echo $row2['imagen1']; ?>" alt="Producto2">
                            </div>                           
                        <?php }
                        if ($i == 3){ ?>                       
                            <div class="item_producto" id="producto3">
                                <img src="<?php echo $row2['imagen1']; ?>" alt="Producto3">
                            </div>                            
                        <?php }
                        if ($i == 4){ ?>                       
                            <div class="item_producto" id="producto4">
                                <img src="<?php echo $row2['imagen1']; ?>" alt="Producto4">
                            </div>                            
                        <?php }
                        if ($i == 5){ ?>                       
                            <div class="item_producto" id="producto5">
                                <img src="<?php echo $row2['imagen1']; ?>" alt="Producto5">
                            </div>                            
                        <?php }
                        if ($i == 6){ ?>                       
                            <div class="item_producto" id="producto6">
                                <img src="<?php echo $row2['imagen1']; ?>" alt="Producto6">
                            </div>                             
                        <?php }
                        $i++;                                                 
                    } ?>
                             
                    <?php 
                    $j = 1;
                    while($row3 = mysqli_fetch_assoc($rs_productos2)) {  
                        if ($j == 1){ ?>                         
                            <div class="des_producto activo" id="des_producto1">
                                <div class="img_des_producto">
                                    <div class="img_gran_producto">
                                        <img id="bigimage1" class="bigimage" src="<?php echo $row3['imagen1']; ?>" alt="Producto1">     
                                    </div>
                                    <div id="carrusel1">
                                        <a href="#" class="izquierda_flecha izquierda_flecha1"><img src="images/flecha_01.png" /></a>
                                        <a href="#" class="derecha_flecha derecha_flecha1"><img src="images/flecha_02.png" /></a>
                                        <div class="carrusel carrusel1">
                                            <div id="imagen1_0"><img class="img_carrusel img_carrusel1" src="<?php echo $row3['imagen1']; ?>" alt="Producto1"/></div>
                                            <div id="imagen1_1"><img class="img_carrusel img_carrusel1" src="<?php echo $row3['imagen2']; ?>" alt="Producto1"/></div>
                                            <div id="imagen1_2"><img class="img_carrusel img_carrusel1" src="<?php echo $row3['imagen3']; ?>" alt="Producto1"/></div>
                                            <div id="imagen1_3"><img class="img_carrusel img_carrusel1" src="<?php echo $row3['imagen4']; ?>" alt="Producto1"/></div>
                                        </div>
                                    </div>                          
                                </div>
                                <div class="texto_producto">
                                    <h3><?php echo $row3['nombre_en']; ?></h3>
                                    <h5>PRICE: <?php echo $row3['precio']; ?> €</h5>
                                    <p><?php echo $row3['descripcion_en']; ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>                           
                        <?php } 
                        if ($j == 2){ ?>                    
                            <div class="des_producto" id="des_producto2">   
                                <div class="img_des_producto">
                                    <div class="img_gran_producto">
                                        <img id="bigimage2" class="bigimage" src="<?php echo $row3['imagen1']; ?>" alt="Producto2">     
                                    </div>
                                    <div id="carrusel2">
                                        <a href="#" class="izquierda_flecha izquierda_flecha2"><img src="images/flecha_01.png" /></a>
                                        <a href="#" class="derecha_flecha derecha_flecha2"><img src="images/flecha_02.png" /></a>
                                        <div class="carrusel carrusel2">
                                            <div id="imagen2_0"><img class="img_carrusel img_carrusel2" src="<?php echo $row3['imagen1']; ?>" alt="Producto2"/></div>
                                            <div id="imagen2_1"><img class="img_carrusel img_carrusel2" src="<?php echo $row3['imagen2']; ?>" alt="Producto2"/></div>
                                            <div id="imagen2_2"><img class="img_carrusel img_carrusel2" src="<?php echo $row3['imagen3']; ?>" alt="Producto2"/></div>
                                            <div id="imagen2_3"><img class="img_carrusel img_carrusel2" src="<?php echo $row3['imagen4']; ?>" alt="Producto2"/></div>
                                        </div>
                                    </div>                          
                                </div>
                                <div class="texto_producto">
                                    <h3><?php echo $row3['nombre_en']; ?></h3>
                                    <h5>PRICE: <?php echo $row3['precio']; ?> €</h5>
                                    <p><?php echo $row3['descripcion_en']; ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>                          
                        <?php }
                        if ($j == 3){ ?>                       
                            <div class="des_producto" id="des_producto3">
                                <div class="img_des_producto">
                                    <div class="img_gran_producto">
                                        <img id="bigimage3" class="bigimage" src="<?php echo $row3['imagen1']; ?>" alt="Producto3">     
                                    </div>
                                    <div id="carrusel3">
                                        <a href="#" class="izquierda_flecha izquierda_flecha3"><img src="images/flecha_01.png" /></a>
                                        <a href="#" class="derecha_flecha derecha_flecha3"><img src="images/flecha_02.png" /></a>
                                        <div class="carrusel carrusel3">
                                            <div id="imagen3_0"><img class="img_carrusel img_carrusel3" src="<?php echo $row3['imagen1']; ?>" alt="Producto3"/></div>
                                            <div id="imagen3_1"><img class="img_carrusel img_carrusel3" src="<?php echo $row3['imagen2']; ?>" alt="Producto3"/></div>
                                            <div id="imagen3_2"><img class="img_carrusel img_carrusel3" src="<?php echo $row3['imagen3']; ?>" alt="Producto3"/></div>
                                            <div id="imagen3_3"><img class="img_carrusel img_carrusel3" src="<?php echo $row3['imagen4']; ?>" alt="Producto3"/></div>
                                        </div>
                                    </div>                          
                                </div>
                                <div class="texto_producto">
                                    <h3><?php echo $row3['nombre_en']; ?></h3>
                                    <h5>PRICE: <?php echo $row3['precio']; ?> €</h5>
                                    <p><?php echo $row3['descripcion_en']; ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>                     
                        <?php }
                        if ($j == 4){ ?>                   
                            <div class="des_producto" id="des_producto4">
                                <div class="img_des_producto">
                                    <div class="img_gran_producto">
                                        <img id="bigimage4" class="bigimage" src="<?php echo $row3['imagen1']; ?>" alt="Producto4">     
                                    </div>
                                    <div id="carrusel4">
                                        <a href="#" class="izquierda_flecha izquierda_flecha4"><img src="images/flecha_01.png" /></a>
                                        <a href="#" class="derecha_flecha derecha_flecha4"><img src="images/flecha_02.png" /></a>
                                        <div class="carrusel carrusel4">
                                            <div id="imagen4_0"><img class="img_carrusel img_carrusel4" src="<?php echo $row3['imagen1']; ?>" alt="Producto4"/></div>
                                            <div id="imagen4_1"><img class="img_carrusel img_carrusel4" src="<?php echo $row3['imagen2']; ?>" alt="Producto4"/></div>
                                            <div id="imagen4_2"><img class="img_carrusel img_carrusel4" src="<?php echo $row3['imagen3']; ?>" alt="Producto4"/></div>
                                            <div id="imagen4_3"><img class="img_carrusel img_carrusel4" src="<?php echo $row3['imagen4']; ?>" alt="Producto4"/></div>
                                        </div>
                                    </div>                          
                                </div>
                                <div class="texto_producto">
                                    <h3><?php echo $row3['nombre_en']; ?></h3>
                                    <h5>PRICE: <?php echo $row3['precio']; ?> €</h5>
                                    <p><?php echo $row3['descripcion_en']; ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>                            
                        <?php }
                        if ($j == 5){ ?>                    
                            <div class="des_producto" id="des_producto5">
                                <div class="img_des_producto">
                                    <div class="img_gran_producto">
                                        <img id="bigimage5" class="bigimage" src="<?php echo $row3['imagen1']; ?>" alt="Producto5">     
                                    </div>
                                    <div id="carrusel5">
                                        <a href="#" class="izquierda_flecha izquierda_flecha5"><img src="images/flecha_01.png" /></a>
                                        <a href="#" class="derecha_flecha derecha_flecha5"><img src="images/flecha_02.png" /></a>
                                        <div class="carrusel carrusel5">
                                            <div id="imagen5_0"><img class="img_carrusel img_carrusel5" src="<?php echo $row3['imagen1']; ?>" alt="Producto5"/></div>
                                            <div id="imagen5_1"><img class="img_carrusel img_carrusel5" src="<?php echo $row3['imagen2']; ?>" alt="Producto5"/></div>
                                            <div id="imagen5_2"><img class="img_carrusel img_carrusel5" src="<?php echo $row3['imagen3']; ?>" alt="Producto5"/></div>
                                            <div id="imagen5_3"><img class="img_carrusel img_carrusel5" src="<?php echo $row3['imagen4']; ?>" alt="Producto5"/></div>
                                        </div>
                                    </div>                          
                                </div>
                                <div class="texto_producto">
                                    <h3><?php echo $row3['nombre_en']; ?></h3>
                                    <h5>PRICE: <?php echo $row3['precio']; ?> €</h5>
                                    <p><?php echo $row3['descripcion_en']; ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>                             
                        <?php }
                        if ($j == 6){ ?>                 
                            <div class="des_producto" id="des_producto6">
                                <div class="img_des_producto">
                                    <div class="img_gran_producto">
                                        <img id="bigimage6" class="bigimage" src="<?php echo $row3['imagen1']; ?>" alt="Producto6">     
                                    </div>
                                    <div id="carrusel6">
                                        <a href="#" class="izquierda_flecha izquierda_flecha6"><img src="images/flecha_01.png" /></a>
                                        <a href="#" class="derecha_flecha derecha_flecha6"><img src="images/flecha_02.png" /></a>
                                        <div class="carrusel carrusel6">
                                            <div id="imagen6_0"><img class="img_carrusel img_carrusel6" src="<?php echo $row3['imagen1']; ?>" alt="Producto6"/></div>
                                            <div id="imagen6_1"><img class="img_carrusel img_carrusel6" src="<?php echo $row3['imagen2']; ?>" alt="Producto6"/></div>
                                            <div id="imagen6_2"><img class="img_carrusel img_carrusel6" src="<?php echo $row3['imagen3']; ?>" alt="Producto6"/></div>
                                            <div id="imagen6_3"><img class="img_carrusel img_carrusel6" src="<?php echo $row3['imagen4']; ?>" alt="Producto6"/></div>
                                        </div>
                                    </div>                          
                                </div>
                                <div class="texto_producto">
                                    <h3><?php echo $row3['nombre_en']; ?></h3>
                                    <h5>PRICE: <?php echo $row3['precio']; ?> €</h5>
                                    <p><?php echo $row3['descripcion_en']; ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>                               
                        <?php }
                        $j++;                                                 
                    } ?>        
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="seccion seccion3" id="seccion3" data-300="background-position: 50% 160%;"
            data-3000="background-position: 50% -10%;" >
                <div class="contenido_variable">
                    <div class="titulo_seccion der">
                        <h1><span class="grande">QUALITY</span></h1>
                    </div>
                    <div class="cuadro_texto">
                    <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    </div>                    
                    <div class="botones_descarga_reg">
                        <div class="descarga">
                            <a href="descargas/" target="_blank">
                                <div>DOWNLOAD</div>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>                
            </div>
            <div class="seccion seccion7" id="seccion7">
                <?php 
                //Ejecutamos la sentencia SQL
                $consulta_ofertas = "SELECT * FROM ofertas ORDER BY id DESC LIMIT 3";
                $rs_ofertas = mysqli_query($con, $consulta_ofertas);
                ?>
                <div class="contenido_variable">
                    <div class="titulo_seccion der">
                        <h1><span class="grande">OFFERS</span></h1>
                    </div>
                        <div class="contenido_apartado_index">  
                        <?php  
                        while($row4 = mysqli_fetch_assoc($rs_ofertas)){  ?>                                                          
                            <div class="noticia_index">
                                <?php if ($row4['pdf'] == "") { ?>
                                    <div class="contenido_noticia_index">
                                        <div class="titulo_contenido_noticia_index">
                                            <h3><?php echo $row4['nombre_en']; ?></h3>
                                        </div>
                                        <div class="imagen_noticia_index">
                                            <?php if ($row4['imagen'] == "") { ?>
                                                <img src="images/ofertas/oferta.png" alt="Oferta">
                                            <?php } else { ?>
                                                <img src="<?php echo $row4['imagen']; ?>" alt="Oferta">
                                            <?php } ?>                                            
                                        </div>
                                        <div class="texto_noticia_index">
                                            <p><?php echo $row4['texto_en']; ?></p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>                                    
                                <?php } else { ?>
                                    <a href="<?php echo $row4['pdf']; ?>" target="_blank">
                                        <div class="contenido_noticia_index">
                                            <div class="titulo_contenido_noticia_index">
                                                <h3><?php echo $row4['nombre_en']; ?></h3>
                                            </div>
                                            <div class="imagen_noticia_index">
                                                <?php if ($row4['imagen'] == "") { ?>
                                                    <img src="images/ofertas/oferta.png" alt="Oferta">
                                                <?php } else { ?>
                                                    <img src="<?php echo $row4['imagen']; ?>" alt="Oferta">
                                                <?php } ?>                                            
                                            </div>
                                            <div class="texto_noticia_index">
                                                <p><?php echo $row4['texto_en']; ?></p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>                                                
                                    </a>
                                <?php } ?>                                
                            </div>    
                            <?php } ?>
                            <div class="clear"></div>
                        </div>
                </div>  
            </div>
            <div class="seccion seccion4" id="seccion4">
                <?php 
                //Ejecutamos la sentencia SQL
                $consulta_noticias = "SELECT * FROM noticias ORDER BY id DESC LIMIT 3";
                $rs_noticias2 = mysqli_query($con, $consulta_noticias);
                $rs_noticias = mysqli_query($con, $consulta_noticias);
                ?>
                <div class="contenido_variable">
                    <div class="titulo_seccion der">
                        <h1><span class="grande">NEWS</span></h1>
                    </div>
                    <?php
                    $f = 1;
                    while($row5 = mysqli_fetch_assoc($rs_noticias)){  
                        $date = date_create($row5['fecha']);
                        $fecha = date_format($date, 'd-m-Y');
                        if ($f == 1){ ?> 
                            <div class="noticia_grande activo" id="des_noticia1">
                                <div class="texto_noticia_grande">
                                    <div class="titulo_noticia_grande">
                                        <h3><?php echo $row5['nombre_en']; ?></h3>
                                        <h5><?php echo $fecha; ?> </h5>
                                    </div>
                                    <div class="descripcion_noticia_grande">
                                        <p><?php echo $row5['texto_en']; ?></p>
                                    </div>
                                </div>
                                <div class="img_noticia_grande">
                                    <div class="img_gran_noticia">
                                        <?php if ($row5['imagen'] == "") { ?>
                                            <img src="images/noticias/noticia.png" alt="Noticia">
                                        <?php } else { ?>
                                            <img src="<?php echo $row5['imagen']; ?>" alt="Noticia">
                                        <?php } ?> 
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div> 
                        <?php }      
                        if ($f == 2){ ?> 
                            <div class="noticia_grande" id="des_noticia2">
                                <div class="texto_noticia_grande">
                                    <div class="titulo_noticia_grande">
                                        <h3><?php echo $row5['nombre_en']; ?></h3>
                                        <h5><?php echo $fecha; ?> </h5>
                                    </div>
                                    <div class="descripcion_noticia_grande">
                                        <p><?php echo $row5['texto_en']; ?></p>
                                    </div>
                                </div>
                                <div class="img_noticia_grande">
                                    <div class="img_gran_noticia">
                                        <?php if ($row5['imagen'] == "") { ?>
                                            <img src="images/noticias/noticia.png" alt="Noticia">
                                        <?php } else { ?>
                                            <img src="<?php echo $row5['imagen']; ?>" alt="Noticia">
                                        <?php } ?> 
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div> 
                        <?php }           
                        if ($f == 3){ ?> 
                            <div class="noticia_grande" id="des_noticia3">
                                <div class="texto_noticia_grande">
                                    <div class="titulo_noticia_grande">
                                        <h3><?php echo $row5['nombre_en']; ?></h3>
                                        <h5><?php echo $fecha; ?> </h5>
                                    </div>
                                    <div class="descripcion_noticia_grande">
                                        <p><?php echo $row5['texto_en']; ?></p>
                                    </div>
                                </div>
                                <div class="img_noticia_grande">
                                    <div class="img_gran_noticia">
                                        <?php if ($row5['imagen'] == "") { ?>
                                            <img src="images/noticias/noticia.png" alt="Noticia">
                                        <?php } else { ?>
                                            <img src="<?php echo $row5['imagen']; ?>" alt="Noticia">
                                        <?php } ?> 
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div> 
                        <?php } 
                    $f++;
                    } ?>
                    <div class="contenido_apartado_index">  
                    <?php  
                    $h = 1;
                    while($row6 = mysqli_fetch_assoc($rs_noticias2)){  ?>                                                          
                        <div class="noticia_index" id="noticia<?php echo $h; ?>">
                            <div class="contenido_noticia_index">
                                <div class="imagen_noticia_index">
                                    <?php if ($row6['imagen'] == "") { ?>
                                        <img src="images/noticias/noticia.png" alt="Noticia">
                                    <?php } else { ?>
                                        <img src="<?php echo $row6['imagen']; ?>" alt="Noticia">
                                    <?php } ?>                                            
                                </div>
                                <div class="titulo_contenido_noticia_index">
                                    <h3><?php echo $row6['nombre_en']; ?></h3>
                                </div>
                                <div class="texto_noticia_index">
                                    <p><?php echo substr($row6['texto_en'], 0, 150); ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>                                  
                        </div>    
                    <?php 
                    $h++;
                    } ?>
                        <div class="clear"></div>
                    </div>
                </div>  
            </div>
            <div class="seccion seccion5" id="seccion5">
                <div class="contenido_variable">
                    <div class="titulo_seccion der">
                        <h1><span class="grande">LOCATION AND CONTACT</span></h1>
                    </div>
                    <div class="seccion_contacto">
                        <div class="formulario_contacto">
                            <form method="post" action="" name="formulario" class="formulario_contacto" enctype="multipart/form-data">
                                <input type="text" class="col2" name="nombre" placeholder="Name" required />
                                <input type="text" class="col2" name="apellido" placeholder="Surname" required />
                                <input type="text" class="col2" name="mail" placeholder="E-mail" required />
                                <input type="text" class="col2" name="asunto" placeholder="Affair" required />
                                <input type="file" class="col2 archivo" name="archivo" />
                                <textarea type="text" class="col1" name="mensaje" placeholder="Message" required ></textarea>
                                <input type="submit" class="boton_enviar" name="enviar" value="send" />
                            </form>
                            <?php
                            if (!empty ($_POST['nombre'])){;
                            function form_mail($sPara, $sAsunto, $sTexto, $sDe)
                            {
                            $bHayFicheros = 0;
                            $sCabeceraTexto = "";
                            $sAdjuntos = "";

                            if ($sDe)$sCabeceras = "From:".$sDe."\n";
                            else $sCabeceras = "";
                            $sCabeceras .= "MIME-version: 1.0\n";
                            foreach ($_POST as $sNombre => $sValor)
                            $sTexto = $sTexto."\n".$sNombre." = ".$sValor;

                            foreach ($_FILES as $vAdjunto)
                            {
                            if ($bHayFicheros == 0)
                            {
                            $bHayFicheros = 1;
                            $sCabeceras .= "Content-type: multipart/mixed;";
                            $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

                            $sCabeceraTexto = "----_Separador-de-mensajes_--\n";
                            $sCabeceraTexto .= "Content-type: text/plain;charset=utf-8\n";
                            $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

                            $sTexto = $sCabeceraTexto.$sTexto;
                            }
                            if ($vAdjunto["size"] > 0)
                            {
                            $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
                            $sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";;
                            $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
                            $sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";

                            $oFichero = fopen($vAdjunto["tmp_name"], 'r');
                            $sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
                            $sAdjuntos .= chunk_split(base64_encode($sContenido));
                            fclose($oFichero);
                            }
                            }

                            if ($bHayFicheros)
                            $sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
                            return(mail($sPara, $sAsunto, $sTexto, $sCabeceras));
                            }

                            //cambiar aqui el email
                            if (form_mail("correo@correo.com", "Mensaje del formulario de contacto de la web Palets",
                            "Los datos introducidos en el formulario son:\n\n", $_POST[email]))
                            echo "
                            <h2>Your form was successfully submitted </h2>
                            <form>
                                <p>Thank you so much </p>

                            </form>

                            ";
                            }?>
                        </div>
                        <div class="localizacion">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11755.815005950746!2d-9.001387161916432!3d42.55627491678536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f3750f7081a9d%3A0x404f58273ca54f0!2sRiveira%2C+La+Coru%C3%B1a!5e0!3m2!1ses!2ses!4v1500738715654" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="clear"></div>
                    </div>
                    </div>
                <div class="clear"></div>
                    </div>
            <div class="seccion seccion6" id="seccion6">
                <div class="contenido_variable">
                    <div class="social">
                        <div class="col3">
                            <div class="titulo_columna izq">
                                <h2>CONTACT</h2>
                            </div>
                            <div class="linea1 tel">
                                <div class="img_cont">
                                    <a href="tel:666666666"><img src="images/botones/telf.png" alt="telf"></a>
                                </div>
                                <div class="text_cont">
                                    <h3>
                                        <a href="tel:666666666">+34666666666</a>
                                    </h3>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="linea2 mail">
                                <div class="img_cont">
                                    <a href="mailto:correo@correo.com"><img src="images/botones/correo.png" alt="correo"></a>
                                </div>
                                <div class="text_cont">
                                    <h3>
                                         <a href="mailto:correo@correo.com">correo@correo.com</a>
                                    </h3>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col3">
                            <div class="titulo_columna central">
                                <h2>DIRECTION</h2>
                            </div>
                            <div class="linea1 dir">
                                <div class="img_cont">
                                    <img src="images/botones/ubi.png" alt="ubicacino"></a>
                                </div>
                                <div class="text_cont">
                                    <h3>
                                        Ribeira
                                    </h3>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="linea2 dir">
                                <div class="img_cont">
                                    <img src="images/botones/ubi.png" alt="ubicacino"></a>
                                </div>
                                <div class="text_cont">
                                    <h3>
                                        42.556, -9.0013
                                    </h3>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col3">
                            <div class="titulo_columna der">
                                <h2>FOLLOW US</h2>
                            </div>
                            <div class="iconos_sociales">
                                <div class="icono_social face">
                                    <div class="img_cont">
                                        <a href="#" target="_blank"><img src="images/botones/facebook.png" alt="facebook"></a>
                                    </div>
                                    <div class="text_cont">
                                        <h3>
                                             <a href="#" target="_blank">Our facebook</a>
                                        </h3>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="icono_social twitter">
                                    <div class="img_cont">
                                        <a href="#" target="_blank"><img src="images/botones/twitter.png" alt="twitter"></a>
                                    </div>
                                    <div class="text_cont">
                                        <h3>
                                             <a href="#" target="_blank">Our twitter</a>
                                        </h3>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="contenido_variable">
                    <div class="pie_inferior">
                        <div class="columna_izquierda">
                            <p><a href="aviso.php?lan=en">Legal Warning</a></p>
                        </div>
                        <div class="columna_derecha">
                            <p>©Palets 2018</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>      