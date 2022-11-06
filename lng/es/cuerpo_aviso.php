
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
                        <li><a href="inicio.php?lan=es#seccion1">EMPRESA</a></li>
                        <li><a href="inicio.php?lan=es#seccion2">PRODUCTOS</a></li>
                        <li><a href="inicio.php?lan=es#seccion3">CALIDAD</a></li>
                        <li><a href="inicio.php?lan=es#seccion7">OFERTAS</a></li>
                        <li><a href="inicio.php?lan=es#seccion4">NOTICIAS</a></li>
                        <li><a href="inicio.php?lan=es#seccion5">CONTACTO</a></li>
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
                        <li class="boton_seccion1 smoothScroll"><a href="inicio.php?lan=es#seccion1">EMPRESA</a></li>
                        <li class="boton_seccion2 smoothScroll"><a href="inicio.php?lan=es#seccion2">PRODUCTOS</a></li>
                        <li class="boton_seccion3 smoothScroll"><a href="inicio.php?lan=es#seccion3">CALIDAD</a></li>
                        <li class="boton_seccion3 smoothScroll"><a href="inicio.php?lan=es#seccion7">OFERTAS</a></li>
                        <li class="boton_seccion4 smoothScroll"><a href="inicio.php?lan=es#seccion4">NOTICIAS</a></li>
                        <li class="boton_seccion5 smoothScroll"><a href="inicio.php?lan=es#seccion5">CONTACTO</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            </div>     
        </div>
