<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();
$idioma = $_GET['lan'];
        
//Conexion con la base
include('conexion.php');


if($idioma == 'es' || $idioma == '') { ?>
<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Palets</title>
    <link rel="stylesheet" href="css/cookie.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/cookie.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
    <script src="js/funciones.js" type="text/javascript"></script>

    <?php
    if ($deviceType == 'computer' ){ ?>
    <link rel="stylesheet" type="text/css" href="css/desktop.css"/>
    <script src="js/skrollr.js" type="text/javascript"></script>
    <?php }

    if ($deviceType == 'tablet' ) { ?>
        <link rel="stylesheet" type="text/css" href="css/tablet.css"/>

    <?php
    } if ($deviceType == 'phone' ){ ?>
        <link rel="stylesheet" type="text/css" href="css/movil.css" />

    <?php  } ?>
    
  <!--  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66297699-1', 'auto');
  ga('send', 'pageview');

</script>-->
    <!--[if lt IE 9]> <link href="css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]-->
     <meta name="description" content="Empresa de palets">
    <meta name="keywords" content="Empresa de palets, palets, madera">
    <meta name="author" content="Adriana">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Palets">
    <meta name="twitter:title" content="Palets">
    <meta name="twitter:description" content="Empresa de palets">
    <meta name="twitter:creator" content="@AT_DWEB">
    <!-- Twitter Summary card images must be at least 200x200px -->
    <meta name="twitter:image" content="meta/inicio.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Empresa de palets" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://adriproba.esy.es/" />
    <meta property="og:image" content="meta/inicio.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="Empresa de palets" />
    <meta property="og:site_name" content="Empresa de palets" />

    </head>
    <body>
        <div class="aviso_internet" id="aviso_internet">
            <div class="logo_contenido">
                <img src="" alt="LOGO" />
            </div>
            <p>Sentimos advertirle de que su navegador web no está actualizado.</p>
            <p>La web a la que intenta acceder utiliza las últimas tecnologías para crear una experiencia de usuario única por
            compatible únicamente con las últimas actualizaciones de los navegadores web más usados. Para descargarse las últimas
            versiones de estos navegadores, por favor, escoja en la lista su navegador favorito y descárguelo.</p>
            <ul>
                <li><a href="https://www.google.es/chrome/browser/desktop/index.html">Google Chrome</a></li>
                <li><a href="https://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a></li>
                <li><a href="http://support.apple.com/es_ES/downloads/#safari">Safari</a></li>
                <li><a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie">Internet Explorer</a></li>
            </ul>
            <p>Muchas Gracias.</p>
        </div>
        <div class="container" id="container">
            <?php include "lng/es/cuerpo_aviso.php"; ?>
        </div>
         <script type="text/javascript">
            var s = skrollr.init();
        </script>
    </body>
</html>
 
<?php } 
if($idioma == 'en') { ?>
<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Palets</title>
    <link rel="stylesheet" href="css/cookie.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/cookie.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
    <script src="js/funciones.js" type="text/javascript"></script>

    <?php
    if ($deviceType == 'computer' ){ ?>
    <link rel="stylesheet" type="text/css" href="css/desktop.css"/>
    <script src="js/skrollr.js" type="text/javascript"></script>
    <?php }

    if ($deviceType == 'tablet' ) { ?>
        <link rel="stylesheet" type="text/css" href="css/tablet.css"/>

    <?php
    } if ($deviceType == 'phone' ){ ?>
        <link rel="stylesheet" type="text/css" href="css/movil.css" />

    <?php  } ?>
    
  <!--  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66297699-1', 'auto');
  ga('send', 'pageview');

</script>-->
    <!--[if lt IE 9]> <link href="css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]-->
     <meta name="description" content="Empresa de palets">
    <meta name="keywords" content="Empresa de palets, palets, madera">
    <meta name="author" content="Adriana">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Palets">
    <meta name="twitter:title" content="Palets">
    <meta name="twitter:description" content="Empresa de palets">
    <meta name="twitter:creator" content="@AT_DWEB">
    <!-- Twitter Summary card images must be at least 200x200px -->
    <meta name="twitter:image" content="meta/inicio.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Empresa de palets" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://adriproba.esy.es/" />
    <meta property="og:image" content="meta/inicio.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="Empresa de palets" />
    <meta property="og:site_name" content="Empresa de palets" />

    </head>
    <body>
        <div class="aviso_internet" id="aviso_internet">
            <div class="logo_contenido">
                <img src="" alt="LOGO" />
            </div>
            <p>Sorry warn that your web browser is out of date.</p>
            <p>The website you are trying to access using the latest technologies to create a unique user experience by only supports the latest updates of the most used web browsers. To download the latest versions of these browsers, please choose from the list, and download your favorite browser.</p>
            <ul>
                <li><a href="https://www.google.es/chrome/browser/desktop/index.html">Google Chrome</a></li>
                <li><a href="https://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a></li>
                <li><a href="http://support.apple.com/es_ES/downloads/#safari">Safari</a></li>
                <li><a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie">Internet Explorer</a></li>
            </ul>
            <p>Thank you.</p>
        </div>
        <div class="container" id="container">
            <?php include "lng/en/cuerpo_aviso.php"; ?>
        </div>
         <script type="text/javascript">
            var s = skrollr.init();
        </script>
    </body>
</html>

<?php }
if($idioma == 'gl') { ?>
<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Palets</title>
    <link rel="stylesheet" href="css/cookie.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/cookie.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
    <script src="js/funciones.js" type="text/javascript"></script>

    <?php
    if ($deviceType == 'computer' ){ ?>
    <link rel="stylesheet" type="text/css" href="css/desktop.css"/>
    <script src="js/skrollr.js" type="text/javascript"></script>
    <?php }

    if ($deviceType == 'tablet' ) { ?>
        <link rel="stylesheet" type="text/css" href="css/tablet.css"/>

    <?php
    } if ($deviceType == 'phone' ){ ?>
        <link rel="stylesheet" type="text/css" href="css/movil.css" />

    <?php  } ?>
    
  <!--  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66297699-1', 'auto');
  ga('send', 'pageview');

</script>-->
    <!--[if lt IE 9]> <link href="css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]-->
     <meta name="description" content="Empresa de palets">
    <meta name="keywords" content="Empresa de palets, palets, madera">
    <meta name="author" content="Adriana">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Palets">
    <meta name="twitter:title" content="Palets">
    <meta name="twitter:description" content="Empresa de palets">
    <meta name="twitter:creator" content="@AT_DWEB">
    <!-- Twitter Summary card images must be at least 200x200px -->
    <meta name="twitter:image" content="meta/inicio.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Empresa de palets" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://adriproba.esy.es/" />
    <meta property="og:image" content="meta/inicio.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="Empresa de palets" />
    <meta property="og:site_name" content="Empresa de palets" />

    </head>
    <body>
        <div class="aviso_internet" id="aviso_internet">
            <div class="logo_contenido">
                <img src="" alt="LOGO" />
            </div>
            <p>Sentimos advertilo de que o seu navegador web non está actualizado.</p>
            <p>A web á que intenta acceder utiliza as últimas tecnoloxías para crear unha experiencia de usuario única por ser
            compatible únicamente coas últimas actualizacións dos navegadores web máis usados. Para descargarse as últimas
            versións destos navegadores, por favor, escolla na lista o seu navegador favorito e descárgueo.</p>
            <ul>
                <li><a href="https://www.google.es/chrome/browser/desktop/index.html">Google Chrome</a></li>
                <li><a href="https://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a></li>
                <li><a href="http://support.apple.com/es_ES/downloads/#safari">Safari</a></li>
                <li><a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie">Internet Explorer</a></li>
            </ul>
            <p>Moitas Grazas.</p>
        </div>
        <div class="container" id="container">
            <?php include "lng/gl/cuerpo_aviso.php"; ?>
        </div>
         <script type="text/javascript">
            var s = skrollr.init();
        </script>
    </body>
</html>
<?php } ?> 