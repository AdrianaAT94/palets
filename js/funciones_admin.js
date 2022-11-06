$( document ).ready(function() {
  $('.img_menu_movil img').click(function() {
      if ($('.contenido_menu_movil').is(':hidden')) {
        $('.contenido_menu_movil').show();
        $('.menu_movil').css('background-color', 'rgba(0, 0, 0, 0.9)');
      }
      else {
        $('.contenido_menu_movil').hide();
        $('.menu_movil').css('background', 'none');
      }
    });

    $('.contenido_menu_movil ul li a').click(function() {
      $('.contenido_menu_movil').hide();
      $('.menu_movil').css('background', 'none');
    });


  //scroll
  $('.contenido_menu_movil ul li a, .menu ul li a').on('click', function(e) {
      var $link = $(this);
      var anchor  = $link.attr('href');
      var element = $link.attr('href').split("#");
      anchor = '#'+element[1];
      $('html, body').stop().animate({
          scrollTop: $(anchor).offset().top
      }, 1000);
  });

  //slider1   
    var i = 0;
    main();

    function main(){
      var control = setInterval(cambiarSlider, 4000);
    }

    function cambiarSlider(){
      i++;
      if(i == $(".slider .image_slider").size()){
        i = 0;
      }
      $(".slider .image_slider").hide("slide", { direction: "left" }, 2000);
      $(".slider .image_slider").eq(i).show("slide", { direction: "right" }, 2000);
    }

});


jQuery(document).ready(function () {
$( ".ofertas_admin" )
  .mouseenter(function() {
  	$( ".ofertas_admin" ).css({
  		"background": "url(./images/iconos_areaprivada/ap_flechaAM.png)",
		"background-repeat": "no-repeat",
		"background-position": "95% 50%"
  	});
    if ($('.lista_subopcions_oferta').css("display") == "none") { 
	 		$('.lista_subopcions_producto').hide();
      $('.lista_subopcions_slider').hide();
      $('.lista_subopcions_noticia').hide();
      $('.lista_subopcions_usuario').hide();
            $('.lista_subopcions_oferta').fadeToggle('slow');  
        }
  })
  .mouseleave(function() {
  	$( ".ofertas_admin" ).css("background", "none");
    $('.lista_subopcions_oferta').fadeOut('slow'); 
  });

$( ".usuarios_admin" )
  .mouseenter(function() {
    $( ".usuarios_admin" ).css({
      "background": "url(./images/iconos_areaprivada/ap_flechaAM.png)",
    "background-repeat": "no-repeat",
    "background-position": "95% 50%"
    });
    if ($('.lista_subopcions_usuario').css("display") == "none") { 
      $('.lista_subopcions_producto').hide();
      $('.lista_subopcions_slider').hide();
      $('.lista_subopcions_noticia').hide();
      $('.lista_subopcions_oferta').hide();
            $('.lista_subopcions_usuario').fadeToggle('slow');  
        }
  })
  .mouseleave(function() {
    $( ".usuarios_admin" ).css("background", "none");
    $('.lista_subopcions_usuario').fadeOut('slow'); 
  });

  $( ".noticias_admin" )
  .mouseenter(function() {
    $( ".noticias_admin" ).css({
      "background": "url(./images/iconos_areaprivada/ap_flechaAM.png)",
    "background-repeat": "no-repeat",
    "background-position": "95% 50%"
    });
    if ($('.lista_subopcions_noticia').css("display") == "none") { 
      $('.lista_subopcions_producto').hide();
      $('.lista_subopcions_slider').hide();
      $('.lista_subopcions_oferta').hide();
      $('.lista_subopcions_usuario').hide();
            $('.lista_subopcions_noticia').fadeToggle('slow');  
        }
  })
  .mouseleave(function() {
    $( ".noticias_admin" ).css("background", "none");
    $('.lista_subopcions_noticia').fadeOut('slow'); 
  });

  $( ".productos_admin" )
  .mouseenter(function() {
  	$( ".productos_admin" ).css({
  		"background": "url(./images/iconos_areaprivada/ap_flechaAM.png)",
		"background-repeat": "no-repeat",
		"background-position": "95% 50%"
  	});
    if ($('.lista_subopcions_producto').css("display") == "none") { 
	 		$('.lista_subopcions_oferta').hide();
      $('.lista_subopcions_slider').hide();
      $('.lista_subopcions_noticia').hide();
      $('.lista_subopcions_usuario').hide();
            $('.lista_subopcions_producto').fadeToggle('slow');  
        }
  })
  .mouseleave(function() {
  	$( ".productos_admin" ).css("background", "none");
    $('.lista_subopcions_producto').fadeOut('slow'); 
  });

  $( ".listas .slider_admin" )
  .mouseenter(function() {
    $( ".listas .slider_admin" ).css({
      "background": "url(./images/iconos_areaprivada/ap_flechaAM.png)",
    "background-repeat": "no-repeat",
    "background-position": "95% 50%"
    });
    if ($('.lista_subopcions_slider').css("display") == "none") { 
      $('.lista_subopcions_oferta').hide();
      $('.lista_subopcions_producto').hide();
      $('.lista_subopcions_noticia').hide();
      $('.lista_subopcions_usuario').hide();
            $('.lista_subopcions_slider').fadeToggle('slow');  
        }
  })
  .mouseleave(function() {
    $( ".listas .slider_admin" ).css("background", "none");
    $('.lista_subopcions_slider').fadeOut('slow'); 
  });

$( ".clave_user" )
  .mouseenter(function() {
    $( ".clave_user" ).css({
      "background": "url(./images/iconos_areaprivada/ap_flechaAM.png)",
    "background-repeat": "no-repeat",
    "background-position": "95% 50%"
    });
  })
  .mouseleave(function() {
    $( ".clave_user" ).css("background", "none");
  });

  $( ".volver_admin" )
  .mouseenter(function() {
    $( ".volver_admin" ).css({
      "background": "url(../images/iconos_areaprivada/ap_flechaAM.png)",
    "background-repeat": "no-repeat",
    "background-position": "95% 50%"
    });
  })
  .mouseleave(function() {
    $( ".volver_admin" ).css("background", "none");
  })
  .click(function() {
    location.href = "../administracion.php";
  });

});
