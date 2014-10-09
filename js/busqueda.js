jQuery.support.cors = true;
(function( jQuery ) {
  // Create the request object
  // (This is still attached to ajaxSettings for backward compatibility)
  jQuery.ajaxSettings.xdr = function() {
    return (window.XDomainRequest ? new window.XDomainRequest() : null);
  };

  // Determine support properties
  (function( xdr ) {
    jQuery.extend( jQuery.support, { iecors: !!xdr });
  })( jQuery.ajaxSettings.xdr() );

  // Create transport if the browser can provide an xdr
  if ( jQuery.support.iecors ) {

    jQuery.ajaxTransport(function( s ) {
      var callback;

      return {
        send: function( headers, complete ) {
          var xdr = s.xdr();

          xdr.onload = function() {
            var headers = { 'Content-Type': xdr.contentType };
            complete(200, 'OK', { text: xdr.responseText }, headers);
          };
          
          // Apply custom fields if provided
					if ( s.xhrFields ) {
            xhr.onerror = s.xhrFields.error;
            xhr.ontimeout = s.xhrFields.timeout;
					}

          xdr.open( s.type, s.url );

          // XDR has no method for setting headers O_o

          xdr.send( ( s.hasContent && s.data ) || null );
        },

        abort: function() {
          xdr.abort();
        }
      };
    });
  }
})( jQuery );
/**
 * En este documento se maneja todo el javascript relacionado con la funcionalidad del listado
 * de elementos multimedia
 *
 * @author David Andrés Manzano - damanzano
 *
 **/
jQuery(document).ready(function(){    
    titleSearcher();    
});


/**
 *En esta función se ejecutan las funciones necesarias para la validación del buscador
 *de elementos multimedia por título
 *
 *@author damanzano
 *@since 26/11/10
 **/
function titleSearcher(){
    //Manejador del onclick del los enlaces de navegación
    jQuery(".app_navlink").click(function(e){
        e.preventDefault();
    });

    //manejador del submit del formulario
    jQuery("form#buscar").validate({
        rules: {},
        messages: {},
        submitHandler:
        function(form) {
            //alert(jQuery("#pTipoAcceso").val().toString());
            loadBDResults(1, jQuery("form#buscar #size").val(), jQuery("form#buscar #tipo").val(), jQuery("form#buscar #pkeyword").val());
        }
    });
}

/**
 *Esta función se encarga de hacer un llamado asincrónico al servidor para
 *cargar los resultados de busqueda deacuerdo a los parametros establecidos por
 *el usuario.
 *
 * Se cambia la forma de obtener el parámetro prueba que se envía en la solicitud ajax
 *
 *@author damanzano
 *@since 22/11/10
 *
 *@param int cont
 *@param int size
 *@param char newsearch
 *@param string pkeyword
 **/
function loadBDResults(cont,size, tipo, pkeyword){
    jQuery("#app_results").html("<div class=\"loader\"><img src=\""+biblioappsURL+"/commons/images/loader.gif\"/><div>");
    //Carga los resultados
    jQuery.ajax({
        type: "GET",
        url: URLbuscador,
		cache: false,
		crossDomain: true,
		async: false,
        data: {
            pagina:cont,
            rpp:size,
            tipo:tipo,
            query:pkeyword,
            revista: revista,
            prueba: prueba
        },
        success: function(list){
            jQuery("#app_results").html(list);
        },
		error: function(jqXHR, textStatus, errorThrown){
			jQuery("#app_results").html(textStatus);
		}
    });

    
}