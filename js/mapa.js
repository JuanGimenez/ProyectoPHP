window.onload = function() {

	var mapDiv = document.getElementById('map');
	var malaga = new google.maps.LatLng(36.622281, -4.497189);

	// ACTIVAMOS O DESACTIVAMOS LA UI DE GOOGEL MAPS POR DEFECTO
	var destativarUI = false;
    
	var on_typeControl = true;
		// SE PEDE CAMBIAR MAPTYPE: HORIZONTAL_BAR - DROPDOWN_MENU - DEFAULT
		var TypeControlEstilo = google.maps.MapTypeControlStyle.DEFAULT;
		// CENTER - LEFT - RIGHT - TOP - BOTTOM ESTRUCTURA: XXX_XXX
		var TypeControlPos = google.maps.ControlPosition.BOTTOM_CENTER

	// Zoom de carga desde 0 - 18
	var NZoom = 11;
        
    // ACTIVAMOS O DESACTIVAMOS EL ZOOM DE GOOGEL MAPS
    var on_Zoom = false;
    // CENTER - LEFT - RIGHT - TOP - BOTTOM ESTRUCTURA: XXX_XXX
    var on_ZoomPos = google.maps.ControlPosition.TOP_RIGHT

    // activar o desactivar rotacion
    var on_Rotacion = true;

    // ativa el teclado en google maps
    var on_Teclado = true;
    
    // ativa el doble click en google maps
    var off_DobleClick = false;
    
    // permite arrastrar el mapa en google maps
    var on_Arrastrar = true;

    // permite usar la rueda del ratón en google maps
    var on_Rueda = true;

    // permite usar la vista de angulo: 0 - 45
    var on_Angulo = 0;

    // Cursor sobre el div #map: auto - crosshair - default - e-resize - help - move - n-resize - ne-resize - nw-resize - pointer - s-resize - se-resize - sw-resize - text - url(url) - w-resize - wait
    var CursorMap = 'auto';

    // Cursor cuando arrastramos el mapa: auto - crosshair - default - e-resize - help - move - n-resize - ne-resize - nw-resize - pointer - s-resize - se-resize - sw-resize - text - url(url) - w-resize - wait
    var CursorArrastre = 'auto';

    // añadimo sun color de fonde del mapa
    var ColorFondo = '#000';

    // si por un casual no queremos perder la información dentro del div #map
    var limpiarCont = true;
    
    // permite usar la rueda del ratón en google maps
    var on_StreetView = false;
	// CENTER - LEFT - RIGHT - TOP - BOTTOM ESTRUCTURA: XXX_XXX
	var on_StreetViewPos = google.maps.ControlPosition.RIGHT_CENTER
    
    	// CARGAMOS TODAS LAS OPCIONES DE NUESTRO MAPA
		var options = {
			center: malaga,
			zoom: NZoom,
			// fase de pruebas !!!
			clickableIcons: false,
			// activar o desactivar rotacion
			rotateControl: on_Rotacion,
			scaleControl: true,
			// vista en angulo: 0 - 45
			tilt: on_Angulo,
	        
			// el valor true desactiva la interfaz, el valor false (por defecto) la activa
			disableDefaultUI: destativarUI,
	        
			//el valor false desactiva el mapTypeControl. Para mostrarlo debemos utilizar el valor true o no utilizar este atributo (por defecto el valor es true)
			mapTypeControl: on_typeControl,
			mapTypeControlOptions: {
				style: TypeControlEstilo,
				position: TypeControlPos,
				// Permitiremos al usuario escoger entre los siguientes dos tipos de mapa
				mapTypeIds: [
			        google.maps.MapTypeId.HYBRID,
			        google.maps.MapTypeId.ROADMAP,
			        google.maps.MapTypeId.TERRAIN,
			        google.maps.MapTypeId.SATELLITE

	      		]
			},

	        zoomControl: on_Zoom,
	        zoomControlOptions: {
	            position: on_ZoomPos
	        },

	        // Los atajos de teclado disponibles por defecto para navegar son las cuatro teclas de dirección y las teclas +/- para el zoom.
	        keyboardShortcuts: on_Teclado,

	        // desactiva la posibilidad de hacer doble click dentro del mapa para hacer zoom.
	        disableDoubleClickZoom: off_DobleClick,

	        // Desactiva la opción de arrarstrar dentro del mapa.
	        draggable: on_Arrastrar,

	        // Desactiva la opción d ehacer zoom con la rueda del ratón.
	        scrollwheel: on_Rueda,

	        // si por un casual no queremos perder la información dentro del div #map
	        noClear: limpiarCont,

	        // Añadimos un color de fondo al div del mapa, mientras se carga el mapa.
	        backgroundColor: ColorFondo,

	        // Cursor sobre el div #map: auto - crosshair - default - e-resize - help - move - n-resize - ne-resize - nw-resize - pointer - s-resize - se-resize - sw-resize - text - url(url) - w-resize - wait
	        draggableCursor: CursorMap,
	        // Cursor cuando arrastramos el mapa: auto - crosshair - default - e-resize - help - move - n-resize - ne-resize - nw-resize - pointer - s-resize - se-resize - sw-resize - text - url(url) - w-resize - wait
	        draggingCursor: CursorArrastre,

	        // Activamos el streetView y le añadimos una posición.
	        streetViewControl: on_StreetView,
	        streetViewControlOptions: {
	            position: on_StreetViewPos
	        }
		};


	// Cargamos toda as opciones de arriba en el mapa
	var mapa = new google.maps.Map(mapDiv, options);


// -------------------------------------------------------------------------------

			// MARCAS:

			// SI QUIERES BORRAR MARKER1 DEBES DE AGREGAR, FUERA DE ESTÁ FUNCIÓN -- línea 178
				var ferrara = new google.maps.Marker({
				// añadimos donde queremos que aparezca
				position: new google.maps.LatLng(document.getElementsByName("x"), document.getElementsByName("y")),
				// Hacemos referencia al mapa en el que se añadira.
				map: mapa,
				// Añade un titulo al marcador agregado	
				title: 'document.getElementByName("nick")',
				// Si queremos añadir un ico personalizado...añadimos la url donde esta ubicado.
								// icon: 'icono_bandera_azul.png',
								// habilita que sea arrastrable el marcador
				draggable: false,
				// Añade opacidad al marcador
				opacity: 1,
				// DROP - BOUNCE
				animation: google.maps.Animation.DROP
				});





						// borra el marcador
			// marker1.setMap(null);

// -------------------------------------------------------------------------------


}
