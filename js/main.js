
	// Inicio scrip del modal
	function MostrarModal(etiqueta){
			var tl = new TimelineMax(); 
			var $modal = $(etiqueta);
		
			$modal.show();
			$(".modal-sombra").show();
			$('body,html').animate({scrollTop : 0}, 500);
    	
	
	};
	function OcultarModal() {
		$(".Modal-Gen").hide();
		$(".modal-sombra").hide();
	};
	$(".modal-sombra").on("click",function(){
	OcultarModal();
	});
	$(".btnCerarModal").on("click",function(){
		OcultarModal();
	});
	// funciones Generales
	// funcion que retorna lo  capturado por la variable
	function $_GET(param) {
		var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
};

