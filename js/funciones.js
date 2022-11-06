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

$('a.smoothScroll').smoothScroll({
	offset: -80,
	scrollTarget: $(this).val()
});

	$(document).on("click", "div.item_producto", function() {
        cur = $(this).attr("id");   
        
        if (!$('#des_'+cur).hasClass('activo')) {
	        $('.item_producto').removeClass('activo');
        	$('#'+cur).addClass('activo');    
            $('.des_producto').removeClass('activo').hide('slow');
            $('#des_'+cur).addClass('activo').show('slow');
        } 
    });

    $(document).on("click", "div.noticia_index", function() {
        cur2 = $(this).attr("id");   
        
        if (!$('#des_'+cur2).hasClass('activo')) {
            $('.noticia_grande').removeClass('activo').hide('slow');
            $('#des_'+cur2).addClass('activo').show('slow');
        } 
    });

    //galeria carrusel1
    var posicion1 = 0;
 var imagenes1 = new Array();
 $(document).ready(function() {
   var numeroImatges1 = 4;
   if(numeroImatges1<=3){
       $('.derecha_flecha1').css('display','none');
    	$('.izquierda_flecha1').css('display','none');
   }

     $('.img_carrusel1').on('click',function(){
         $('#bigimage1').attr('src',$(this).attr('src'));
        return false;
     });

     $('.izquierda_flecha1').on('click',function(){
         if(posicion1>0){
            posicion1 = posicion1-1;
        }else{
            posicion1 = numeroImatges1-3;
        }
        $(".carrusel1").animate({"left": -($('#imagen1_'+posicion1).position().left)}, 600);
        return false;
     });

     $('.izquierda_flecha1').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha1').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha1').on('click',function(){
        if(numeroImatges1>posicion1+3){
            posicion1 = posicion1+1;
        }else{
            posicion1 = 0;
        }
        $(".carrusel1").animate({"left": -($('#imagen1_'+posicion1).position().left)}, 600);
        return false;
     });

 });

    //galeria carrusel2
    var posicion2 = 0;
 var imagenes2 = new Array();
 $(document).ready(function() {
   var numeroImatges2 = 4;
   if(numeroImatges2<=3){
       $('.derecha_flecha2').css('display','none');
    	$('.izquierda_flecha2').css('display','none');
   }

     $('.img_carrusel2').on('click',function(){
         $('#bigimage2').attr('src',$(this).attr('src'));
        return false;
     });

     $('.izquierda_flecha2').on('click',function(){
         if(posicion2>0){
            posicion2 = posicion2-1;
        }else{
            posicion2 = numeroImatges2-3;
        }
        $(".carrusel2").animate({"left": -($('#imagen2_'+posicion2).position().left)}, 600);
        return false;
     });

     $('.izquierda_flecha2').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha2').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha2').on('click',function(){
        if(numeroImatges2>posicion2+3){
            posicion2 = posicion2+1;
        }else{
            posicion2 = 0;
        }
        $(".carrusel2").animate({"left": -($('#imagen2_'+posicion2).position().left)}, 600);
        return false;
     });

 });

    //galeria carrusel3
    var posicion3 = 0;
 var imagenes3 = new Array();
 $(document).ready(function() {
   var numeroImatges3 = 4;
   if(numeroImatges3<=3){
       $('.derecha_flecha3').css('display','none');
    	$('.izquierda_flecha3').css('display','none');
   }

     $('.img_carrusel3').on('click',function(){
         $('#bigimage3').attr('src',$(this).attr('src'));
        return false;
     });

     $('.izquierda_flecha3').on('click',function(){
         if(posicion3>0){
            posicion3 = posicion3-1;
        }else{
            posicion3 = numeroImatges3-3;
        }
        $(".carrusel3").animate({"left": -($('#imagen3_'+posicion3).position().left)}, 600);
        return false;
     });

     $('.izquierda_flecha3').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha3').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha3').on('click',function(){
        if(numeroImatges3>posicion3+3){
            posicion3 = posicion3+1;
        }else{
            posicion3 = 0;
        }
        $(".carrusel3").animate({"left": -($('#imagen3_'+posicion3).position().left)}, 600);
        return false;
     });

 });

    //galeria carrusel4
    var posicion4 = 0;
 var imagenes4 = new Array();
 $(document).ready(function() {
   var numeroImatges4 = 4;
   if(numeroImatges4<=3){
       $('.derecha_flecha4').css('display','none');
    	$('.izquierda_flecha4').css('display','none');
   }

     $('.img_carrusel4').on('click',function(){
         $('#bigimage4').attr('src',$(this).attr('src'));
        return false;
     });

     $('.izquierda_flecha4').on('click',function(){
         if(posicion4>0){
            posicion4 = posicion4-1;
        }else{
            posicion4 = numeroImatges4-3;
        }
        $(".carrusel4").animate({"left": -($('#imagen4_'+posicion4).position().left)}, 600);
        return false;
     });

     $('.izquierda_flecha4').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha4').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha4').on('click',function(){
        if(numeroImatges4>posicion4+3){
            posicion4 = posicion4+1;
        }else{
            posicion4 = 0;
        }
        $(".carrusel4").animate({"left": -($('#imagen4_'+posicion4).position().left)}, 600);
        return false;
     });

 });

    //galeria carrusel5
    var posicion5 = 0;
 var imagenes5 = new Array();
 $(document).ready(function() {
   var numeroImatges5 = 4;
   if(numeroImatges5<=3){
       $('.derecha_flecha5').css('display','none');
    	$('.izquierda_flecha5').css('display','none');
   }

     $('.img_carrusel5').on('click',function(){
         $('#bigimage5').attr('src',$(this).attr('src'));
        return false;
     });

     $('.izquierda_flecha5').on('click',function(){
         if(posicion5>0){
            posicion5 = posicion5-1;
        }else{
            posicion5 = numeroImatges5-3;
        }
        $(".carrusel5").animate({"left": -($('#imagen5_'+posicion5).position().left)}, 600);
        return false;
     });

     $('.izquierda_flecha5').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha5').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha5').on('click',function(){
        if(numeroImatges5>posicion5+3){
            posicion5 = posicion5+1;
        }else{
            posicion5 = 0;
        }
        $(".carrusel5").animate({"left": -($('#imagen5_'+posicion5).position().left)}, 600);
        return false;
     });

 });

    //galeria carrusel6
    var posicion6 = 0;
 var imagenes6 = new Array();
 $(document).ready(function() {
   var numeroImatges6 = 4;
   if(numeroImatges6<=3){
       $('.derecha_flecha6').css('display','none');
    	$('.izquierda_flecha6').css('display','none');
   }

     $('.img_carrusel6').on('click',function(){
         $('#bigimage6').attr('src',$(this).attr('src'));
        return false;
     });

     $('.izquierda_flecha6').on('click',function(){
         if(posicion6>0){
            posicion6 = posicion6-1;
        }else{
            posicion6 = numeroImatges6-3;
        }
        $(".carrusel6").animate({"left": -($('#imagen6_'+posicion6).position().left)}, 600);
        return false;
     });

     $('.izquierda_flecha6').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha6').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha6').on('click',function(){
        if(numeroImatges6>posicion6+3){
            posicion6= posicion6+1;
        }else{
            posicion6 = 0;
        }
        $(".carrusel6").animate({"left": -($('#imagen6_'+posicion6).position().left)}, 600);
        return false;
     });

 });


	// Waypoints
$('.seccion').waypoint(
	function(direction) {
		if (direction ==='down') {
			var wayID = $(this).attr('id');
		} else {
			var previous = $(this).prev();
			var wayID = $(previous).attr('id');
		}
		$('.current').removeClass('current');
		$('.menu_principal a[href$=#'+wayID+']').addClass('current');
	}, 
	{ offset: '20%' }
);

/// StickNav
var stickyNavTop = $('.menu').offset().top;

var stickyNav = function(){
	var scrollTop = $(window).scrollTop();
};
	stickyNav();
$(window).scroll(function() {
	stickyNav();
});

});

