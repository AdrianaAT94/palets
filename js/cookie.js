document.write("<style></style>");



/*!
 * jQuery Cookie Plugin v1.4.0
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
 function getVarsUrl(){
    var url= location.search.replace("?", "");
    var arrUrl = url.split("&");
    var urlObj={};   
    for(var i=0; i<arrUrl.length; i++){
        var x= arrUrl[i].split("=");
        urlObj[x[0]]=x[1]
    }
    return urlObj;
}
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as anonymous module.
		define(['jquery'], factory);
	} else {
		// Browser globals.
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}
	function doPopups() {
  if (!document.getElementsByTagName) return false;
  var links=document.getElementsByTagName("a");
  for (var i=0; i < links.length; i++) {
    if (links[i].className.match("popup")) {
      links[i].onclick=function() {
        // Below - to open a full-sized window, just use: window.open(this.href);
        window.open(this.href, "", "top=40,left=40,width=600,height=400,scrollbars");
        return false;
      }
    }
  }
}
window.onload=doPopups;
// End -->
	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape...
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}

		try {
			// Replace server-side written pluses with spaces.
			// If we can't decode the cookie, ignore it, it's unusable.
			// If we can't parse the cookie, ignore it, it's unusable.
			s = decodeURIComponent(s.replace(pluses, ' '));
			return config.json ? JSON.parse(s) : s;
		} catch(e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}

	var config = $.cookie = function (key, value, options) {

		// Write
		if (value !== undefined && !$.isFunction(value)) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setDate(t.getDate() + days);
			}

			return (document.cookie = [
				encode(key), '=', stringifyCookieValue(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// Read

		var result = key ? undefined : {};

		// To prevent the for loop in the first place assign an empty array
		// in case there are no cookies at all. Also prevents odd result when
		// calling $.cookie().
		var cookies = document.cookie ? document.cookie.split('; ') : [];

		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = parts.join('=');

			if (key && key === name) {
				// If second argument (value) is a function it's a converter...
				result = read(cookie, value);
				break;
			}

			// Prevent storing a cookie that we couldn't decode.
			if (!key && (cookie = read(cookie)) !== undefined) {
				result[name] = cookie;
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) === undefined) {
			return false;
		}

		// Must not alter options, thus extending a fresh object...
		$.cookie(key, '', $.extend({}, options, { expires: -1 }));
		return !$.cookie(key);
	};

}));




$(document).ready(function() 
{
	var misVariablesGet = getVarsUrl();
	if ((!$.cookie("msgcookie"))&&(misVariablesGet.lan == 'es'))
	{
		$("body").prepend("<div class='msgcookie'><div class='contenido_msg'><span class='advice'></span><p>En esta web utilizamos cookies con fines estadísticos para optimizar la funcionalidad y proporcionar de esta forma contenidos a la medida de sus intereses. Puede aceptar su uso pulsando en “Aceptar”. Si quiere saber más sobre la Ley de Cookies pulse <a href='aviso.php?lan=es' target='_blank'>AQUÍ</a></p><a href='#' class='close'></a></div></div>");
		
		$("body").on("click", ".close", function(e) {
			e.preventDefault();
			$.cookie('msgcookie', 'aceptado');
			$(".msgcookie").fadeOut();
		});
	
	}
if ((!$.cookie("msgcookie"))&&(misVariablesGet.lan == 'gl'))
	{
		$("body").prepend("<div class='msgcookie'><div class='contenido_msg'><span class='advice'></span><p></a>Nesta web usamos cookies pra fins estatísticos pra optimizar a funcionalidade e, así, ofrecer contidos adaptados ós seus intereses. Pode aceptar o uso coa premendo en “Aceptar”. Se quere saber máis sobre a Lei de Cookies prema <a href='aviso.php?lan=gl' target='_blank'>AQUÍ</a></p><a href='#' class='close'></a></div></div>");
		
		$("body").on("click", ".close", function(e) {
			e.preventDefault();
			$.cookie('msgcookie', 'aceptado');
			$(".msgcookie").fadeOut();
		});
	
	}
if ((!$.cookie("msgcookie"))&&(misVariablesGet.lan == null))
	{
		$("body").prepend("<div class='msgcookie'><div class='contenido_msg'><span class='advice'></span><p>En esta web utilizamos cookies con fines estadísticos para optimizar la funcionalidad y proporcionar de esta forma contenidos a la medida de sus intereses. Puede aceptar su uso pulsando en “Aceptar”. Si quiere saber más sobre la Ley de Cookies pulse <a href='aviso.php?lan=es' target='_blank'>AQUÍ</a></p><a href='#' class='close'></a></div></div>");
		
		$("body").on("click", ".close", function(e) {
			e.preventDefault();
			$.cookie('msgcookie', 'aceptado');
			$(".msgcookie").fadeOut();
		});
	
	}
if ((!$.cookie("msgcookie"))&&(misVariablesGet.lan == 'en'))
	{
		$("body").prepend("<div class='msgcookie en'><div class='contenido_msg'><span class='advice'></span><p>In this web we use cookies with statistical ends to optimize the functionality and to provide of this form contained to the measure of his interests. It can accept his use pulsating in “Agreeing”. If you want to know more about the Law of Cookies press <a href='aviso.php?lan=en' target='_blank'>HERE</a></p><a href='#' class='close'></a></div></div>");
		
		$("body").on("click", ".close", function(e) {
			e.preventDefault();
			$.cookie('msgcookie', 'aceptado');
			$(".msgcookie").fadeOut();
			$.post('../cookie.php')
			    .done(function(data) 
			    {
			    });
		});
	
	}
});