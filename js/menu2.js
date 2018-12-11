               
function crear_menu() {
  // body...

                var html = " ";



                html+='<nav class="navbar  fixed-top  navbar-expand-xl navbar-toggler-sm" id="menu">';
                html+='<a class="navbar-brand" href="index.html">';
                html+='<img class="logo" src="img/logo.png" alt="">';
                html+='</a>';
                html+='<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">';
                html+='<span class="navbar-toggler-icon"></span>';
                html+='</button>';
                html+='<!--===========================ITEM1 INICIO========================--->';
                html+='<div class="collapse navbar-collapse" id="navbarNavDropdown">';
                html+='<ul class="navbar-nav"> <!-- ml-auto // esta clase es para poner el menu a la derecha-->';
                html+='<li class="nav-item active">';
                html+='<a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>';
                html+='</li>';
                html+='<!--===========================ITEM1 FINAL========================--->';
                html+='<!--===========================ITEM2 INICIO========================--->';
                html+='<li class="nav-item dropdown">';
                html+='<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">R&R Abogados y Contadores </a>';
                html+='<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                html+='<a class="dropdown-item" href="somos.html">Quienes Somos</a>';
                html+='<a class="dropdown-item" href="somos.html#historia">Historia</a>';
                html+='</div>';
                html+='<!--===========================ITEM2 FINAL========================--->';
                html+='<!--===========================ITEM3 INICIO========================--->';
                html+='<!--===========================SUBMENU INICIO========================--->';
                html+='<li class="nav-item dropdown">';
                html+='<a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle">Servicios</a>';
                html+='<ul class="dropdown-menu">';
                html+='<li class="dropdown-item dropdown-submenu">';
                html+='<a class="dropdown-item" href="servicios.html">Jurídicos</a>';
                html+='</li>';
                html+='<li class="dropdown-item dropdown-submenu">';
                html+='<a class="dropdown-item" href="servicios.html">Contables</a>';
                html+='<!--   <ul class="dropdown-menu">';
                html+='<li class="dropdown-item"> <a href="#">Declaraciones de impuestos</a> </li>';
                html+='<li class="dropdown-item"> <a href="servicios.html#Persona-natural">Persona natural</a></li>';
                html+='<li class="dropdown-item"> <a href="#">Empresa</a></li>';
                html+='</ul> -->';
                html+='</li>';
                html+='</ul>';
                html+='</li>';
                html+='<!--===========================SUBMENU FINAL========================--->';
                html+='<!--===========================ITEM3 FINAL========================--->';
                html+='<!--===========================ITEM4 INICIO========================--->';
                html+='<li class="nav-item dropdown">';
                html+='<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Que nos diferencia </a>';
                html+='<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                html+='<a class="dropdown-item" href="somos.html">Valores</a>';
                html+='</div>';
                html+='<!--===========================ITEM4 FINAL========================--->';
                html+='<!--===========================ITEM5 INICIO========================--->';
                html+='<li class="nav-item dropdown">';
                html+='<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualidad</a>';
                html+='<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                html+='<a class="dropdown-item" href="Noticias.html">Noticias / Relacion FB</a>';
                html+='<a class="dropdown-item" href="HistoriasExito.html">Casos de éxito</a>';
                html+='</div>';
                html+='<!--===========================ITEM5 FINAL========================--->';
                html+='<!--===========================ITEM6 INICIO========================--->';
                html+='<li class="nav-item dropdown">';
                html+='<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contacto</a>';
                html+='<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                html+='<a class="dropdown-item" href="contacto.html#mapa">Ubicación</a>';
                html+='<a class="dropdown-item" href="contacto.html">Formulario de contacto</a>';
                html+='</div>';
                html+='<!--===========================ITEM6 FINAL========================--->';
                html+='</ul>';
                html+='</ul>';
                html+='<div class="numeros">';
                html+='<p>'+dato_infor+'<p>';
                html+='</div>';
                html+='</div>';
                html+='</nav>';
                  // consol}]e.log(html);  
                $("body").append(html);

      };

      crear_menu();