<div class="cuerpo aviso">
    <div class="aviso" id ="aviso">
        <div class="contenido_variable">
            <div class="titulo_seccion">
                <h1>AVISO LEGAL</h1>
            </div>
            <div class="cuerpo_aviso">
                <p>
                    El presente aviso legal (en adelante, el "Aviso Legal") regula el uso del sitio web <a href="http:///www.coolrun.es">www.coolrun.es</a> (en adelante, el "Sitio Web") 
                    propiedad de DIMENZONE S.L. (en adelante, la “Empresa”) con NIF: B70425780, con domicilio en Rúa de abaixo. Nº 1. 5B, 15895, Milladoiro – Ames (A Coruña), 
                    teléfono <a href="tel:671208242">671208242</a> y email <a href="mailto:informacion@dimenzone.com">informacion@dimenzone.com</a> e inscrita en el REGISTRO MERCANTIL de Santiago de Compostela, en el tomo 231, folio 212, hoja SC-47369.
                </p>
                <p>
                    El acceso al Sitio Web implica la aceptación del usuario de las normas de uso que se establecen para el mismo, así como la aceptación del contenido de la 
                    cláusula de Exención de responsabilidad y de los Derechos de la Propiedad Intelectual e Industrial aplicable.
                </p>
                <h4>
                    Derechos de Propiedad Intelectual e Industrial
                </h4>
                <p>
                   Se prohíbe la reproducción total o parcial del contenido del presente Sitio Web, incluidas las fotografías, sin la autorización expresa de su propietario. El usuario del Sitio Web se compromete a no reproducir, copiar, distribuir, 
                   transformar o modificar los contenidos del Sitio Web, incluidos marcas, nombres comerciales o signos distintivos, ya sean titularidad de La Empresa o de terceros, a menos que cuente con la autorización del titular de los derechos, ni a suprimir manipular o de cualquier forma alterar el "copyright".
                </p>
                <h4>
                    Protección de Datos
                </h4>
                <p>
                    En cumplimiento de la Ley orgánica 15/1999, de 13 de diciembre, de protección de datos de carácter personal y de la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico se 
                    informa al receptor del presente documento que los datos suministrados, incluido el correo electrónico y que resultan necesarios para la prestación de servicios por parte del Sitio Web se incorporarán a un archivo de carácter personal, del que es responsable y destinataria La Empresa.
                </p>
                <p>
                    Al facilitar el interesado sus datos de carácter personal y de correo electrónico, expresamente autoriza la utilización de dichos datos a los efectos de las comunicaciones periódicas, incluyendo expresamente las
                     que se realicen por correo electrónico, que La Empresa lleve a cabo con sus clientes y usuarios y posibles interesados informándoles de sus actividades, servicios, noticias, así como cualquier oferta de servicios y productos relacionados con la actividad del Sitio Web.
                </p>
                <p>
                    En cualquier caso, el cesionario puede ejercitar respecto a sus datos los derechos de oposición, acceso, rectificación y cancelación mediante e-mail dirigido <a href="mailto:informacion@dimenzone.com">informacion@dimenzone.com</a>.
                </p>
                <p>
                    Generalmente, todas aquellas personas que hagan uso del Sitio Web lo harán sin necesidad de facilitar ningún dato de carácter personal, excepto en aquellos casos en los que decida favorecerse de los servicios aportados por Sitio Web, en los cuales, se dará la necesidad de 
                    facilitar una serie de datos de carácter personal en aras de posibilitar la prestación de los servicios del Sitio Web.
                </p>
                <p>
                   La Empresa garantiza la confidencialidad de los datos de carácter personal facilitados por los Usuarios, según lo establecido en la normativa sobre Protección de Datos de Carácter Personal y sobre Servicios de la Sociedad de la Información 
                   y de Comercio Electrónico, cumpliendo estrictamente la legislación vigente y habiendo adoptado los procedimientos administrativos y técnicos necesarios para garantizar la seguridad de los datos personales que recopilamos.
                </p>
                <p>
                    Para la consecución de tales objetivos La Empresa le garantiza que ha adoptado las medidas oportunas de seguridad en sus instalaciones, sistemas y 
                    ficheros, así como el tratamiento confidencial de los Datos Personales de conformidad con la legislación vigente aplicable. En este sentido, el 
                    Usuario queda informado y presta su consentimiento expreso para la incorporación de sus datos a varios ficheros para el tratamiento automatizado o 
                    no de sus datos, con la finalidad de satisfacer la solicitud de compra efectuada o recepción de información de su interés a través de cualquier medio 
                    electrónico o postal, acerca de los servicios ofertados por La Empresa, pudiendo incluso ser ésta de carácter promocional o publicitaria, así como en 
                    su caso gestionar los servicios deportivos para los cuales Vd. proporciona su información personal como deportista u organizador (entre otros, registro 
                    de usuario, inscripciones, recepción de justificantes de inscripción, consulta y publicación de resultados deportivos, envío de consultas, gestión 
                    integral de eventos...o cualesquiera otro que pudieran ser ofrecidos por La Empresa).
                </p>
                <p>
                    1. El simple acceso al Sitio Web es gratuito y no genera relación comercial, contractual o profesional alguna entre sus usuarios y La Empresa que 
                    únicamente se generará mediante la contratación por el usuario de los servicios ofertados.
                </p>
                <p>
                    2. En el Sitio Web pueden incluirse enlaces e hipervínculos a otras páginas web que posibilitan el acceso al usuario a prestaciones, información y/o servicios ofrecidos por terceros 
                    y que no pertenecen ni se encuentran bajo el control de La Empresa , por lo que La Empresa no se hace responsable de la información contenida en los mismos.
                </p>
                <p>
                    3. La Empresa no responderá en ningún caso del incumplimiento de cualquier norma aplicable en que pueda incurrir el usuario ya sea en el acceso al Sitio Web o en el 
                    uso de las informaciones contenidas en este así como en el acceso a los enlaces e hipervínculos contenidos en el presente Sitio Web.
                </p>
                <p>
                    4. La Empresa podrá modificar, sin previo aviso, la información contenida en el Sitio Web así como su configuración y presentación.
                </p>
                <p>
                    5. El usuario tiene la posibilidad de cumplimentar el formulario de Reserva o dirigir correos electrónicos a La Empresa. Se pueden utilizar 
                    cookies con el objetivo de facilitar la navegación de los usuarios. El usuario autoriza a La Empresa a utilizar dicha información para acciones 
                    comerciales estrictamente relacionadas con las actividades ofertadas en el Sitio Web, generación de estadísticas y mejora del Sitio Web.
                </p>
                <p>
                    6. Esta página web puede utilizar Google Analytics (propiedad de Google, Inc., con domicilio en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos), 
                    u otros servicios analíticos de web prestado por terceros. Estos servicios o aplicaciones utilizan cookies para ayudar al website a analizar el uso que hacen 
                    los usuarios del sitio web. La información que genera la cookie acerca de su uso del website (incluyendo su dirección IP) puede ser directamente transmitida y 
                    archivada por los prestadores de dichos servicios en sus servidores, y ser utilizada con el propósito de seguir la pista de su uso del website, recopilando
                    informes de la actividad del website y prestando otros servicios relacionados con la actividad del website y el uso de Internet. Puede Usted rechazar el 
                    tratamiento de los datos o la información rechazando el uso de cookies mediante la selección de la configuración apropiada de su navegador, sin embargo, 
                    debe Usted saber que si lo hace puede ser que no pueda usar la plena funcionabilidad de este website. Al utilizar este website Usted consiente el 
                    tratamiento de información acerca de Usted por Google u otros prestadores de servicios en la forma y para los fines arriba indicados.
                </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="footer">
        <div class="contenido_variable">
            <div class="pie_inferior">
                <div class="columna_izquierda">
                    <p><a href="aviso.php?lan=es">Aviso Legal</a></p>
                </div>
                <div class="columna_derecha">
                    <p>©Palets 2018</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    </div>