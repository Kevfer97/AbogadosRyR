(function () {
	
	function crearmenu() {
		

				var html = " ";

				//  <!--===========================MENU========================--->


				html += '<nav class="navbar  fixed-top  navbar-expand-lg navbar-toggler-sm" id="menu">';
				html += '<a class="navbar-brand" href="index.html">';
				html += '<img class="logo" src="img/logo.png" alt="">';
				html += '</a>';
				html += '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">';
				html += '<span class="navbar-toggler-icon"></span>';
				html += '</button>';
				// '<!--===========================ITEM1 INICIO========================--->';
				html += '<div class="collapse navbar-collapse" id="navbarNavDropdown">';
				html += '<ul class="navbar-nav"> <!-- ml-auto // esta clase es para poner el menu a la derecha-->';
				html += '<li class="nav-item active">';
				html += '<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>';
				html += '</li>';
				// '<!--===========================ITEM1 FINAL========================--->';
				// '<!--===========================ITEM2 INICIO========================--->';
				html += '<li class="nav-item dropdown">';
				html += '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">R&R Abogados y Contadores </a>';
				html += '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
				html += '<a class="dropdown-item" href="#">Quienes Somos</a>';
				html += '<a class="dropdown-item" href="#">Historia</a>';
				html += '</div>';
				// '<!--===========================ITEM2 FINAL========================--->';
				// '<!--===========================ITEM3 INICIO========================--->';
				// '<!--===========================SUBMENU INICIO========================--->';
				html += '<li class="nav-item dropdown">';
				html += '<a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle">Servicios</a>';
				html += '<ul class="dropdown-menu">';
				html += '<li class="dropdown-item dropdown-submenu">';
				html += '<a data-toggle="dropdown" class="dropdown-toggle">Jurídicos</a>';
				html += '<ul class="dropdown-menu">';
				html += '<li class="dropdown-item">';
				html += '<a href="#">Familia</a>';
				html += '</li>';
				html += '<li class="dropdown-item">';
				html += '<a href="#">Trabajo</a>';
				html += '</li>';
				html += '<li class="dropdown-item">';
				html += '<a href="#">Civil y mercantil</a>';
				html += '</li>';
				html += '<li class="dropdown-item">';
				html += '<a href="#">Derechos Humanos</a>';
				html += '</li>';
				html += '</ul>';
				html += '</li>';
				html += '<li class="dropdown-item dropdown-submenu">';
				html += '<a  data-toggle="dropdown" class="dropdown-toggle">Contables</a>';
				html += '<ul class="dropdown-menu">';
				html += '<li class="dropdown-item">';
				html += '<a href="#">Declaraciones de impuestos</a>';
				html += '</li>';
				html += '</ul>';
				html += '</li>';
				html += '</ul>';
				html += '</li>';
				// '<!--===========================SUBMENU FINAL========================--->';
				// '<!--===========================ITEM3 FINAL========================--->';
				// '<!--===========================ITEM4 INICIO========================--->';
				html += '<li class="nav-item dropdown">';
				html += '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Que nos diferencia </a>';
				html += '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
				html += '<a class="dropdown-item" href="#">Valores</a>';
				html += '</div>';
				// '<!--===========================ITEM4 FINAL========================--->';
				// '<!--===========================ITEM5 INICIO========================--->';
				html += '<li class="nav-item dropdown">';
				html += '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualidad</a>';
				html += '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
				html += '<a class="dropdown-item" href="#">Noticias / Relacion FB</a>';
				html += '<a class="dropdown-item" href="#">Casos de éxito</a>';
				html += '</div>';
				//  <!--===========================ITEM5 FINAL========================--->';
				// '<!--===========================ITEM6 INICIO========================--->';
				html += '<li class="nav-item dropdown">';
				html += '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contacto</a>';
				html += '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
				html += '<a class="dropdown-item" href="#">Ubicación</a>';
				html += '<a class="dropdown-item" href="#">Formulario de contacto</a>';
				html += '</div>';
				// '<!--===========================ITEM6 FINAL========================--->';
				html += '</ul>';
				html += '</ul>';
				html += '</div>';
				html += '</nav>';

				//==========================MENU========================
				$("body").prepend(html);
	};

	crearmenu();
})();