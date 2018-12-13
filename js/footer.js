               
function crear_footer() {
  // body...

                var html = " ";

html+='<footer class="footer-distributed">';
html+='<div class="footer-left">';
html+='<h3>Abogados<span>RyR</span></h3>';
html+='<p class="footer-links">';
html+='<a href="index.html">Inicio</a>';
html+=' ';
html+='<a href="somos.html">Acerca de</a>';
html+=' ';
html+='<a href="contacto.html">Contactanos</a>';
html+='</p>';
html+='<p class="footer-company-name">Rivas Rodríguez Abogados y Contadores &copy; 2018</p>';
html+='</div>';
html+='<div class="footer-center">';
html+='<div>';
html+='<i class="fa fa-map-marker"></i>';
html+='<p><span>'+dato_info+'</p>';
html+='</div>';
html+='<div>';
html+='<i class="fa fa-phone"></i>';
html+='<p>'+dato_infor_slider_Tel+'</p>';
html+='</div>';
html+='<div>';
html+='<i class="fa fa-envelope"></i>';
html+='<p><a href="mailto:'+correo_Contact+'">'+correo_Contact+'</a></p>';
html+='</div>';
html+='</div>';
html+='<div class="footer-right">';
html+='<p class="footer-company-about">';
html+='<span>Acerca de nuestra compañia</span>';
html+='Rivas Rodríguez Abogados y Contadores somos un equipo de trabajo formado por profesionales honestos y trasparentes que están siempre dispuestos a servir.';
html+='</p>';
html+='<div class="footer-icons">';
html+='<a href="'+social_facebook+'"><i class="fa fa-facebook"></i></a>';
html+='<a href="'+social_twitter+'"><i class="fa fa-twitter"></i></a>';
html+='</div>';
html+='</div>';
html+='</footer>';

                $("body").append(html);

      };

      crear_footer();
